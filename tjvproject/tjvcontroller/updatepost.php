<?php 
include('./config.php');
include('./components/authorsarrlist.php');
include('./components/topicsarrlist.php');
$msg='';
if($_GET['src']){
    $check =base64_decode($_GET['src']);
    $msg =base64_decode($_GET['msg']);
    $result=mysqli_query($dbconn, "SELECT * FROM posts WHERE id = '$check'");
    $row=mysqli_fetch_array($result);
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
    <title>Update <?php echo $row['title']; ?></title>
    <link rel="stylesheet" href="./static/css/form.css">
   </head>
<body>
  <div class="container" style="width:90%;">
  <div class="content"><?php echo $msg;?></div>
    <div class="title">Update Post</div>
    <div class="content">
      <form action="./components/updatepost.php" method="post"  enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Title</span>
            <input type="text" placeholder="Enter your title" name="title" required value="<?php echo $row['title']; ?>">
          </div>
          <div class="input-box">
            <span class="details">Category</span>
            <select name="category">
              <?php if($row['category']=='blogs'){?>
                <option value="blogs">Blogs & Posts</option>
                <option value="publications">Publications</option>
              <?php } else{?>
                <option value="publications">Publications</option>
                <option value="blogs">Blogs & Posts</option>
              <?php }?>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Choose Topic</span>
            <select name="topic">
            <option value="<?php echo $row['topic'] ; ?>"><?php echo $topics[$row['topic']] ; ?></option>
            <?php foreach ($topics as $key => $value) {
              if($row['topic']!= $key){?>
                <option value="<?php echo $key ; ?>"><?php echo $value ; ?></option>
              <?php } }?>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Authors</span>
            <select name="author">
                <option value="<?php echo $row['author'] ; ?>"><?php echo $row['author'] ; ?></option>
                <?php while($author_array = mysqli_fetch_assoc($author_result)){
                  if($row['author']!=$author_array['author_name']) {?>
                    <option value="<?php echo $author_array['author_name'];?>"><?php echo $author_array['author_name'];?></option>
                <?php } }?>
            </select>
          </div>
          <div class="input-box" style="visibility:hidden">
            <span class="details">Id</span>
            <input type="text" name="id" required value="<?php echo $row['id'];?>">
          </div>
         <div>
        <div class="descriptionck">
            <textarea name="description"><?php echo $row['description'];?></textarea>
        </div>
        <div class="button">
          <input type="submit" value="Submit" name="submit">
        </div>
      </form>
    </div>
  </div>
<style>
.cke_inner{
    width:150%;
    border:1px solid blue;
}
.button{
    width:100%;
}
</style>
</body>
</html>
<script>
 CKEDITOR.replace( 'description', {
  height: 1000,
  width: 700,
  filebrowserUploadUrl: "upload.php"
 });
</script>