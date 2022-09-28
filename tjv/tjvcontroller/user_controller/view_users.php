<?php
session_start();
include('config.php');
$result=mysqli_query($dbconn, "SELECT * FROM users");
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
                <p class="meeting">UserName: &nbsp; &nbsp;<?php echo $row['username'];?></p>
                <div class="button">
                            <a href="edit_user.php?id=<?php echo $row['id'];?>" class="btn1">Edit</a>
                            <a href="delete_user.php?id=<?php echo $row['id'];?>" class="btn2">Delete</a>
                </div>
            </div>
        </div>
    <?php }
    }else{?><div class="webinar-list-sub-container"><h2 style="text-align:center;">NO Results Found</h2></div>
    </div>
    <?php }?>
</div>
<?php  ?>
</body>
</html>
<style>
    .webinar-list-container{
        width:80%;
        height:fit-content;
        display:flex;
        flex-wrap:wrap;
        margin:auto;
        padding:5px;
        font-family: 'Playfair Display SC', serif;
        margin-top:50px;
    }
    .webinar-list-header{
        width:100%;
        height:fit-content;
        padding:15px;
        display:flex;
        flex-wrap:wrap;
        text-align:center;
    }
    .webinar-list-header a{
        color:black;
    }
    .webinar-list-header .webinar-list-head-title{
        width:100%;
        text-align:center;
    }
    .webinar-list-header .viewall{
        text-align:right;
        width:100%;
        font-size:14px;
    }
    .webinar-shortinfo{
        width:100%;
        margin:10px 0;
        padding:5px;
        font-family: Noto Sans,sans-serif;
    }
    .webinar-list-sub-container{
        width:100%;
        height:fit-content;
        margin:40px 0;
        display:flex;
        flex-wrap:wrap;
        justify-content:space-around;
    }
    .webinar-list-items{
        width:30%;
        height:fit-content;
        display:flex;
        flex-wrap:wrap;
        justify-content:space-around;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        margin-top:20px;
    }
    .webinar-list-img-container{
        width:100%;
        height:200px;
        overflow:hidden;
        justify-content:center;
        padding:5px;
        padding-bottom:0px;
    }
    .webinar-list-img-container img{
        max-width:100%;
        max-height:100%;
        object-fit:contain;
        justify-content:center;
    }
    .webinar-list-text-container{
        padding:10px;
        width:100%;
        height:fit-content;
    }
    .webinar-list-text-container .webinar-list-title{
        font-size:17px;
    }
    .webinar-list-text-container .webinar-list-title a{
        color:black;
    }
    .webinar-list-text-container a{
        color:black;
    }
    .webinar-list-text-container p{
        margin:10px 0 5px 0;
        font-size:14px;
        font-family: Noto Sans,sans-serif;
        font-weight:600;
    }
    .webinar-list-text-container .meeting{
        font-weight:400;
        font-size:14px;
    }
    .webinar-list-text-container .updated_on{
        font-size:10px;
        font-weight:400;
        margin-top:15px;
    }
    a{
        text-decoration:none;
    }
    .button{
        width:100%;
        display:flex;
        flex-direction:row;
        justify-content:space-between;
        padding:5px;
    }
    .button .btn1{
        width:80px;
        height:25px;
        border:1px solid red;
        margin:10px 10px 0 0;
        text-align:center;
        padding-top:10px;
        border-radius:17px;
    }
    .button .btn2{
        width:80px;
        height:25px;
        border:1px solid red;
        margin:10px 10px 0 0;
        text-align:center;
        padding-top:10px;
        border-radius:17px;
    }
    @media screen and (max-width: 992px){
        .webinar-list-container{
        width:100%;
        margin:0;
    }
    .webinar-list-header .viewall{
       margin-top:10px;
    }
    .webinar-list-sub-container{
        padding:15px;
        justify-content:space-around;
        margin:0;
    }
    .webinar-list-items{
        width:100%;
        margin-top:35px;
    }
    .webinar-list-img-container{
        width:100%;
        height:210px;
        overflow:hidden;
        justify-content:space-around;
        padding:10px;
    }
    .webinar-list-img-container img{
        max-width:100%;
        max-height:100%;
        object-fit:contain;
        justify-content:center;
        margin:auto;
    }
    .webinar-list-text-container{
        padding:10px;
        width:100%;
        height:fit-content;
        margin:0;
    }
    .webinar-list-text-container .webinar-list-title{
        font-size:17px;
    }
    .webinar-list-text-container .webinar-list-title a{
        color:black;
    }
    .webinar-list-text-container a{
        color:black;
    }
    .webinar-list-text-container p{
        margin:10px 0 5px 0;
        font-size:14px;
        font-family: Noto Sans,sans-serif;
        font-weight:600;
    }
    .webinar-list-text-container .meeting{
        font-weight:400;
        font-size:15px;
    }
    .webinar-list-text-container .updated_on{
        font-size:10px;
        font-weight:400;
        margin-top:15px;
    }
    }
</style>