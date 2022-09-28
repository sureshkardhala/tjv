<?php 
include('./tjvcontroller/config.php');
$query = mysqli_query($dbconn, "SELECT * FROM events ORDER BY updated_on DESC LIMIT 12");
if(mysqli_num_rows($query)>0){
?>
<link rel="stylesheet" href="./static/css/latestposts.css">
<h2 class="latest-posts-title">Latest Events</h2>
<div class="latest-posts">
    <?php  while ($row=mysqli_fetch_array($query)) {
        $image="./tjvcontroller/eventimages/".$row['image'];
        $url="./".$row['category'].".php?url=".$row['slug_url'];
    ?>
        <div class="latest-post">
            <a href="<?php echo $url; ?>">
                <div class="latest-post-image-container">
                    <img src="<?php echo $image; ?>" alt="">
                </div>
                <div class="latest-post-container">
                    <h3 class="latest-post-title"><?php echo $row['title']; ?></h3>
                </div>
            </a>
        </div>
    <?php } ?>
</div>
<?php }?>