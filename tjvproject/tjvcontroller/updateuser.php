<?php 
include('./config.php');
$msg='';
if($_GET['src']){
    $check =base64_decode($_GET['src']);
    $msg =base64_decode($_GET['msg']);
    $result=mysqli_query($dbconn, "SELECT * FROM users WHERE id = '$check'");
    $row=mysqli_fetch_array($result);
    $roles = ['superadmin'=> 'SuperAdmin','basicadmin' => 'Basic Admin', 'member'=> 'Member'];
    $role=$row['role'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update <?php echo $row['username'];?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Playfair+Display+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../static/js/jquery.min.js"></script>
    <link rel="stylesheet" href="./static/css/rnu.css">
</head>
<body>
    <div class="container">
        <div class="nav">
            <h2 class="title">Telangana Jana Vedika</h2>
            <a href="#" class="logoutBtn">Logout&nbsp;&nbsp;<i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
        <div class="item-container1">
        <?php echo $msg ; ?> &nbsp;
        </div>
        <div class="item-container">
            <div class="text" style="font-size:18px;">UserName : <?php echo $row['username'];?></div>
            <form action="./components/updateuser.php" method="post"  enctype="multipart/form-data">
               <div class="data">
                  <label>Email</label>
                  <input type="email" name="email" required value="<?php echo $row['email'];?>">
               </div>
               <div class="data">
                  <label>Password</label>
                  <input type="text" name="password" required value=<?php echo base64_decode(base64_decode(base64_decode(base64_decode($row['password']))));?>>
               </div>
               <div class="data">
                  <label>Role<label>
                  <select name="role">
                  <option value="<?php echo $role ; ?>"><?php echo $roles[$role] ; ?></option>
                  <?php foreach ($roles as $key => $value) {
                    if($role!=$key){
                  ?>
                    <option value="<?php echo $key ; ?>"><?php echo $value ; ?></option>
                  <?php }}?>
                  </select>
               </div>
               <div class="btn">
                  <div class="inner"></div>
                  <input type="submit" value="Submit" name="submit">
               </div>
               <div class="data" style="visibility:hidden">
                  <input type="text" name="id" required value="<?php echo $row['id'];?>">
                </div>
            </form>
         </div>
    </div>
</body>
</html>
<?php } ?>