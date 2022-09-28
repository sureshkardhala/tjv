<?php 
$result=mysqli_query($dbconn, "SELECT * FROM events WHERE category = '$category'");
?>
<link rel="stylesheet" href="./static/css/eventlist.css">
<title><?php echo $category ;?></title>
<div class="webinar-list-container">
    <div class="webinar-list-header">
        <h2 class="webinar-list-head-title"><a href="<?php echo $category;?>.php?url="><?php echo $category; ?></a></h2>
        <p class="webinar-shortinfo">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo, ea impedit? Porro quos explicabo fugiat error, repellat totam odio praesentium debitis incidunt quibusdam sequi nobis, aut sapiente ipsa non facere.</p>
    </div>
<?php
if(mysqli_num_rows($result)){
?>
    <div class="webinar-list-sub-container">
<?php while(    $row=mysqli_fetch_array($result)){
     $image = './tjvcontroller/eventimages/'.$row['image'];
?>
        <div class="webinar-list-items">
            <div class="webinar-list-img-container">
               <img src="<?php echo $image ; ?>" alt="">
            </div>
            <div class="webinar-list-text-container">
                <h2 class="webinar-list-title"><a href="./<?php echo $category.'.php?url='.$row['slug_url'];?>">2నీరు-నిత్యజీవనాధారం Water - Elixir of Life Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis harum suscipit odit nobis tempore neque repellat ullam minus labore a.</a></h2>
                <p class="meeting">  <span>Date & Timings:</span> <?php echo $row['date'].' '. $row['time']; ?></p>
                <p><a href="./<?php echo $category.'.php?url='.$row['slug_url'];?>" class="viewmore">View more</a></p>
                <p class="updated_on">updated on: <?php echo $row['updated_on']; ?></p>
            </div>
        </div>
<?php }?>
    </div>
<?php }?>
</div>