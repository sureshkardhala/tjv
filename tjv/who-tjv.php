<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Telangana Jana Vedika</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Playfair+Display+SC&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php include('nav.php');?>
        <div class="join-container">
            <div class="join-list-container">
                <div class="join-list-header">
                    <h2 class="join-list-head-title"><a href="join.php">Who We Are</a></h2>
                </div>
                <div class="join-list-sub-container">
                    <p class="join-shortinfo">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo, ea impedit? Porro quos explicabo fugiat error, repellat totam odio praesentium debitis incidunt quibusdam sequi nobis, aut sapiente ipsa non facere.</p>
                    <div class="join-list-items">
                        <div class="join-list-items">
                        <li><a href="about-us.php">ABOUT</a></li>
                        <li><a href="founder.php">FOUNDER</a></li>
                        <li><a href="governance.php">GOVERNANCE</a></li>
                        <li><a href="find-us.php">FIND US</a></li>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-items">
            <?php include('footer.php');?>
        </div>
    </div>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        
        .container{
            width:100%;
            height:fit-content;
        }
        .join-container{
            width:100%;
            height:fit-content;
        }
        .footer-items{
            margin:100px 0;
        }
        .join-list-container{
        width:80%;
        height:fit-content;
        display:flex;
        flex-wrap:wrap;
        margin:auto;
        padding:5px;
        font-family: 'Playfair Display SC', serif;
        margin-top:50px;
    }
    .join-list-header{
        width:100%;
        height:fit-content;
        padding:15px;
        display:flex;
        flex-wrap:wrap;
        text-align:center;
    }
    .join-list-header a{
        color:black;
    }
    .join-list-header .join-list-head-title{
        width:100%;
        text-align:center;
    }
    .join-list-sub-container{
        width:100%;
        height:fit-content;
        display:flex;
        flex-wrap:wrap;
        justify-content:space-around;
        margin-top:30px;
    }
    .join-shortinfo{
        width:70%;
        padding:5px;
        margin:auto;
        
    }
    .join-list-items{
        width:50%;
        margin:auto;
        margin-top:30px;

    }
    .join-list-items li{
        margin-top:10px;
    }
    .join-list-items li a{
        color:#183b78;
        margin-top:10px;
    }
    @media screen and (max-width: 992px){
        .join-list-container{
        width:100%;
        padding:15px;
        margin-top:30px;
    }
    .join-list-sub-container{
        padding:0px;
    }
   
    .join-list-items{
        width:100%;
        margin:auto;
        margin-top:0px;
        text-align:left;
        padding:20px;
        padding:5px 20px;
    }
    .join-list-items li{
        margin-top:10px;
        margin:10px auto;
        width:100%;
        text-align:left;
    }
    .join-list-items li a{
        color:#183b78;
        margin-top:10px;
    }
    .join-shortinfo{
        width:95%;
        padding:10px;
        margin:auto;
        margin-top:30px;
    }

    }
    </style>

</body>
</html>