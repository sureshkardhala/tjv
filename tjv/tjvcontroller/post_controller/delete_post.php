<?php 
session_start();
include('../config.php');
if (isset($_SESSION['email'])){
     header('location: ../login.php');   
}else{
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $result=mysqli_query($dbconn, "SELECT * FROM posts WHERE id='$id'");
    $row=mysqli_fetch_array($result);
    $image=$row['image'];
    $query =mysqli_query($dbconn, "DELETE  FROM posts WHERE id='$id'");
    if($query){
          unlink('posts/' . $image);
          echo  "<script>alert('Data Deleted Succesfully !.');</script>";
          header("location:../index.php");  
    }else{
         echo  "<script>alert('Data Failed TO Delete !.');</script>";
   }
}
}
?>