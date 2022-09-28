<?php 
session_start();
include('../config.php');
if (isset($_SESSION['email'])){
     header('location: ../login.php');   
}else{
if($_GET['id']){
   $id=$_GET['id'];
   $result=mysqli_query($dbconn, "SELECT * FROM posts WHERE id='$id' ");
   $row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
     <title><?php echo $row['title'];?></title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../css/form.css">
   </head>
<body>
  <div class="container">
    <div class="title">Upload Event</div>
    <div class="content">
      <form action="update_post.php" method="post"  enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Title</span>
            <input type="text"  name="title" required value="<?php echo $row['title'];?>">
          </div>
          <div class="input-box" style="visibility:hidden">
            <input type="text" name="id" required  value="<?php echo $row['id'];?>">
          </div>
          <div class="input-box">
            <span class="details">Category ( Previous:<?php echo $row['category'];?>)</span>
            <select name="category">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Choose Topic ( Previous:<?php echo $row['topic'];?>)</span>
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
         <div>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Seo_Keywords</span>
            <textarea name="seo_keywords" id="" cols="100%" rows="10" style="padding:10px; font-size:15px;" required><?php echo $row['seo_keywords'];?></textarea>
          </div>
        </div>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Seo_Description</span>
            <textarea name="seo_description" id="" cols="100%" rows="10" style="padding:10px; font-size:15px;" required><?php echo $row['seo_description'];?></textarea>
          </div>
        </div>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Description</span>
            <textarea name="description" id="" cols="100%" rows="10" style="padding:10px; font-size:15px;" required><?php echo $row['description'];?></textarea>
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
<?php }}?>