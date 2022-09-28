<?php  
include('./config.php');
include('./components/authorsarrlist.php');
include('./components/topicsarrlist.php');
$msg='';
if($_GET['src']){
    $check =base64_decode($_GET['src']);
    $msg =base64_decode($_GET['msg']);
    $result=mysqli_query($dbconn, "SELECT * FROM events WHERE id = '$check'");
    $row=mysqli_fetch_array($result);
    $events=['seminars'=> 'Seminars', 'meetings' => 'Meetings', 'webinars'=> 'Webinars'];
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Events</title>
    <link rel="stylesheet" href="./static/css/form.css">
   </head>
<body>
  <div class="container" style="width:90%;">
  <div class="content"><?php echo $msg;?></div>
    <div class="title">Update Event</div>
    <div class="content">
      <form action="./components/updateevent.php" method="post"  enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Event Title</span>
            <input type="text" placeholder="Enter your title" name="title" required value="<?php echo $row['title'];?>">
          </div>
          <div class="input-box">
            <span class="details">Date</span>
            <input type="date" name="date" required value="<?php echo $row['date'];?>">
          </div>
          <div class="input-box">
            <span class="details">Time</span>
            <input type="time" name="time" required value="<?php echo $row['time'];?>">
          </div>
          <div class="input-box">
            <span class="details">Type Of Event</span>
            <select name="category">
            <option value="<?php echo $row['category'] ; ?>"><?php echo $events[$row['category']] ; ?></option>
            <?php foreach ($events as $key => $value) {
              if($row['category']!= $key){?>
                <option value="<?php echo $key ; ?>"><?php echo $value ; ?></option>
              <?php } }?>
            </select>
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
            <span class="details">Speaker</span>
            <select name="author">
                <option value="<?php echo $row['author'] ; ?>"><?php echo $row['author'] ; ?></option>
                <?php while($author_array = mysqli_fetch_assoc($author_result)){
                  if($row['author']!=$author_array['author_name']) {?>
                    <option value="<?php echo $author_array['author_name'];?>"><?php echo $author_array['author_name'];?></option>
                <?php } }?>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Meeting Id</span>
            <input type="text" name="meetingid" required value="<?php echo $row['meetingid'];?>">
          </div>
          <div class="input-box">
            <span class="details">Meeting Password</span>
            <input type="text" name="meetingpassword" required  value="<?php echo $row['meetingpassword'];?>">
          </div>
          <div class="input-box">
            <span class="details">Zoom Meeting Link</span>
            <input type="text" name="zoomlink" required  value="<?php echo $row['zoomlink'];?>">
          </div>
          <div class="input-box">
            <span class="details">Facebook live</span>
            <input type="text" name="facebooklink" required  value="<?php echo $row['facebooklink'];?>">
          </div>
          <div class="input-box">
            <span class="details">Youtube Meeting link</span>
            <input type="text" name="youtubelink" required  value="<?php echo $row['youtubelink'];?>">
          </div>
          <div class="input-box" style="visibility:hidden">
            <span class="details">id</span>
            <input type="text" name="id" required  value="<?php echo $row['id'];?>">
          </div>
         <div>
        <div class="input-box" style="margin:15px;">
            <textarea name="description" id="" cols="150" rows="10" style="padding:10px;" required><?php echo $row['description'];?></textarea>
        </div>
        <div class="button">
          <input type="submit" value="Submit" name="submit">
        </div>

      </form>
    </div>
  </div>
<style>
</style>
</body>
</html>