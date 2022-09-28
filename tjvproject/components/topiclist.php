<?php $title= ucwords((str_replace("-", " ", $topicName)));
$topicName=str_replace("-", " ", $topicName);
$posts=mysqli_query($dbconn, "SELECT * FROM posts WHERE topic = '$topicName' ORDER BY updated_on DESC");
$events=mysqli_query($dbconn, "SELECT * FROM events WHERE topic = '$topicName' ORDER BY updated_on DESC");
?>
<link rel="stylesheet" href="./static/css/topiclist.css">
<title><?php echo $title ;?></title>
<?php if(!mysqli_num_rows($posts) || !mysqli_num_rows($events)){?>
<div class="topic-list-container">
    <div class="topic-list-header">
        <h2 class="topic-list-head-title"><a href="topics.php?topic=<?php echo $topicName; ?>"><?php echo $title; ?></a></h2>
    </div>
    <div class="topic-list-sub-container">
        <?php while ($row=mysqli_fetch_array($posts)){
            $image="./tjvcontroller/postthemeimages/".$row['image'];
        ?>
        <div class="topic-list-items">
            <div class="topic-list-img-container">
               <img src="<?php echo $image; ?>" alt="">
            </div>
            <div class="topic-list-text-container">
                <h2 class="topic-list-title"><a href="./<?php echo $row['category'].'.php?url='.$row['slug_url'];?>"><?php echo $row['title'];?></a></h2>
                <p><a href="./<?php echo $row['category'].'.php?url='.$row['slug_url'];?>" class="category"><?php echo $row['category'];?></a></p>
                <p class="updated_on"><?php echo $row['updated_on'];?></p>
            </div>
        </div>
        <?php }?>
        <?php while ($row=mysqli_fetch_array($events)) {
             $image="./tjvcontroller/eventimages/".$row['image'];?>
        <div class="topic-list-items">
            <div class="topic-list-img-container">
               <img src="<?php echo $image; ?>" alt="">
            </div>
            <div class="topic-list-text-container">
                <h2 class="topic-list-title"><a href="./<?php echo $row['category'].'.php?url='.$row['slug_url'];?>"><?php echo $row['title'];?></a></h2>
                <p><a href="./<?php echo $row['category'].'.php?url='.$row['slug_url'];?>" class="category"><?php echo $row['category'];?></a></p>
                <p class="updated_on"><?php echo $row['updated_on'];?></p>
            </div>
        </div>
        <?php }?>
    </div>
</div>
<?php }else{?>
    <div class="single-container">
        <h2 class="nopostfound"><i class="fa-solid fa-circle-exclamation"></i>&nbsp;No Results Found!</h2>
    </div>
<?php }?>
<?php include('./components/latestposts.php');?>
