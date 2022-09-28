<?php 
include('./config.php');
$result=mysqli_query($dbconn, "SELECT * FROM authors ORDER BY id DESC");
?>
<title>AuthorsList</title>
<link rel="stylesheet" href="./static/css/userlist.css">
<h3 class="headtitle">List Of Authors</h3>
<?php
if(mysqli_num_rows($result)>0){
?>
<div class="user-item-container">
    <?php while($row=mysqli_fetch_array($result)){
        $image = "./authorimages/". $row['author_image'];
        $link = base64_encode($row['id']);
    ?>
    <div class="user-items">
        <div class="user-image-container">
            <img src="<?php echo $image ;?>" alt="">
        </div>
        <div class="user-details">
            <h4 class="usertitle"><?php echo $row['author_name'] ;?><span>&nbsp;-&nbsp;<?php echo $row['author_designation'] ;?></span></h4>
            <div class="description">
                <p><?php echo $row['author_description']; ?></p>
            </div>
            <div class="buttons-list">
                <div class="btn edit"><a href="./updateauthor.php?src=<?php echo $link; ?>&msg=<?php echo base64_decode(''); ?>" target="_blank">Update&nbsp;<i class="fa-solid fa-pen-to-square"></i></a></div>
                <div class="btn delete"><a href="./components/deleteauthor.php?src=<?php echo $link; ?>" >Delete&nbsp;<i class="fa-solid fa-trash"></i></a></div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
<?php } else{ ?>
    <div class="user-item-noresult">
        <h4 class="nores">No Results Found</h4>
    </div>
<?php }?>