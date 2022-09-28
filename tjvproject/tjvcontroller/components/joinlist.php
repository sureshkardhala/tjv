<?php 
include('./config.php');
$result=mysqli_query($dbconn, "SELECT * FROM joinwithus ORDER BY id DESC");
?>
<title>Join Our Community</title>
<link rel="stylesheet" href="./static/css/userlist.css">
<h3 class="headtitle">Registrations List</h3>
<?php
if(mysqli_num_rows($result)>0){
?>
<div class="user-item-container">
    <?php while($row=mysqli_fetch_array($result)){
        $link = base64_encode($row['id']);
    ?>
    <div class="user-items">
        <div class="tplist">
            <h4 class="usertitle">Fullname :<span>&nbsp;&nbsp;<?php echo $row['name'] ;?></span></h4>
            <h4 class="usertitle">Profession :<span>&nbsp;&nbsp;<?php echo $row['profession'] ;?></span></h4>
            <h4 class="usertitle">Email :<span>&nbsp;&nbsp;<?php echo $row['email'] ;?></span></h4>
            <h4 class="usertitle">Phone :<span>&nbsp;&nbsp;<?php echo $row['phone']  ;?></span></h4>
            <div class="buttons-list">
                <div class="btn delete"><a href="./components/deletejoin.php?src=<?php echo $link; ?>" >Delete&nbsp;<i class="fa-solid fa-trash"></i></a></div>
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