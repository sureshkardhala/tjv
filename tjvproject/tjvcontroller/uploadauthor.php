<?php 
include('./config.php');
$msg='';
if(isset($_POST['submit'])){
  $author_name= mysqli_real_escape_string($dbconn, $_POST['author_name']);
  $author_description= mysqli_real_escape_string($dbconn, $_POST['author_description']);
  $author_designation= mysqli_real_escape_string($dbconn, $_POST['author_designation']);
  $imgfile=$_FILES["image"]["name"];
  $file_size = $_FILES['image']['size'];
  $fileinfo = @getimagesize($imgfile);
  $img_path="authorimages/".$imgfile;
  $extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
  $allowed_extensions = array(".jpg",".jpeg",".png", ".pdf", "jpg","jpeg","png", "pdf", '.JPG', '.JPEG', '.PNG', '.PDF' );
  $user_check_query = "SELECT * FROM authors WHERE author_name='$author_name' OR author_image='$imgfile'LIMIT 1";
  $result = mysqli_query($dbconn, $user_check_query);
  $check = mysqli_fetch_assoc($result);
  if ($check ) {
    if( ($check['author_name'] === $author_name)) {
              $msg = '<p style="color:red">Author Already Exists &nbsp;<i class="fa-solid fa-circle-exclamation"></i></p>';
    }
    if( ($check['author_image'] === $imgfile)) {
              $msg = '<p style="color:red">Image Already Exists &nbsp;<i class="fa-solid fa-circle-exclamation"></i></p>';
    }
  }elseif(!in_array($extension, $allowed_extensions)){
              $msg = '<p style="color:red">Invalid format. Only jpg / jpeg/ png format allowed &nbsp;<i class="fa-solid fa-circle-exclamation"></i></p>';   
  }elseif($file_size > 100000000){
              $msg = '<p style="color:red">File is too Large &nbsp;<i class="fa-solid fa-circle-exclamation"></i></p>';
  }else{
    $imgnewfile=$imgfile;  
    if((move_uploaded_file($_FILES["image"]["tmp_name"],$img_path))){
      $query = mysqli_query($dbconn, "INSERT INTO authors (author_image, author_name, author_description, author_designation) VALUES ('$imgnewfile', '$author_name', '$author_description','$author_designation')");
      if($query){     
        $msg = '<p style="color:#00D583;">Author Details Uploaded Successfully! <i class="fa-solid fa-circle-check"></i></p>';
      }else{
        $msg = '<p style="color:red">Failed To Upload Author Details &nbsp;<i class="fa-solid fa-circle-exclamation"></i></p>';
      }
    }else{
      $msg = '<p style="color:red">Failed To Upload Image &nbsp;<i class="fa-solid fa-circle-exclamation"></i></p>';
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./static/css/form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Authors</title>
   </head>
<body>
  <div class="container">
    <?php echo $msg ; ?>
    <div class="title">Upload Author Details</div>
    <div class="content">
      <form action="<?=$_SERVER['PHP_SELF'];?>" method="post"  enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter Full name" name="author_name" required>
          </div>
          <div class="input-box">
            <span class="details">Designation</span>
            <input type="text" placeholder="Enter Designation" name="author_designation" required>
          </div>
          <div class="input-box">
            <span class="details">Image</span>
            <input type="file" name="image" required>
          </div>
        </div>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Description</span>
            <textarea name="author_description" id="" cols="100%" rows="10" style="padding:10px; font-size:15px;" required></textarea>
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