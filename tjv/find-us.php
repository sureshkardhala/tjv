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
        <div class="location-container">
            <div class="heading-title">
                <h2 class="location-title">Contact Us</h2>
                <p class="location-address">IISS Europe, Pariser Platz 6A, 10117 Berlin, Germany</p>
                <p class="phone">TelePhone: +91 9948227622 | Email: iiss-europe@iiss.org</p>
            </div>
            <div class="location">
                <h2 class="location-title">Our Location</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3794.8326560404616!2d79.57172951419616!3d17.98652098998427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3345d8051f98ef%3A0x838ffbdaccaafe97!2sTelangana%20Jana%20Vedika!5e0!3m2!1sen!2sin!4v1654331341898!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
        .location-container{
            width:80%;
            height:fit-content;
            padding:25px;
            margin: auto;
            display: flex;
            flex-wrap:wrap;
            justify-content:space-around;
            margin-top:70px;
            font-family: Noto Sans,sans-serif;
        }
        .heading-title{
            width:80%;
            margin:auto;
            padding:10px;
            text-align:center;
            font-family: 'Playfair Display SC', serif;
        }
        .heading-title .location-title{
            color:#183b78;
            margin:20px 0;
        }
        .heading-title  .phone{
            margin:5px 0;
        }
        .heading-title{
            font-size:18px;
        }
        .location{
            width:90%;
            height:fit-content;
            padding:25px;
            margin: auto;
            display: flex;
            flex-wrap:wrap;
            justify-content:space-around;
            margin-top:70px;
            font-family: 'Playfair Display SC', serif;
            color:#183b78;
            text-align:center;
            font-size:18px;
        }
        .location iframe{
            width:800px;
            height:500px;
            margin:40px auto;
        }
        .footer-items{
            margin-top:50px;
        }
    @media screen and (max-width: 992px){
        .location-container{
            width:100%;
            height:fit-content;
            padding:15px;
            margin-top:30px;
        }
       
        .location{
            width:100%;
            height:fit-content;
            padding:5px;
        }
        .location iframe{
            width:500px;
            height:300px;
            margin:30px auto;
        }
        .footer-items{
            margin-top:20px;
        }
    }
    </style>

</body>
</html>