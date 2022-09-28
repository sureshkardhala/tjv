<?php
session_start();
include('config.php');
if (isset($_SESSION['email'])){
     header('location:../login.php');   
}else{
$cat1="contact";
$result=mysqli_query($dbconn, "SELECT * FROM contact WHERE category='$cat1' ORDER BY uploaded_on DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telangana Jana Vedika Admin Portal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Playfair+Display+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/event.css">
</head>
<body>
<div class="webinar-list-container">
    <div class="webinar-list-header">
        <h2 class="webinar-list-head-title"><a>Contact Details</a></h2>
    </div>
    <div class="webinar-list-sub-container">
    <?php
                  if(mysqli_num_rows($result)>0){
                      while($row=mysqli_fetch_array($result)){
    ?>
        <div class="webinar-list-items">
            <div class="webinar-list-text-container">
                <h2 class="webinar-list-title"><a href="#">&nbsp;&nbsp;<?php echo $row['email'];?></a></h2>
                <p class="meeting">Message: &nbsp; &nbsp;<?php echo $row['message'];?></p>
                <div class="button">
                   
                    <a href="delete_contact.php?id=<?php echo $row['id'];?>" class="btn2">Delete</a>
                </div>
                <p class="updated_on"><?php echo $row['uploaded_on'];?> </p>
                
            </div>
        </div>
    <?php }
    }else{?><div class="webinar-list-sub-container"><h2 style="text-align:center;">NO Results Found</h2></div>
    </div>
    <?php }?>
</div>

</body>
</html>
<?php } ?>