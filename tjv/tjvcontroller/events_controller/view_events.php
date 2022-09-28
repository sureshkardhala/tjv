<?php
session_start();
include('config.php');
if (isset($_SESSION['email'])){
     header('location:../login.php');   
}else{
$cat1="meetings";
$cat2="seminars";
$cat3="webinars";
$result=mysqli_query($dbconn, "SELECT * FROM events WHERE category='$cat1' ORDER BY uploaded_on DESC");
$result2=mysqli_query($dbconn, "SELECT * FROM events WHERE category='$cat2' ORDER BY uploaded_on DESC");
$result3=mysqli_query($dbconn, "SELECT * FROM events WHERE category='$cat3' ORDER BY uploaded_on DESC");
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
        <h2 class="webinar-list-head-title"><a>Meetings</a></h2>
    </div>
    <div class="webinar-list-sub-container">
    <?php
                  if(mysqli_num_rows($result)>0){
                      while($row=mysqli_fetch_array($result)){
                        $image="events/". $row['image'];
    ?>
        <div class="webinar-list-items">
            <div class="webinar-list-img-container">
               <img src="<?php echo $image ;?>" alt="">
            </div>
            <div class="webinar-list-text-container">
                <h2 class="webinar-list-title"><a href="#"><?php echo $row['title'];?></a></h2>
                <p class="meeting">  <span>Date & TIMINGS:&nbsp;</span><?php echo $row['event_date'];?> &nbsp;<?php echo $row['event_time'];?></p>
                <div class="button">
                    <a href="update_form.php?id=<?php echo $row['id'];?>" class="btn1">Edit</a>
                    <a href="delete_event.php?id=<?php echo $row['id'];?>" class="btn2">Delete</a>
                </div>
                <p class="updated_on"><?php echo $row['updated_on'];?> </p>
                
            </div>
        </div>
    <?php }
    }else{?><div class="webinar-list-sub-container"><h2 style="text-align:center;">NO Results Found</h2></div>
    </div>
    <?php }?>
</div>
<?php  ?>




<div class="webinar-list-container">
    <div class="webinar-list-header">
        <h2 class="webinar-list-head-title"><a>Seminars</a></h2>
    </div>
    <div class="webinar-list-sub-container">
    <?php
                  if(mysqli_num_rows($result2)>0){
                      while($row2=mysqli_fetch_array($result2)){
                        $image2="events/". $row2['image'];
    ?>
        <div class="webinar-list-items">
            <div class="webinar-list-img-container">
               <img src="<?php echo $image2 ;?>" alt="">
            </div>
            <div class="webinar-list-text-container">
                <h2 class="webinar-list-title"><a href="#"><?php echo $row2['title'];?></a></h2>
                <p class="meeting">  <span>Date & TIMINGS:&nbsp;</span><?php echo $row2['event_date'];?> &nbsp;<?php echo $row2['event_time'];?></p>
                <div class="button">
                    <a href="update_form.php?id=<?php echo $row2['id'];?>" class="btn1">Edit</a>
                    <a href="delete_event.php?id=<?php echo $row2['id'];?>" class="btn2">Delete</a>
                </div>
                <p class="updated_on"><?php echo $row2['updated_on'];?> </p>
                
            </div>
        </div>
    <?php }
    }else{?><div class="webinar-list-sub-container"><h2 style="text-align:center;">NO Results Found</h2></div>
    </div>
    <?php }?>
</div>
<?php  ?>


<div class="webinar-list-container">
    <div class="webinar-list-header">
        <h2 class="webinar-list-head-title"><a>Webinars</a></h2>
    </div>
    <div class="webinar-list-sub-container">
    <?php
                  if(mysqli_num_rows($result3)>0){
                      while($row3=mysqli_fetch_array($result3)){
                        $image3="events/". $row3['image'];
    ?>
        <div class="webinar-list-items">
            <div class="webinar-list-img-container">
               <img src="<?php echo $image3 ;?>" alt="">
            </div>
            <div class="webinar-list-text-container">
                <h2 class="webinar-list-title"><a href="#"><?php echo $row3['title'];?></a></h2>
                <p class="meeting">  <span>Date & TIMINGS:&nbsp;</span><?php echo $row3['event_date'];?> &nbsp;<?php echo $row3['event_time'];?></p>
                <div class="button">
                    <a href="update_form.php?id=<?php echo $row3['id'];?>" class="btn1">Edit</a>
                    <a href="delete_event.php?id=<?php echo $row3['id'];?>" class="btn2">Delete</a>
                </div>
                <p class="updated_on"><?php echo $row3['updated_on'];?> </p>
                
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