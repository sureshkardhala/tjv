<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telengana Jan Vedika</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins&family=Roboto&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container overlay">
        <?php include('nav1.php');?>
        <div class="banner">
            <?php include('banner.php');?>
        </div>
        <div class="event">
            <?php include('main-events.php');?>
        </div>
        <div class="publication">
            <?php include('main-publications.php');?> 
        </div>
        <div class="article">
            <?php include('main-articles.php');?>
        </div>
       
        <?php include('footer.php');?>
    </div>
</body>
</html>
<script>
    var overlay = document.getElementById("overlay");

window.addEventListener('load', function(){
  overlay.style.display = 'none';
})
</script>

<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    body{
        background:whitesmoke;
    }
    .container{
        width:100%;
        height:fit-content;
        display:flex;
        flex-wrap:wrap;
        justify-content:space-between;
    }
    .top{
        width:100%;
    }
    .banner{
        width:100%;
        height:fit-content;
        font-family: 'Poppins', sans-serif;
        box-shadow: 0 1px 1px rgba(0,0,0,0.1);
    }
    .event{
        width:100%;
        height:fit-content;
        margin:30px 0;
        padding:10px;

    }
    .article{
        width:100%;
        height:fit-content;
        margin:30px 0;
        padding:10px;
    }
    .publication{
        width:100%;
        height:fit-content;
        margin:30px 0;
        padding:10px;
    }
    
    .footer{
        width:100%;
        height:fit-content;
        margin-bottom:0;
        margin:20px 0;
    }
</style>