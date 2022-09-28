<?php 
include('./config.php');
$result=mysqli_query($dbconn, "SELECT * FROM users ORDER BY id DESC");
$roles = ['superadmin'=> 'SuperAdmin','basicadmin' => 'Basic Admin', 'member'=> 'Member'];
?>
<title>AuthorsList</title>
<link rel="stylesheet" href="./static/css/userlist.css">
<h3 class="headtitle">List Of Users</h3>
<?php
if(mysqli_num_rows($result)>0){
?>
<div class="user-item-container">
    <?php while($row=mysqli_fetch_array($result)){
        $link = base64_encode($row['id']);
        $password =  base64_decode( base64_decode( base64_decode( base64_decode($row['password']))));
    ?>
    <div class="user-items">
        <div class="tplist">
            <h4 class="usertitle">UserName :<span>&nbsp;&nbsp;<?php echo $row['username'] ;?></span></h4>
            <h4 class="usertitle">Email :<span>&nbsp;&nbsp;<?php echo $row['email'] ;?></span></h4>
            <h4 class="usertitle">Password :<span>&nbsp;&nbsp;<?php echo $password  ;?></span></h4>
            <h4 class="usertitle">Role:<span>&nbsp;&nbsp;<?php echo $roles[$row['role']] ;?></span></h4>
            <div class="buttons-list">
                <div class="btn edit"><a href="./updateuser.php?src=<?php echo $link; ?>&msg=<?php echo base64_decode(''); ?>" target="_blank">Update&nbsp;<i class="fa-solid fa-pen-to-square"></i></a></div>
                <div class="btn delete"><a href="./components/deleteuser.php?src=<?php echo $link; ?>" >Delete&nbsp;<i class="fa-solid fa-trash"></i></a></div>
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