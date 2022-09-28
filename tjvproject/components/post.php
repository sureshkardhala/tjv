<?php 
if($_GET['url']){
    $slug_url=$_GET['url'];
    $result=mysqli_query($dbconn, "SELECT * FROM posts WHERE slug_url = '$slug_url'");
?>
<link rel="stylesheet" href="./static/css/post.css">
<?php
if(mysqli_num_rows($result)){
    $row=mysqli_fetch_array($result);
    $image = './tjvcontroller/postthemeimages/'.$row['image'];
    $author = $row['author'];
    $author_query=mysqli_query($dbconn, "SELECT * FROM authors WHERE author_name = '$author'");
    $cat_url='./'.$row['category'].'.php/?url=';
?>
<title><?php echo $row['title'];?></title>
<div class="single-container">
    <div class="single-left">
        <?php include('./components/leftpost.php'); ?>
    </div>
    <div class="single-right">
        <div class="single-top">
            <a href="./" class="top-items">Home &nbsp;<i class="fa-solid fa-angle-right"></i></a>
            <a href="./publications.php?url=" class="top-items"><?php echo $category ;?> &nbsp;<i class="fa-solid fa-angle-right"></i></a>
            <a href="./topics.php?topic=<?php   echo strtolower(str_replace(" ", "-", $row['topic'])) ;?>" class="top-items">Topic &nbsp;<i class="fa-solid fa-angle-right"></i></a>
        </div>
        <div class="single-item">
            <div class="single-img-container">
                <img src="<?php echo $image; ?>" alt="">
            </div>
            <h2 class="main-title"><?php echo $row['title'];?></h2>
            <div class="description"><?php echo $row['description'];?></div>
<?php
if(mysqli_num_rows($author_query)>0){
    $author_list=mysqli_fetch_array($author_query);
    $author_image='./tjvcontroller/authorimages/'.$author_list['author_image'];
?>
            <h3 class="main-title1">Published By</h3>
            <div class="user-item">
                <div class="user-image-container">
                    <img src="<?php echo $author_image; ?>" alt="">
                </div>
                <div class="user-details">
                    <h4 class="usertitle"><?php echo $author_list['author_name'];?> - <span><?php echo $author_list['author_designation'];?></span></h4>
                    <p class="userdata"><?php echo $author_list['author_description'];?></p>
                </div>
                <div class="empty"></div>
            </div>
<?php }?>
            <p class="description upon">Uploadedon : <span> <?php echo $row['uploaded_on'];?></span></p>
        </div>
    </div>
<?php }else{ ?>
    <div class="single-container">
        <h2 class="nopostfound"><i class="fa-solid fa-circle-exclamation"></i>&nbsp;No Results Found!</h2>
    </div>
<?php }?>
<?php include('./components/latestposts.php');?>
<?php }else{?>
<div class="post-list-item-container">
    <?php include('./components/postlist.php');?>
</div>
<?php } ?>