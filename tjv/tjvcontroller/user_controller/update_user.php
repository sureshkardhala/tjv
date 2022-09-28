<?php
session_start();
include('config.php');
if(isset($_POST['submit'])){
$id= mysqli_real_escape_string($dbconn, $_POST['id']);    
$email= mysqli_real_escape_string($dbconn, $_POST['email']);
$username= mysqli_real_escape_string($dbconn, $_POST['username']);
$password= mysqli_real_escape_string($dbconn, $_POST['password']);
$password1=base64_encode(base64_encode($password))
$query = mysqli_query($dbconn, "UPDATE users SET username='$username', email='$email', password='$password1' WHERE id='$id'");
   if($query){     
    echo "<script>alert('Data updated successfully'); </script>";
    }
  else{
   echo  "<script>alert('Data not inserted');</script>";
   echo $db->error;
   }
}
?>