<?php 
$result=mysqli_query($dbconn, "SELECT * FROM posts WHERE category = '$category'");
?>
<link rel="stylesheet" href="./static/css/postlist.css">
<title><?php echo $category ;?></title>
<div class="post-list-container">
    <div class="post-list-header">
        <h2 class="post-list-head-title"><a href="<?php echo $category;?>.php?url="><?php echo $category; ?></a></h2>
        <p class="post-shortinfo">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo, ea impedit? Porro quos explicabo fugiat error, repellat totam odio praesentium debitis incidunt quibusdam sequi nobis, aut sapiente ipsa non facere.</p>
    </div>
<?php
if(mysqli_num_rows($result)){
?>
    <div class="post-list-sub-container">
<?php while(    $row=mysqli_fetch_array($result)){
     $image = './tjvcontroller/postthemeimages/'.$row['image'];
?>
        <div class="post-list-items">
            <div class="post-list-img-container">
               <img src="<?php echo $image ; ?>" alt="">
            </div>
            <div class="post-list-text-container">
                <h2 class="post-list-title"><a href="./<?php echo $category.'.php?url='.$row['slug_url'];?>"><?php echo $row['title'];?></a></h2>
                <!-- <p><a href="./<?php echo $category.'.php?url='.$row['slug_url'];?>" class="viewmore">View more</a></p> -->
                <p class="updated_on">updated on: <?php echo $row['updated_on'];?></p>
            </div>
        </div>
        <?php }?>
    </div>
<?php }?>
</div