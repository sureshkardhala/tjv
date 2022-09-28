<?php 
include('../config.php');
$msg='';
if(isset($_POST['submit'])){
    $author_name= mysqli_real_escape_string($dbconn, $_POST['author_name']);
    $author_description= mysqli_real_escape_string($dbconn, $_POST['author_description']);
    $author_designation= mysqli_real_escape_string($dbconn, $_POST['author_designation']);
    $id= mysqli_real_escape_string($dbconn, $_POST['id']);
    $query = mysqli_query($dbconn, "UPDATE authors SET author_name='$author_name', author_description='$author_description', author_designation='$author_designation' WHERE id='$id'");
    if($query){     
        $msg='<p style="color:#00D583;">Data Updated Successfully! <i class="fa-solid fa-circle-check"></i></p>';
    }else{
        $msg='<p style="color:red;">Failed To Update Data &nbsp;<i class="fa-solid fa-circle-exclamation"></i></p>';
    }
    $src=base64_encode($id);
    $msgtype="&msg=".base64_encode($msg);
    $location="../updateauthor.php?src=".$src.$msgtype;
    header("location:".$location); 
}