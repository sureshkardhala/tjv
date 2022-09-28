<?php include('./tjvcontroller/components/topicsarrlist.php'); ?>

<title>Topics We Covered</title>
<div class="topics-container">
<div class="topics-list-container">
    <div class="topics-list-header">
        <h2 class="topics-list-head-title"><a href="topics.php">Topice We Covered</a></h2>
    </div>
    <div class="topics-list-sub-container">
        <p class="topics-shortinfo">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo, ea impedit? Porro quos explicabo fugiat error, repellat totam odio praesentium debitis incidunt quibusdam sequi nobis, aut sapiente ipsa non facere.</p>
        <div class="topics-list-items">
            <div class="topics-list-items">
                <?php foreach ($topics as $key => $value) {
                    $key=str_replace(" ", "-", $key);
                ?>
                <li><a href="./topics.php?topic=<?php   echo strtolower(str_replace(" ", "-", $key)) ;?>"><?php echo $value;?> </a></li>
                <?php }?>
            </div>
        </div>
    </div>
</div>
</div>