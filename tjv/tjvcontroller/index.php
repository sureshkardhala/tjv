<?php 
session_start();
include('config.php');

if(!($_SESSION['status'])){
    header("Location: login.php");
    exit();
}


// if (isset($_SESSION['email'])){
//      header('location: login.php');   
// }else{
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
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php include('nav.php');?>
    <div class="container">
        <div class="sub-titles t1"><h2>Events</h2></div>
        <div class="sub-container">
            <div class="box-list-items c1">
                <a href="events_controller/upload_event.php"><h3>Upload Events</h3></a>
            </div>
            <div class="box-list-items c2">
                <a href="events_controller/view_events.php" ><h3>View Events</h3></a>
            </div>
        </div>
        <div class="sub-titles"><h2>Publications</h2></div>
        <div class="sub-container">
            <div class="box-list-items c3">
                <a href="post_controller/upload_post.php" ><h3>Upload Publications</h3></a>
            </div>
            <div class="box-list-items c4">
                <a href="post_controller/view_publications.php" ><h3>View Publications</h3></a>
            </div>
        </div>
        <div class="sub-titles"><h2>Blogs & Posts</h2></div>
        <div class="sub-container">
            <div class="box-list-items c5">
                <a href="post_controller/upload_post.php" ><h3>Upload Blogs & Posts</h3></a>
            </div>
            <div class="box-list-items c6">
                <a href="post_controller/view_blogs.php" ><h3>View Blogs & Posts</h3></a>
            </div>
        </div>
        <div class="sub-titles"><h2>Registeration & Contact Form Details</h2></div>
        <div class="sub-container">
            <div class="box-list-items c7">
                <a href="contact_controller/view_register.php"  ><h3>Registeration Details</h3></a>
            </div>
            <div class="box-list-items c8">
                <a href="contact_controller/view_contact.php" ><h3>Contact From Details</h3></a>
            </div>
        </div>
        <div class="sub-titles"><h2>User Details</h2></div>
        <div class="sub-container">
            <div class="box-list-items c9">
                <a href="user_controller/register.php" ><h3>Upload New User</h3></a>
            </div>
            <div class="box-list-items c10">
                <a href="user_controller/view_users.php"><h3>View Users</h3></a>
            </div>
        </div>
        
    </div>
</body>
</html>
