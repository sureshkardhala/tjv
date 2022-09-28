<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Founder Of Telangana Jana Vedika</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Playfair+Display+SC&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php include('nav.php');?>
        <div class="Founder-container">
            <div class="heading-title"><h2>Founder Of Telangana Jana Vedika</h2></div>
            <div class="Founder-img-container"><img src="spimg.jpg" alt=""></div>
            <div class="Founder-text-container"><p class="title">DR Ramu</p><p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel quae reprehenderit enim voluptate repellat, amet itaque molestiae ex alias pariatur dicta, impedit nemo repellendus, eveniet fugiat omnis eligendi quibusdam voluptatum. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus voluptas minima tempore illum consequuntur veniam sunt vitae, assumenda accusantium mollitia non ut, incidunt dolorem sed facere voluptates, odio iste deleniti.</p></div>
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
        .Founder-container{
            width:80%;
            height:fit-content;
            padding:25px;
            margin: auto;
            display: flex;
            flex-wrap:wrap;
            justify-content:space-around;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
            margin-top:70px;
            font-family: Noto Sans,sans-serif;
        }
        .heading-title{
            width:80%;
            margin:auto;
            text-align:center;
            padding:10px;
            font-family: 'Playfair Display SC', serif;
            color:#183b78;
        }
        .heading-title h2{
            font-size:18px;
        }
        .Founder-img-container{
            width:50%;
            height:90%;
            padding:30px;
            justify-content:center;
        }
        .Founder-img-container img{
            max-width:100%;
            max-height:100%;
            margin:auto;
            object-fit:contain;
            justify-self:center;
        }
        .Founder-text-container{
            width:80%;
            margin:20px auto;
            padding:10px;
            height:fit-content;
            
        }
        .Founder-text-container .title{
            font-weight:600;
            font-size:18px;
            margin:10px 0;
            cursor: pointer;
            color:#183b78;
            font-family: 'Playfair Display SC', serif;
        }
        .Founder-text-container .text{
            margin:10px 0;
        }
        .footer-items{
            margin-top:50px;
        }
    @media screen and (max-width: 992px){
        .Founder-container{
            width:100%;
            padding:20px;
            margin-top:30px;
        }
        .heading-title{
            width:80%;
            margin:auto;
            text-align:center;
            padding:10px;
            font-family: 'Playfair Display SC', serif;
            color:#183b78;
        }
        .heading-title h2{
            font-size:18px;
        }
        .Founder-img-container{
            width:100%;
            height:100%;
            padding:20px;
            justify-content:center;
        }
        .Founder-img-container img{
            max-width:100%;
            max-height:100%;
        }
        .Founder-text-container{
            width:100%;
            margin:0;
            padding:10px;
            height:fit-content;
            padding-top:0.;
            
        }
        .Founder-text-container .title{
            font-weight:600;
            font-size:18px;
            margin:0;
            cursor: pointer;
            color:#183b78;
            font-family: 'Playfair Display SC', serif;
        }
        .Founder-text-container .text{
            margin:10px 0;
        }
    }
    </style>

</body>
</html>