<?php 
include('../config.php');
$msg='';
if(isset($_POST['submit'])){
    $title= mysqli_real_escape_string($dbconn, $_POST['title']);
    $description= mysqli_real_escape_string($dbconn, $_POST['description']);
    $slug_url=strtolower(str_replace(" ", "-", $title));
    $category= mysqli_real_escape_string($dbconn, $_POST['category']);
    $topic= mysqli_real_escape_string($dbconn, $_POST['topic']);
    $author= mysqli_real_escape_string($dbconn, $_POST['author']);
    $id= mysqli_real_escape_string($dbconn, $_POST['id']);
    $query = mysqli_query($dbconn, "UPDATE posts SET title='$title', description='$description', slug_url='$slug_url', topic='$topic', author='$author', category='$category' WHERE id='$id'");
    if($query){     
        $msg='<p style="color:#00D583; witdh:100%;">Data Updated Successfully! <i class="fa-solid fa-circle-check"></i></p>';
    }else{
        $msg='<p style="color:red; witdh:100%;">Failed To Update Data &nbsp;<i class="fa-solid fa-circle-exclamation"></i></p>';
    }
    $src=base64_encode($id);
    $msgtype="&msg=".base64_encode($msg);
    $location="../updatepost.php?src=".$src.$msgtype;
    header("location:".$location); 
}