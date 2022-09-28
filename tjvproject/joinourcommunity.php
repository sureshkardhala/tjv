<?php 
include('./tjvcontroller/config.php');
$msg='';
if(isset($_POST['submit'])){
  $email= mysqli_real_escape_string($dbconn, $_POST['email']);
  $profession= mysqli_real_escape_string($dbconn, $_POST['profession']);
  $name= mysqli_real_escape_string($dbconn, $_POST['name']);
  $phone= mysqli_real_escape_string($dbconn, $_POST['phone']);
  $user_check_query = "SELECT * FROM joinwithus WHERE name='$name' OR email='$email' OR phone='$phone' LIMIT 1";
  $result = mysqli_query($dbconn, $user_check_query);
  $check = mysqli_fetch_assoc($result);
  if ($check ) {
    if( ($check['name'] === $name)) {
              $msg = '<p style="color:red;font-family: Noto Sans,sans-serif"><i class="fa-solid fa-circle-exclamation"></i> &nbsp;Username Already Exists.</p>';
    } else if( ($check['email'] === $email)) {
              $msg = '<p style="color:red;font-family: Noto Sans,sans-serif"><i class="fa-solid fa-circle-exclamation"></i> &nbspEmail Already Exists.</p>';
    } else if( ($check['phone'] === $phone)) {
        $msg = '<p style="color:red;font-family: Noto Sans,sans-serif"><i class="fa-solid fa-circle-exclamation"></i> &nbspMobile Number Already Exists.</p>';
    }
} else{
  $query = mysqli_query($dbconn, "INSERT INTO joinwithus (email, name, profession, phone) VALUES ('$email', '$name', '$profession', '$phone')");
  if($query){     
    $msg = '<p style="color:#00D583;font-family: Noto Sans,sans-serif"><i class="fa-solid fa-circle-check"></i>&nbsp;Registration succesfully completed.</p>';
}else{
        $msg = '<p style="color:red;font-family: Noto Sans,sans-serif"><i class="fa-solid fa-circle-exclamation"></i>&nbsp;Registration failed. Please Contact us</p>';
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
    <title>Join Our Community</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Playfair+Display+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./static/css/joinus.css">
    <link rel="stylesheet" href="./static/css/nav.css">
    <script src="./static/js/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <?php include('./components/nav.php') ; ?>
        <div class="joinus-container">
            <h4 class="joinus-title">Join Our Community</h4>
            <div class="joinus-item">
                <?php echo $msg; ?>
                <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" class="top">
                    <div class="joinus-text">
                        <label for="message">Full Name</label>
                        <input  type="text" name="name" required id="input">
                    </div>
                    <div class="joinus-text">
                        <label for="message">Profession</label>
                        <input  type="text" name="profession"  id="input1">
                    </div>
                    <div class="joinus-text">
                        <label for="message">Email</label>
                        <input  type="email" name="email" required  id="input2">
                    </div>
                    <div class="joinus-text">
                        <label for="message">Mobile</label>
                        <input  type="text" name="phone" required id="input3">
                    </div>
                    <input type="submit" name="submit" value="Submit" class="btn-submit">
                </form>
            </div>
         </div>
    </div>
    <script>
        $("#input").on('click', function(){
            $("#input").css("border", "1px solid white");
            $("#input").css("outline", "2px solid #97A4A7");
        });
        $("#input1").on('click', function(){
            $("#input1").css("border", "1px solid white");
            $("#input1").css("outline", "2px solid #97A4A7");
        });
        $("#input2").on('click', function(){
            $("#input2").css("border", "1px solid white");
            $("#input2").css("outline", "2px solid #97A4A7");
        });
        $("#input3").on('click', function(){
            $("#input3").css("border", "1px solid white");
            $("#input3").css("outline", "2px solid #97A4A7");
        });
    </script>
   <script src="./static/js/nav.js"></script>
</body>
</html>