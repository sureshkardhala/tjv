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
        <div class="blogs-list-item-container">
            <?php include('blog.php');?>
        </div>
        <div class="blogs-list-item-container">
            <?php include('blog-list.php');?>
        </div>
        <!-- <div class="webinar-items">
            <?php include('main-webinars.php');?>
        </div>
        <div class="blogs-items">
            <?php include('main-blogss.php');?>
        </div>
        <div class="blogs-posts-items">
            <div class="web">
                <?php include('main-blogs-posts.php');?>
            </div>
            <div class="mob">
                <?php include('mob-blog.php');?>
            </div>
        </div> -->
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
        .blogs-list-item-container{
            width:100%;
            height:fit-content;
        }
        .webinar-items{
            width:100%;
            height:fit-content;
        }
        .footer-items{
            width:100%;
            height:fit-content;
            margin-top:50px;
        }
    </style>

</body>
</html>