<?php 
include('./config.php');
include('./components/authorsarrlist.php');
include('./components/topicsarrlist.php');
$msg='';
function getSeoKeywords(){
  $seo_keywords='';
  $keywords_file = "./seofiles/keywords.txt";
  $kfile = fopen( $keywords_file, "r" );       
  if( $kfile == false ) {
    $msg='SEO keywords are not available';
  }else{
    $filesize = filesize( $keywords_file );
    $seo_keywords = fread( $kfile, $filesize );
  }
  fclose( $kfile );
  return $seo_keywords;
}
function getSeoDescription(){
  $seo_description='';
  $description_file = "./seofiles/description.txt";
  $dfile = fopen( $description_file, "r" );       
  if( $dfile == false ) {
    $msg='SEO description not available';
  }else{
    $filesize = filesize( $description_file );
    $seo_description = fread( $dfile, $filesize );
  }
  fclose( $dfile );
  return $seo_description;
}
if(isset($_POST['submit'])){
  $title= mysqli_real_escape_string($dbconn, $_POST['title']);
  $description= mysqli_real_escape_string($dbconn, $_POST['description']);
  $slug_url=strtolower(str_replace(" ", "-", $title));
  $category= mysqli_real_escape_string($dbconn, $_POST['category']);
  $topic= mysqli_real_escape_string($dbconn, $_POST['topic']);
  $loginid="sureshkardhala2k22@gmail.com";
  $seo_keywords =getSeoKeywords();
  $seo_description =getSeoDescription();
  $author = mysqli_real_escape_string($dbconn, $_POST['author']);
  $date = mysqli_real_escape_string($dbconn, $_POST['date']);
  $time = mysqli_real_escape_string($dbconn, $_POST['time']);
  $facebooklink = mysqli_real_escape_string($dbconn, $_POST['facebooklink']);
  $zoomlink = mysqli_real_escape_string($dbconn, $_POST['zoomlink']);
  $youtubelink = mysqli_real_escape_string($dbconn, $_POST['youtubelink']);
  $meetingid = mysqli_real_escape_string($dbconn, $_POST['meetingid']);
  $meetingpassword = mysqli_real_escape_string($dbconn, $_POST['meetingpassword']);
  $imgfile=$_FILES["image"]["name"];
  $file_size = $_FILES['image']['size'];
  $fileinfo = @getimagesize($imgfile);
  $img_path="./eventimages/".$imgfile;
  $extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
  $allowed_extensions = array(".jpg",".jpeg",".png", ".pdf", "jpg","jpeg","png", "pdf", '.JPG', '.JPEG', '.PNG', '.PDF' );
  $user_check_query = "SELECT * FROM events WHERE title='$title' OR image='$imgfile' LIMIT 1";
  $result = mysqli_query($dbconn, $user_check_query);
  $check = mysqli_fetch_assoc($result);
  if ($check ) {
    if( ($check['title'] === $title)) {
              $msg = '<p style="color:red">Title Already Exists &nbsp;<i class="fa-solid fa-circle-exclamation"></i></p>';
    }
    if( ($check['image'] === $imgfile)) {
              $msg = '<p style="color:red">Image Already Exists &nbsp;<i class="fa-solid fa-circle-exclamation"></i></p>';
    }
  }elseif(!in_array($extension, $allowed_extensions)){
              $msg = '<p style="color:red">Invalid format. Only jpg / jpeg/ png format allowed &nbsp;<i class="fa-solid fa-circle-exclamation"></i></p>';   
  }elseif($file_size > 1000000000){
              $msg = '<p style="color:red">File is too Large &nbsp;<i class="fa-solid fa-circle-exclamation"></i></p>';
  }else{
    $imgnewfile=$imgfile;  
    if((move_uploaded_file($_FILES["image"]["tmp_name"],$img_path))){
      $query = mysqli_query($dbconn, "INSERT INTO events (title, author, image, description, slug_url, category, topic, seo_description, seo_keywords, loginid, date, time, meetingid, meetingpassword, zoomlink, facebooklink, youtubelink) VALUES ('$title', '$author', '$imgnewfile', '$description', '$slug_url', '$category', '$topic', '$seo_description', '$seo_keywords', '$loginid', '$date', '$time', '$meetingid', '$meetingpassword', '$zoomlink', '$facebooklink', '$youtubelink')");
      if($query){     
        $msg = '<p style="color:#00D583;">Post Uploaded Successfully! <i class="fa-solid fa-circle-check"></i></p>';
      }else{
        $msg = '<p style="color:red">Failed To Upload Post &nbsp;<i class="fa-solid fa-circle-exclamation"></i></p>';
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Events</title>
    <link rel="stylesheet" href="./static/css/form.css">
   </head>
<body>
  <div class="container" style="width:90%;">
  <?php echo $msg; ?>
    <div class="title">Upload Events</div>
    <div class="content">
      <form action="<?=$_SERVER['PHP_SELF'];?>" method="post"  enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Evenet Title</span>
            <input type="text" placeholder="Enter your title" name="title" required>
          </div>
          <div class="input-box">
            <span class="details">Image</span>
            <input type="file" name="image" required>
          </div>
          <div class="input-box">
            <span class="details">Date</span>
            <input type="date" name="date" required>
          </div>
          <div class="input-box">
            <span class="details">Time</span>
            <input type="time" name="time" required>
          </div>
          <div class="input-box">
            <span class="details">Type Of Event</span>
            <select name="category">
                <option value="seminars">Seminars</option>
                <option value="webinars">Webinars</option>
                <option value="meetings">Meetings</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Choose Topic</span>
            <select name="topic">
              <?php foreach ($topics as $key => $value) {?>
                <option value="<?php echo $key ; ?>"><?php echo $value ; ?></option>
              <?php }?>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Speaker</span>
            <select name="author">
                <?php while($author_array = mysqli_fetch_assoc($author_result)){?>
                    <option value="<?php echo $author_array['author_name'];?>"><?php echo $author_array['author_name'];?></option>
                <?php }?>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Meeting Id</span>
            <input type="text" name="meetingid" required value="No Value">
          </div>
          <div class="input-box">
            <span class="details">Meeting Password</span>
            <input type="text" name="meetingpassword" required  value="No Value">
          </div>
          <div class="input-box">
            <span class="details">Zoom Meeting Link</span>
            <input type="text" name="zoomlink" required  value="No Value">
          </div>
          <div class="input-box">
            <span class="details">Facebook live</span>
            <input type="text" name="facebooklink" required  value="No Value">
          </div>
          <div class="input-box">
            <span class="details">Youtube Meeting link</span>
            <input type="text" name="youtubelink" required  value="No Value">
          </div>
         <div>
        <div class="input-box" style="margin:15px;">
            <textarea name="description" id="" cols="150" rows="10" style="padding:10px;" required>Write Description of the event</textarea>
        </div>
        <div class="button">
          <input type="submit" value="Submit" name="submit">
        </div>
      </form>
    </div>
  </div>
<style>
</style>
</body>
</html>