<?php 
include('./config.php');
$msg='';
if(isset($_POST['submit'])){
  $username= mysqli_real_escape_string($dbconn, $_POST['username']);
  $email= mysqli_real_escape_string($dbconn, $_POST['email']);
  $role= mysqli_real_escape_string($dbconn, $_POST['role']);
  $status='False';
  if($role=="superadmin"){
    $status='True';
  }
  $password=base64_encode(base64_encode(base64_encode(base64_encode('TJV@2022'))));
  $otp=12345;
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'LIMIT 1";
  $result = mysqli_query($dbconn, $user_check_query);
  $check = mysqli_fetch_assoc($result);
  if ($check ) {
    if( ($check['username'] === $username)) {
              $msg = '<p style="color:red;font-family: Noto Sans,sans-serif">User Already Exists &nbsp;<i class="fa-solid fa-circle-exclamation"></i></p>';
    } else if( ($check['email'] === $email)) {
              $msg = '<p style="color:red;font-family: Noto Sans,sans-serif">Email Already Exists &nbsp;<i class="fa-solid fa-circle-exclamation"></i></p>';
    }
} else{ 
      $query = mysqli_query($dbconn, "INSERT INTO users (username, email, password, role, status, otp) VALUES ('$username', '$email', '$password','$role', '$status', '$otp')");
      if($query){     
        $msg = '<p style="color:#00D583;font-family: Noto Sans,sans-serif">User Details Uploaded Successfully! <i class="fa-solid fa-circle-check"></i></p>';
      }else{
        $msg = '<p style="color:red;font-family: Noto Sans,sans-serif">Failed To Upload User Details &nbsp;<i class="fa-solid fa-circle-exclamation"></i></p>';
      }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register New User</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Playfair+Display+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../static/js/jquery.min.js"></script>
    <link rel="stylesheet" href="./static/css/rnu.css">
</head>
<body>
    <div class="container">
        <div class="nav">
            <h2 class="title">Telangana Jana Vedika</h2>
            <a href="#" class="logoutBtn">Logout&nbsp;&nbsp;<i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
        <div class="item-container">
            <?php echo $msg; ?>
            <div class="text">Register New User</div>
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post"  enctype="multipart/form-data">
               <div class="data">
                  <label>User Name</label>
                  <input type="text" name="username" required>
               </div>
               <div class="data">
                  <label>Email</label>
                  <input type="email" name="email" required>
               </div>
               <div class="data">
                  <label>Role<label>
                  <select name="role">
                    <option value="superadmin">Super Admin</option>
                    <option value="basicadmin">Basic Admin</option>
                    <option value="member">Memeber</option>
                  </select>
               </div>
               <div class="btn">
                  <div class="inner"></div>
                  <input type="submit" value="Submit" name="submit">
               </div>
            </form>
         </div>
    </div>
</body>
</html>