<?php 
include('./config.php');
$msg='';
if($_GET['src']){
    $check =base64_decode($_GET['src']);
    $msg =base64_decode($_GET['msg']);
    $result=mysqli_query($dbconn, "SELECT * FROM authors WHERE id = '$check'");
    $row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./static/css/form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update <?php echo $row['author_name'];?> Details</title>
   </head>
<body>
  <div class="container">
    <p class="message"><?php echo $msg ; ?></p>
    <div class="title">Upload Author Details</div>
    <div class="content">
      <form action="./components/updateauthor.php" method="post"  enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter Full name" name="author_name" required value="<?php echo $row['author_name'];?>">
          </div>
          <div class="input-box">
            <span class="details">Designation</span>
            <input type="text" placeholder="Enter Designation" name="author_designation" required value="<?php echo $row['author_designation'];?>">
          </div>
        </div>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Description</span>
            <textarea name="author_description" id="" cols="100%" rows="10" style="padding:10px; font-size:15px;" required><?php echo $row['author_description'];?></textarea>
          </div>
          <div class="input-box" style="visibility:hidden">
            <span class="details">Id</span>
            <input type="text" name="id" required value="<?php echo $row['id'];?>">
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Submit" name="submit">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
<?php }?>