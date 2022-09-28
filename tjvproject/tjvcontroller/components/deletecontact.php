<?php 
include('../config.php');
$msg='';
if(isset($_GET['src'])){
    $id=base64_decode($_GET['src']);
    $result=mysqli_query($dbconn, "SELECT * FROM contact WHERE id='$id'");
    $row=mysqli_fetch_array($result);
    $query =mysqli_query($dbconn, "DELETE  FROM contact WHERE id='$id'");
    if($query){
        $src=base64_encode('contact');
        $link='location:../viewresults.php?src='.$src;
        header($link); 
    }else{
        $msg="Failed To Update Data";  
   } 
}
?>