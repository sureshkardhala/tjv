<?php
include('./tjvcontroller/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Playfair+Display+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./static/css/posts.css">
    <link rel="stylesheet" href="./static/css/nav.css">
    <script src="./static/js/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <?php include('./components/nav.php') ; ?>
        <?php $category='Blogs';?>
        <?php include('./components/post.php');?>
    </div>
    <?php include('./components/footer.php'); ?>
   <script src="./static/js/nav.js"></script>
</body>
</html>