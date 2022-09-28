<?php 
session_start();
include('../config.php');
if (isset($_SESSION['email'])){
     header('location: ../login.php');   
}else{
if(isset($_POST['submit'])){
$id= mysqli_real_escape_string($dbconn, $_POST['id']);    
$title= mysqli_real_escape_string($dbconn, $_POST['title']);
$description= mysqli_real_escape_string($dbconn, $_POST['description']);
$slug_url= strtolower(str_replace(" ", "-", $title));
$category= mysqli_real_escape_string($dbconn, $_POST['category']);
$topic= mysqli_real_escape_string($dbconn, $_POST['topic']);
$seo_description= mysqli_real_escape_string($dbconn, $_POST['seo_description']);
$seo_keywords= mysqli_real_escape_string($dbconn, $_POST['seo_keywords']);
$query = mysqli_query($dbconn, "UPDATE posts SET title='$title', description='$description', slug_url='$slug_url', category='$category', topic='$topic',seo_keywords='$seo_keywords', seo_description='$seo_description' WHERE id='$id'");
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