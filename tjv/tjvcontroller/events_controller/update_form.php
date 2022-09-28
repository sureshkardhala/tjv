<?php
session_start();
include('config.php');
if (isset($_SESSION['email'])){
     header('location: ../login.php');   
}else{
if($_GET['id']){
   $id=$_GET['id'];
   $result=mysqli_query($dbconn, "SELECT * FROM events WHERE id='$id' ");
   $row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/form.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Update Event</div>
    <div class="content">
      <form action="update_event.php" method="post"  enctype="multipart/form-data">
        <div class="user-details">
        <div class="input-box" style="visibility:hidden;">
            
            <input type="text" name="id" required value="<?php echo$row['id'];?>">
          </div>
          <div class="input-box">
            <span class="details">Title</span>
            <input type="text" name="title" required value="<?php echo$row['title'];?>">
          </div>
         <div>
         <div class="input-box">
            <span class="details">Event Description</span>
            <textarea name="description" id="" cols="100%" rows="15"  required style="font-size:15px;"><?php echo$row['description'];?></textarea>
          </div>
         </div>
          <div class="input-box">
            <span class="details">Event Date (Previous: <?php echo $row['event_date'];?> )</span>
            <input type="date"  name="event_date" required >
          </div>
          <div class="input-box">
            <span class="details">Event Timings ( Previous: <?php echo $row['event_time'];?></span>
            <input type="time" name="event_time" required >
          </div>
          <div class="input-box">
            <span class="details">Choose Event (Previous: <?php echo $row['category'];?>)</span>
            <select name="category">
                <option value="seminars">Seminars</option>
                <option value="meetings">Meetings</option>
                <option value="webinars">Webinars</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Choose Topic (Previous: <?php echo $row['topic'];?>)</span>
            <select name="topic">
                <option value="neoliberalism">NEO-LIBERALISM</option>
                <option value="constitution">CONSTITUTION</option>
                <option value="genderequality">GENDER EQUALITY</option>
                <option value="educationforall">EDUCATION FOR ALL</option>
                <option value="publichealth">PUBLIC HEALTH</option>
                <option value="agriculture">AGRICULTURE</option>
                <option value="msme">MSME</option>
                <option value="publictransport">PUBLIC TRANSPORT</option>
                <option value="ruralemployment">RURAL EMPLOYMENT</option>
                <option value="environmentandclimatechange">ENVIRONMENT AND CLIMATE CHANGE</option>
                <option value="historyandculture">HISTORY AND CULTURE</option>
                <option value="anthropocene">ANTHROPOCENE</option>
                <option value="geology">GEOLOGY</option>
                <option value="nanotechnology">NANO-TECHNOLOGY</option>
                <option value="artificialintelligence">ARTIFICIAL INTELLIGENCE</option>
                <option value="waterresources">WATER RESOURCES</option>
                <option value="urbanisation">URBANISATION</option>
                <option value="land">LAND</option>
                <option value="centerstaterelations">CENTRE - STATE RELATIONS</option>
                <option value="economictheory">ECONOMIC THEORY</option>
                <option value="indianbanking">INDIAN BANKING</option>
                <option value="politicaltheory">POLITICAL THEORY</option>
                <option value="populationanddemography">POPULATION AND DEMOGRAPHY</option>
                <option value="religion">RELIGION</option>
                <option value="judicialreforms">JUDICIAL REFORMS</option>
                <option value="electoralreforms">ELECTORAL REFORMS</option>
                <option value="internationalrelations">INTERNATIONAL RELATIONS</option>
                <option value="globalisation">GLOBALISATION</option>
                <option value="inequality">INEQUALITY</option>
                <option value="socialjustice">SOCIAL JUSTICE</option>
                <option value="dynamicintegrtion">DYNAMIC INTEGRATION BETWEEN MARX, GANDHI AND AMBEDKAR</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Speaker</span>
            <input type="text" name="speaker" required value="<?php echo$row['speaker'];?>">
          </div>

        </div>
        <div class="user-details">
          <div class="input-box">
            <span class="details">About Speaker</span>
            <textarea name="speakerabout" id="" cols="100%" rows="10" required style="font-size:15px;"><?php echo$row['speakerabout'];?></textarea>
          </div>
        </div>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Seo_Keywords</span>
            <textarea name="seo_keywords" id="" cols="100%" rows="10" required  style="font-size:15px;"><?php echo$row['seo_keywords'];?></textarea>
          </div>
        </div>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Seo_Description</span>
            <textarea name="seo_description" id="" cols="100%" rows="10" required style="font-size:15px;"><?php echo$row['seo_description'];?></textarea>
          </div>
        </div>
        <div class="user-details">
          <div class="input-box">
            <span class="details">YOUTUBE</span>
            <input type="text" name="youtube" required value="<?php echo$row['youtube'];?>">
          </div>
          <div class="input-box">
            <span class="details">Facebook</span>
            <input type="text" name="facebook"  required value="<?php echo$row['facebook'];?>">
          </div>
          <div class="input-box">
            <span class="details">Zoom</span>
            <input type="text" name="zoom"  required value="<?php echo$row['zoom'];?>">
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
<?php } }?>
