<?php include('config.php'); ?>

<?php
if(session_id() == ''){
  session_start();
}

$query = "SELECT * FROM users";
$result = mysqli_query($dbconn, $query);

while($res = mysqli_fetch_assoc($result)){
  $username= $res['username'];
  $email = $res['email'];
  $password = $res['password'];
  $otp = $res['otp'];
}

if(isset($_POST['login'])){


  
  $username1 = $_POST['username'];
  $email1 = $_POST['email'];
  $password1 = $_POST['password'];

  $username1 = stripcslashes($username1);
  $password1 = stripcslashes($password1);
  $username1 = mysqli_real_escape_string($dbconn, $username1);
  $password1 = mysqli_real_escape_string($dbconn, $password1);

  // $password1 = base64_encode(base64_encode($password1));


  if($username1 == $username && $email1 == $email && $password1 == $password){
    echo "<p class='success-login'>successfully logged in</p>";

    $code = rand(999999, 111111);
    $insert_otp = "UPDATE users SET otp=$code";
    $updated_otp = mysqli_query($dbconn, $insert_otp);

    if($updated_otp){
      $subject = "Email Verification Code";
      $message = "Your verification code is $code";
      $sender = "From: abrar.test1web@gmail.com";
      if(mail($email, $subject, $message, $sender)){
          echo "We've sent a verification code to your email - $email";
          $_SESSION['email'] = $email;
          header('location: index.php');
          exit();
      }else{
          echo "OTP Process Failed";
      }
  }

  }else{
    echo "<p class='failed-login'>failed logged in</p>";
  }

}


if(isset($_POST['opt-submit'])){
  $otp_entered = $_POST['otp_entered'];

  if($otp == $otp_entered){
    echo "true";
    $_SESSION['status'] = "true";
    header("Location: index.php");
  }else{
    echo "false";
  }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJV - Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="wrapper">
        <form action="login.php" method="POST">
          <div class="field email">
            <div class="input-area">
              <input class="input-box" type="text" placeholder="Username" name="username">
            </div>
            <div class="error error-txt">Email can't be blank</div>
          </div>

          <div class="field email">
            <div class="input-area">
              <input class="input-box" type="text" placeholder="Email" id="email" name="email">
            </div>
            <div class="error error-txt">Email can't be blank</div>
          </div>

          <div class="field password">
            <div class="input-area">
              <input  class="input-box" type="password" placeholder="Password" id="password" name="password">
            </div>
            <div class="error error-txt">Password can't be blank</div>
          </div>


          <input type="checkbox" value="lsRememberMe" id="rememberMe"> <label for="rememberMe">Remember me</label>

          <input class="input-box" type="submit" onclick="return lsRememberMe()" value="Login" name="login">
        </form>
      </div>



      <div class="otp-container">
          <form action="" method="post">
            <div class="field email">
                <div class="input-area">
                    <input class="input-box" type="text" name="otp_entered" id="" placeholder="Enter OTP">
                </div>
            </div>
                <input class="input-box" type="submit" value="Submit" name="opt-submit">
          </form>
      </div>

    
</body>
</html>
<script>
  const rmCheck = document.getElementById("rememberMe"),
    emailInput = document.getElementById("email");

if (localStorage.checkbox && localStorage.checkbox !== "") {
  rmCheck.setAttribute("checked", "checked");
  emailInput.value = localStorage.username;
} else {
  rmCheck.removeAttribute("checked");
  emailInput.value = "";
}

function lsRememberMe() {
  if (rmCheck.checked && emailInput.value !== "") {
    localStorage.username = emailInput.value;
    localStorage.checkbox = rmCheck.value;
  } else {
    localStorage.username = "";
    localStorage.checkbox = "";
  }
}
</script>