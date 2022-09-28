<?php 
session_start();
include('config.php');
if (isset($_SESSION['email'])){
     header('location: ../login.php');   
}else{
if($_GET['id']){
   $id=$_GET['id'];
   $result=mysqli_query($dbconn, "SELECT * FROM users WHERE id='$id' ");
   $row=mysqli_fetch_array($result);
?>
<html>
<head>
  <meta charset="utf-8">
  <title>TJV Register New User</title>
  <link rel="stylesheet" type="text/css" href="..css/regsiter.css">
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
                  <input type="text" name="username" value="<?php echo $row['username'];?>">
                </div>
                <div class="field padding-bottom--24">
                  <label for="email">Email</label>
                  <input type="email" name="email" value="<?php echo $row['email'];?>">
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="password">Password</label>
                  </div>
                  <input type="password" name="password" value="<?php echo base64_decode(base64_decode($row['password']));?>">
                </div>
                <div class="field padding-bottom--24">
                  <input type="submit" name="submit" value="Submit">
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
<?php }}?>
