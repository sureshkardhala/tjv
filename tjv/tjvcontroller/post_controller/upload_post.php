<?php 
session_start();
include('../config.php');
if (isset($_SESSION['email'])){
     header('location: ../login.php');   
}else{
if(isset($_POST['submit'])){
$title= mysqli_real_escape_string($dbconn, $_POST['title']);
$description= mysqli_real_escape_string($dbconn, $_POST['description']);
$slug_url=strtolower(str_replace(" ", "-", $title));
$category= mysqli_real_escape_string($dbconn, $_POST['category']);
$topic= mysqli_real_escape_string($dbconn, $_POST['topic']);
$seo_description= mysqli_real_escape_string($dbconn, $_POST['seo_description']);
$seo_keywords= mysqli_real_escape_string($dbconn, $_POST['seo_keywords']);
$user="suresh";


$imgfile=$_FILES["image"]["name"];
$file_size = $_FILES['image']['size'];
$fileinfo = @getimagesize($imgfile);
$img_path="posts/".$imgfile;

// $filename = $_FILES["featured_image"]["name"]; 
// $tempname = $_FILES["featured_image"]["tmp_name"];     
// $folder = "../static/img/blog-images/".$filename; 
// move_uploaded_file($tempname, $folder);


$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
$allowed_extensions = array(".jpg",".jpeg",".png", ".pdf");
$user_check_query = "SELECT * FROM posts WHERE image='$imgfile' LIMIT 1";
$result = mysqli_query($dbconn, $user_check_query);
$check = mysqli_fetch_assoc($result);
		if ($check ) {
			if( ($check['image'] === $imgfile)) {
                echo "<script>alert('Image already exists with same name');</script>";
			}
		}
        elseif(!in_array($extension,$allowed_extensions)){
        echo "<script>alert('Invalid format. Only jpg / jpeg/ png format allowed');</script>";   
        }
        elseif($file_size > 10000000){
            echo "<script>alert('File is too Large');</script>";
        }else{
$imgnewfile=$imgfile;  
if((move_uploaded_file($_FILES["image"]["tmp_name"],$img_path))){
$query = mysqli_query($dbconn, "INSERT INTO posts (image, title, description,category, topic, slug_url,seo_description, seo_keywords, user) VALUES ('$imgnewfile', '$title', '$description','$category', '$topic', '$slug_url', '$seo_description','$seo_keywords', '$user')");
if($query){     
       echo "<script>alert('Data inserted successfully');</script>";     
}
else{
    echo  "<script>alert('Data not inserted');</script>";
}
        }else{
            echo "<script>alert('Data not inserted successfully');</script>";
        }   
    } 
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/form.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>

   </head>
<body>
  <div class="container">
    <div class="title">Upload Event</div>
    <div class="content">
      <form action="upload_post.php" method="post"  enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Title</span>
            <input type="text" placeholder="Enter your title" name="title" required>
          </div>
          <div class="input-box">
            <span class="details">Image</span>
            <input type="file" name="image" required>
          </div>
          <div class="input-box">
            <span class="details">Category</span>
            <select name="category">
                <option value="blogs">Blogs & Posts</option>
                <option value="publications">Publications</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Choose Topic</span>
            <select name="topic">
                <option value="constitution">CONSTITUTION</option>
                <option value="genderequality">GENDER EQUALITY</option>
                <option value="educationforall">EDUCATION FOR ALL</option>
                <option value="publichealth">PUBLIC HEALTH</option>
                <option value="agriculture">AGRICULTURE</option>
                <option value="msme">MSME</option>
                <option value="publictransport">PUBLIC TRANSPORT</option>
                <option value="ruralemployment">RURAL EMPLOYMENT</option>
                <option value="environmentandclimatechange">ENVIRONMENT AND CLIMATE CHANGE</option>
                <option value="historyandculture">HISTORY AND CULTURE</option>
                <option value="anthropocene">ANTHROPOCENE</option>
                <option value="geology">GEOLOGY</option>
                <option value="nanotechnology">NANO-TECHNOLOGY</option>
                <option value="artificialintelligence">ARTIFICIAL INTELLIGENCE</option>
                <option value="waterresources">WATER RESOURCES</option>
                <option value="urbanisation">URBANISATION</option>
                <option value="land">LAND</option>
                <option value="centerstaterelations">CENTRE - STATE RELATIONS</option>
                <option value="economictheory">ECONOMIC THEORY</option>
                <option value="indianbanking">INDIAN BANKING</option>
                <option value="politicaltheory">POLITICAL THEORY</option>
                <option value="populationanddemography">POPULATION AND DEMOGRAPHY</option>
                <option value="religion">RELIGION</option>
                <option value="judicialreforms">JUDICIAL REFORMS</option>
                <option value="electoralreforms">ELECTORAL REFORMS</option>
                <option value="internationalrelations">INTERNATIONAL RELATIONS</option>
                <option value="globalisation">GLOBALISATION</option>
                <option value="inequality">INEQUALITY</option>
                <option value="socialjustice">SOCIAL JUSTICE</option>
                <option value="dynamicintegrtion">DYNAMIC INTEGRATION BETWEEN MARX, GANDHI AND AMBEDKAR</option>
            </select>
          </div>
         <div>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Seo_Keywords</span>
            <textarea name="seo_keywords" id="" cols="100%" rows="10" style="padding:10px; font-size:15px;" required></textarea>
          </div>
        </div>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Seo_Description</span>
            <textarea name="seo_description" id="" cols="100%" rows="10" style="padding:10px; font-size:15px;" required></textarea>
          </div>
        </div>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Description</span>
            <textarea class="description" name="description" id="" cols="100%" rows="10" style="padding:10px; font-size:15px;" required></textarea>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Submit" name="submit">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
<?php } ?>


<script>
 CKEDITOR.replace( 'description', {
  height: 1000,
  width: 700,
  filebrowserUploadUrl: "upload.php"
 });
</script>