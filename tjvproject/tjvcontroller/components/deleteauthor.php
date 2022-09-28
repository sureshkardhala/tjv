<?php 
include('../config.php');
$msg='';
if(isset($_GET['src'])){
    $id=base64_decode($_GET['src']);
    $result=mysqli_query($dbconn, "SELECT * FROM authors WHERE id='$id'");
    $row=mysqli_fetch_array($result);
    $image=$row['author_image'];
    $query =mysqli_query($dbconn, "DELETE  FROM authors WHERE id='$id'");
    if($query){
          unlink('./authorimages/' . $image);
    }else{
        $msg="Failed To Update Data";  
   }
   $src=base64_encode('authors');
   $link='location:../viewresults.php?src='.$src;
   header($link);  
}
?>