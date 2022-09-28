<?php 
include('./tjvcontroller/config.php');
$msg='';
if(isset($_POST['submit'])){
  $email= mysqli_real_escape_string($dbconn, $_POST['email']);
  $message= mysqli_real_escape_string($dbconn, $_POST['message']);
  $query = mysqli_query($dbconn, "INSERT INTO contact (email, message) VALUES ('$email', '$message')");
  if($query){     
    $msg = '<p style="color:#00D583;font-family: Noto Sans,sans-serif"><i class="fa-solid fa-circle-check"></i>Message sent successfully & Our team will contact you soon.</p>';
}else{
        $msg = '<p style="color:red;font-family: Noto Sans,sans-serif"><i class="fa-solid fa-circle-exclamation"></i>&nbsp;Failed to sent message.</p>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Playfair+Display+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./static/css/contact.css">
    <link rel="stylesheet" href="./static/css/nav.css">
    <script src="./static/js/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <?php include('./components/nav.php') ; ?>
        <div class="contact-container">
            <h4 class="contact-title">Contact Us</h4>
            <div class="contact-item">
                <div class="item top">
                    <h4 class="item-title"><i class="fa-solid fa-envelope"></i>&nbsp;Email</h4>
                    <p class="item-text">sureshkardhala2k22@gmail.com</p>
                    <p class="item-text">sureshkardhala2k22@gmail.com</p>
                </div>
                <div class="item">
                    <h4 class="item-title"><i class="fa-solid fa-mobile"></i>&nbsp;Phone</h4>
                    <p class="item-text">+91 9948227622</p>
                    <p class="item-text">+91 9948227622</p>
                </div>
                <div class="item">
                    <h4 class="item-title"><i class="fa-solid fa-location-dot"></i>&nbsp;Address</h4>
                    <p class="item-text">sureshkardhala2k22@gmail.com Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam magnam laboriosam laborum natus hic atque illo placeat ex, distinctio accusantium, dolores autem quisquam repellendus dolorem iusto veniam cumque aliquid eaque!</p>
                </div>
            </div>
            <div class="contact-item-line">
                <p class="line"></p>
            </div>
            <div class="contact-item">
                <?php echo $msg; ?>
                <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" class="top">
                    <div class="contact-text">
                        <label for="message">Email</label>
                        <input  type="email" name="email" required placeholder="Enter Email" id="input">
                    </div>
                    <div class="contact-text">
                        <label for="message">Message Us</label>
                        <br>
                        <textarea name="message" cols="30" rows="10" required id="input1"></textarea>
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
            $("textarea").css("border", "1px solid white");
            $("textarea").css("outline", "2px solid #97A4A7");
        });
    </script>
   <script src="./static/js/nav.js"></script>
</body>
</html>