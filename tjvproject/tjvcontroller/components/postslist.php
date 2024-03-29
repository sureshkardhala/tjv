<?php 
include('./config.php');
$result=mysqli_query($dbconn, "SELECT * FROM posts WHERE category='$check' ORDER BY updated_on DESC");
?>
<title><?php echo ucfirst($check); ?></title>
<link rel="stylesheet" href="./static/css/postlist.css">
<h3 class="headtitle"><?php echo $check; ?></h3>
<?php
if(mysqli_num_rows($result)>0){
?>
<div class="post-item-container">
    <?php while($row=mysqli_fetch_array($result)){
        $image = "./postthemeimages/". $row['image'];
        $link = base64_encode($row['id']);
    ?>
    <div class="post-items">
        <div class="post-image-container">
            <img src="<?php echo $image ;?>" alt="">
        </div>
        <div class="post-details">
            <h4 class="posttitle"><?php echo $row['title'] ;?></h4>
            <div class="tplist">
                <h4 class="posttp">Topic :<span>&nbsp;-&nbsp;<?php echo $row['topic'] ;?></span></h4>
                <h4 class="posttp">Author :<span>&nbsp;-&nbsp;<?php echo $row['author'] ;?></span></h4>
                <h4 class="posttp">Category: :<span>&nbsp;-&nbsp;<?php echo ucfirst($row['category']) ;?></span></h4>
            </div>
            <div class="tplist">
                <h4 class="posttp">Uploaded_on:<span>&nbsp;-&nbsp;<?php echo $row['uploaded_on'] ;?></span></h4>
                <h4 class="posttp">Updated_on :<span>&nbsp;-&nbsp;<?php echo $row['updated_on'] ;?></span></h4>
            </div>
        </div>
        <div class="buttons-list1">
                <div class="btn view"><a href="./updatepost.php?src=<?php echo $link; ?>&msg=<?php echo base64_decode(''); ?>" target="_blank">View&nbsp;<i class="fa-solid fa-eye"></i></a></div>
                <div class="btn edit"><a href="./updatepost.php?src=<?php echo $link; ?>&msg=<?php echo base64_decode(''); ?>" target="_blank">Update&nbsp;<i class="fa-solid fa-pen-to-square"></i></a></div>
                <div class="btn delete"><a href="./components/deletepost.php?src=<?php echo $link; ?>" >Delete&nbsp;<i class="fa-solid fa-trash"></i></a></div>
        </div>
    </div>
    <?php } ?>
</div>
<?php } else{ ?>
    <div class="post-item-noresult">
        <h4 class="nores">No Results Found</h4>
    </div>
<?php }?>