<?php
session_start();
include('config.php');
if (isset($_SESSION['email'])){
     header('location: ../login.php');   
}else{
if(isset($_POST['submit'])){
$id= mysqli_real_escape_string($dbconn, $_POST['id']);    
$title= mysqli_real_escape_string($dbconn, $_POST['title']);
$description= mysqli_real_escape_string($dbconn, $_POST['description']);
$speaker= mysqli_real_escape_string($dbconn, $_POST['speaker']);
$speakerabout= mysqli_real_escape_string($dbconn, $_POST['speakerabout']);
$slug_url= strtolower(str_replace(" ", "-", $title));
$category= mysqli_real_escape_string($dbconn, $_POST['category']);
$topic= mysqli_real_escape_string($dbconn, $_POST['topic']);
$seo_description= mysqli_real_escape_string($dbconn, $_POST['seo_description']);
$seo_keywords= mysqli_real_escape_string($dbconn, $_POST['seo_keywords']);
$event_date= mysqli_real_escape_string($dbconn, $_POST['event_date']);
$event_time= mysqli_real_escape_string($dbconn, $_POST['event_time']);
$facebook= mysqli_real_escape_string($dbconn, $_POST['facebook']);
$youtube= mysqli_real_escape_string($dbconn, $_POST['youtube']);
$zoom= mysqli_real_escape_string($dbconn, $_POST['zoom']);
$query = mysqli_query($dbconn, "UPDATE events SET title='$title', description='$description', speaker='$speaker', speakerabout='$speakerabout', slug_url='$slug_url', category='$category', topic='$topic',seo_keywords='$seo_keywords', seo_description='$seo_description', event_date='$event_date', event_time='$event_time', youtube='$youtube', facebook='$facebook', zoom='$zoom' WHERE id='$id'");
   if($query){     
    echo "<script>alert('Data updated successfully'); </script>";
    }
  else{
   echo  "<script>alert('Data not inserted');</script>";
   echo $db->error;
   }
}
}
?>