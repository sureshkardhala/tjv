<?php
$topics =[
    'neo liberism'=> 'NEO-LIBERALISM',
    'constitution' => 'CONSTITUTION',
    'gender equality'=> 'GENDER EQUALITY',
    'education for all'=> 'EDUCATION FOR ALL',
    'public health'=>'PUBLIC HEALTH',
    'agriculture'=>'AGRICULTURE',
    'msme'=>'MSME',
    'public transport'=>'PUBLIC TRANSPORT',
    'rural employment'=>'RURAL EMPLOYMENT',
    'environment and climate change'=>'ENVIRONMENT AND CLIMATE CHANGE',
    'history and culture'=>'HISTORY AND CULTURE',
    'anthropocene'=>'ANTHROPOCENE',
    'geology'=>'GEOLOGY',
    'nano technology'=>'NANO-TECHNOLOGY',
    'artificial intelligence'=>'ARTIFICIAL INTELLIGENCE',
    'water resources'=>  'WATER RESOURCES',
    'urbanisation'=>'URBANISATION',
    'land'=>'LAND',
    'centre state relations'=>'CENTRE-STATE RELATIONS',
    'economic theory'=>'ECONOMIC THEORY',
    'indian banking'=>'INDIAN BANKING',
    'political theory'=>'POLITICAL THEORY',
    'population and demography'=>'POPULATION AND DEMOGRAPHY',
    'religion'=>'RELIGION',
    'judicial reforms'=>'JUDICIAL REFORMS',
    'electoral reforms'=>'ELECTORAL REFORMS',
    'international relations'=>'INTERNATIONAL RELATIONS',
    'globalisation'=>'GLOBALISATION',
    'inequality'=>'INEQUALITY',
    'social justice'=>'SOCIAL JUSTICE',
    'dynamic integration between marx, gandhi, and ambedkar'=>'DYNAMIC INTEGRATION BETWEEN MARX, GANDHI AND AMBEDKAR',
];
$events =[ 'seminars'=> 'Seminars','webinars' => 'Webinars','meetings'=> 'Meetings'];
?>
<div class="left-items">
<h3 class="head-top"><a href="./events.php">Events</a></h3>

    <?php foreach ($events as $key => $value) {
        $key=str_replace(" ", "-", $key);
    ?>
    <a href="./events.php?event=<?php echo $key; ?>" class="top-left-items"><?php echo $value;?>  &nbsp;<i class="fa-solid fa-angle-right"></i></a>
    <?php }?>
</div>
<div class="left-items">
<h3 class="head-bottom"><a href="./topics.php">Topics We Covered</a></h3>

    <?php foreach ($topics as $key => $value) {
        $key=str_replace(" ", "-", $key);
    ?>
    <a href="./topics.php?topic=<?php   echo strtolower(str_replace(" ", "-", $key)) ;?>" class="top-left-items"><?php echo $value;?>  &nbsp;<i class="fa-solid fa-angle-right"></i></a>
    <?php }?>
</div>