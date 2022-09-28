<?php 
session_start();
include('config.php');
if (isset($_SESSION['email'])){
     header('location: ../login.php');   
}else{
if(isset($_POST['submit'])){
    $username=mysqli_real_escape_string($dbconn, $_POST['username']);
    $email=mysqli_real_escape_string($dbconn, $_POST['email']);
    $password=mysqli_real_escape_string($dbconn, $_POST['password']);
    $password1=base64_encode(base64_encode($password));
    $status="user";
    $otp="12345";
    $user_check_query = "SELECT * FROM users WHERE username='$username' or email='$email' LIMIT 1";
    $result = mysqli_query($dbconn, $user_check_query);
    $check = mysqli_fetch_assoc($result);
		if ($check) {
                echo "<script>alert('Username or Email Already Exists');</script>";
        }
        else{
            $query = mysqli_query($dbconn, "INSERT INTO users (username, email, password, status, otp) VALUES ('$username', '$email', '$password1', '$status', '$otp')");
if($query){     
       echo "<script>alert('User Registered successfully');</script>";     
}
else{
    echo  "<script>alert('Data not Registered');</script>";
}
}}
    
?>
<html>
<head>
  <meta charset="utf-8">
  <title>TJV Register New User</title>
  <link rel="stylesheet" type="text/css" href="../css/register.css">
</head>

<body>
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1>Register New User</h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <form id="stripe-login" action="register.php" method="POST">
                <div class="field padding-bottom--24">
                  <label for="email">Username</label>
                  <input type="text" name="username">
                </div>
                <div class="field padding-bottom--24">
                  <label for="email">Email</label>
                  <input type="email" name="email">
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="password">Password</label>
                  </div>
                  <input type="password" name="password">
                </div>
                <div class="field padding-bottom--24">
                  <input type="submit" name="submit" value="Register">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<?php }?>