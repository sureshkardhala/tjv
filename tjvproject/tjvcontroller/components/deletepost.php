<?php 
include('../config.php');
$msg='';
if(isset($_GET['src'])){
    $id=base64_decode($_GET['src']);;
    $result=mysqli_query($dbconn, "SELECT * FROM posts WHERE id='$id'");
    $row=mysqli_fetch_array($result);
    $category=$row['category'];
    $image=$row['image'];
    $query =mysqli_query($dbconn, "DELETE  FROM posts WHERE id='$id'");
    if($query){
          unlink('./postthemeimages/' . $image);
    }else{
        $msg="Failed To Update Data";  
   }
   $src=base64_encode($category);
   $link='location:../viewresults.php?src='.$src;
   header($link);  
}
?>