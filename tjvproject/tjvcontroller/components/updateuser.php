<?php 
include('../config.php');
$msg='';
if(isset($_POST['submit'])){
    $email= mysqli_real_escape_string($dbconn, $_POST['email']);
    $password= mysqli_real_escape_string($dbconn, $_POST['password']);
    $role= mysqli_real_escape_string($dbconn, $_POST['role']);
    $id= mysqli_real_escape_string($dbconn, $_POST['id']);
    $password=base64_encode(base64_encode(base64_encode(base64_encode($password))));
    $status='False';
    if($role=="superadmin"){
      $status='True';
    }
    echo($email.$password.$role.$id.$status);
    $query = mysqli_query($dbconn, "UPDATE users SET email='$email', password='$password', role='$role', status ='$status' WHERE id='$id'");
    if($query){     
        $msg='<p style="color:#00D583;font-family: Noto Sans,sans-serif; text-align:center;">Data Updated Successfully! <i class="fa-solid fa-circle-check"></i></p>';
    }else{
        $msg='<p style="color:red; font-family: Noto Sans,sans-serif; text-align:center;">Failed To Update Data &nbsp;<i class="fa-solid fa-circle-exclamation"></i></p>';
    }
    $src=base64_encode($id);
    $msgtype="&msg=".base64_encode($msg);
    $location="../updateuser.php?src=".$src.$msgtype;
    header("location:".$location); 
}