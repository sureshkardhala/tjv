<?php
session_start();
include('config.php');
if (isset($_SESSION['email'])){
     header('location:../login.php');   
}else{
if(isset($_POST['submit'])){
$title= mysqli_real_escape_string($dbconn, $_POST['title']);
$description= mysqli_real_escape_string($dbconn, $_POST['description']);
$speaker= mysqli_real_escape_string($dbconn, $_POST['speaker']);
$speakerabout= mysqli_real_escape_string($dbconn, $_POST['speakerabout']);
$slug_url=strtolower(str_replace(" ", "-", $title));
$category= mysqli_real_escape_string($dbconn, $_POST['category']);
$topic= mysqli_real_escape_string($dbconn, $_POST['topic']);
$seo_description= mysqli_real_escape_string($dbconn, $_POST['seo_description']);
$seo_keywords= mysqli_real_escape_string($dbconn, $_POST['seo_keywords']);
$user="suresh";
$event_date= mysqli_real_escape_string($dbconn, $_POST['event_date']);
$event_time= mysqli_real_escape_string($dbconn, $_POST['event_time']);
$facebook= mysqli_real_escape_string($dbconn, $_POST['facebook']);
$youtube= mysqli_real_escape_string($dbconn, $_POST['youtube']);
$zoom= mysqli_real_escape_string($dbconn, $_POST['zoom']);
$imgfile=$_FILES["image"]["name"];
$imgfile1=$_FILES["speakerimage"]["name"];
$file_size = $_FILES['image']['size'];
$file_size1 = $_FILES['speakerimage']['size'];
$fileinfo = @getimagesize($imgfile);
$fileinfo1 = @getimagesize($imgfile1);
$img_path="events/".$imgfile;
$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
$extension1 = substr($imgfile1,strlen($imgfile1)-4,strlen($imgfile1));
$allowed_extensions = array(".jpg",".jpeg",".png", ".pdf");
$user_check_query = "SELECT * FROM events WHERE image='$imgfile' LIMIT 1";
$user_check_query1 = "SELECT * FROM events WHERE speakerimage='$imgfile1' LIMIT 1";
$result = mysqli_query($dbconn, $user_check_query);
$result1 = mysqli_query($dbconn, $user_check_query);
$check = mysqli_fetch_assoc($result);
$check1 = mysqli_fetch_assoc($result1);
		if ($check and $check1) {
			if( ($check['image'] === $imgfile) and  ($check1['speakerimage'] === $imgfile1)) {
                echo "<script>alert('Image already exists with same name');</script>";
			}
		}
        elseif(!in_array($extension,$allowed_extensions) and !in_array($extension1,$allowed_extensions)){
        echo "<script>alert('Invalid format. Only jpg / jpeg/ png format allowed');</script>";   
        }
        elseif($file_size > 10000000 and $file_size1>10000000){
            echo "<script>alert('File is too Large');</script>";
        }else{
$imgnewfile=$imgfile;  
$imgnewfile1=$imgfile1;
if((move_uploaded_file($_FILES["image"]["tmp_name"],$img_path)) and (move_uploaded_file($_FILES["speakerimage"]["tmp_name"],$img_path))){
$query = mysqli_query($dbconn, "INSERT INTO events (image, speakerimage, title, description, speaker, speakerabout, category, topic, slug_url,seo_description, seo_keywords, user, event_date, event_time, youtube, facebook, zoom) VALUES ('$imgnewfile', '$imgnewfile1', '$title', '$description','$speaker', '$speakerabout', '$category', '$topic', '$slug_url', '$seo_description','$seo_keywords', '$user', '$event_date', '$event_time', '$youtube', '$facebook', '$zoom')");
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
   </head>
<body>
  <div class="container">
    <div class="title">Upload Event</div>
    <div class="content">
      <form action="upload_event.php" method="post"  enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Title</span>
            <input type="text" placeholder="Enter your event title" name="title" required>
          </div>
          <div class="input-box">
            <span class="details">Image</span>
            <input type="file" name="image" required>
          </div>
         <div>
         <div class="input-box">
            <span class="details">Event Description</span>
            <textarea name="description" id="" cols="100%" rows="15" style="padding:10px; font-size:15px;"></textarea>
          </div>
         </div>
          <div class="input-box">
            <span class="details">Event Date</span>
            <input type="date"  name="event_date" required>
          </div>
          <div class="input-box">
            <span class="details">Event Timings</span>
            <input type="time" name="event_time" required>
          </div>
          <div class="input-box">
            <span class="details">Choose Event</span>
            <select name="category">
                <option value="seminars">Seminars</option>
                <option value="meetings">Meetings</option>
                <option value="webinars">Webinars</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Choose Topic</span>
            <select name="topic">
                <option value="neoliberalism">NEO-LIBERALISM</option>
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
          <div class="input-box">
            <span class="details">Speaker</span>
            <input type="text" name="speaker" placeholder="Enter your speaker name" required>
          </div>
          <div class="input-box">
            <span class="details">Speaker Image</span>
            <input type="file" name="speakerimage"  required>
          </div>
        </div>
        <div class="user-details">
          <div class="input-box">
            <span class="details">About Speaker</span>
            <textarea name="speakerabout" id="" cols="100%" rows="10" style="padding:10px; font-size:15px;" required></textarea>
          </div>
        </div>
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
            <span class="details">YOUTUBE</span>
            <input type="text" name="youtube"  required>
          </div>
          <div class="input-box">
            <span class="details">Facebook</span>
            <input type="text" name="facebook"  required>
          </div>
          <div class="input-box">
            <span class="details">Zoom</span>
            <input type="text" name="zoom"  required>
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
<?php }?>