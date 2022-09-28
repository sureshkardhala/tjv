<?php
session_start();
include('config.php');
if(isset($_POST['submit'])){
$name="null";
$phone= "null";
$email= mysqli_real_escape_string($dbconn, $_POST['email']);
$message= mysqli_real_escape_string($dbconn, $_POST['message']);
$category="contact";
$query = mysqli_query($dbconn, "INSERT INTO contact (name, phone, email, category, message) VALUES('$name', '$phone', '$email', '$category', '$message')");
if($query){     
       echo "<script>alert('Data Submitted successfully Admin Will contact you soon');
       window.location.href = 'http://localhost/tjv/contact.php';</script>";    
}
else{
    echo  "<script>alert('Data not inserted');</script>";
}
        }else{
            echo "<script>alert('Data not inserted ');</script>";
        }   
?>