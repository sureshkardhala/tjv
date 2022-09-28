<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telangana Jana Vedika - Events</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Playfair+Display+SC&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php include('nav.php');?>
        <div class="events-container">
            <div class="events-list-container">
                <div class="events-list-header">
                    <h2 class="events-list-head-title"><a href="events.php">Events</a></h2>
                </div>
                <div class="events-list-sub-container">
                    <p class="events-shortinfo">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo, ea impedit? Porro quos explicabo fugiat error, repellat totam odio praesentium debitis incidunt quibusdam sequi nobis, aut sapiente ipsa non facere.</p>
                    <div class="events-list-items">
                        <div class="events-list-items">
                        <li><a href="seminars.php">Seminars</a></li>
                        <li><a href="webiinars.php">Webinars</a></li>
                        <li><a href="meetings.php">Meetings</a></li>
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
        .events-container{
            width:100%;
            height:fit-content;
        }
        .footer-items{
            margin:100px 0;
        }
        .events-list-container{
        width:80%;
        height:fit-content;
        display:flex;
        flex-wrap:wrap;
        margin:auto;
        padding:5px;
        font-family: 'Playfair Display SC', serif;
        margin-top:50px;
    }
    .events-list-header{
        width:100%;
        height:fit-content;
        padding:15px;
        display:flex;
        flex-wrap:wrap;
        text-align:center;
    }
    .events-list-header a{
        color:black;
    }
    .events-list-header .events-list-head-title{
        width:100%;
        text-align:center;
    }
    .events-list-sub-container{
        width:100%;
        height:fit-content;
        display:flex;
        flex-wrap:wrap;
        justify-content:space-around;
        margin-top:30px;
    }
    .events-shortinfo{
        width:70%;
        padding:5px;
        margin:auto;
        
    }
    .events-list-items{
        width:50%;
        margin:auto;
        margin-top:30px;

    }
    .events-list-items li{
        margin-top:10px;
    }
    .events-list-items li a{
        color:#183b78;
        margin-top:10px;
    }
    @media screen and (max-width: 992px){
        .events-list-container{
        width:100%;
        padding:15px;
        margin-top:30px;
    }
    .events-list-sub-container{
        padding:0px;
    }
   
    .events-list-items{
        width:100%;
        margin:auto;
        margin-top:0px;
        text-align:left;
        padding:20px;
        padding:5px 20px;
    }
    .events-list-items li{
        margin-top:10px;
        margin:10px auto;
        width:45%;
        text-align:left;
    }
    .events-list-items li a{
        color:#183b78;
        margin-top:10px;
    }
    .events-shortinfo{
        width:95%;
        padding:10px;
        margin:auto;
        margin-top:30px;
    }

    }
    </style>

</body>
</html>