<?php
session_start();
include('config.php');
if (isset($_SESSION['email'])){
     header('location: ../login.php');   
}else{
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $result=mysqli_query($dbconn, "SELECT * FROM events WHERE id='$id'");
    $row=mysqli_fetch_array($result);
    $image=$row['image'];
    $image1=$row['speakerimage'];
    $query =mysqli_query($dbconn, "DELETE  FROM events WHERE id='$id'");
   
    if($query){
          unlink('events/' . $image);
          unlink('events/' . $image1);
          echo  "<script>alert('Data Deleted Succesfully !.');</script>";
          header("location:i../index.php");  

    }else{

         echo  "<script>alert('Data Failed TO Delete !.');</script>";
    
   }

}
}
?>