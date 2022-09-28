<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telangana Jana Vedika - Topics</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Playfair+Display+SC&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php include('nav.php');?>
        <div class="topics-container">
            <div class="topics-list-container">
                <div class="topics-list-header">
                    <h2 class="topics-list-head-title"><a href="topics.php">Topice We Covered</a></h2>
                </div>
                <div class="topics-list-sub-container">
                    <p class="topics-shortinfo">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo, ea impedit? Porro quos explicabo fugiat error, repellat totam odio praesentium debitis incidunt quibusdam sequi nobis, aut sapiente ipsa non facere.</p>
                    <div class="topics-list-items">
                        <div class="topics-list-items">
                            <li><a href="seminar.php">NEO-LIBERALISM</a></li>
                            <li><a href="webiinars.php">CONSTITUTION</a></li>
                            <li><a href="meetings.php">GENDER EQUALITY</a></li>
                            <li><a href="seminars.php">EDUCATION FOR ALL</a></li>
                            <li><a href="webiinars.php">PUBLIC HEALTH</a></li>
                            <li><a href="meetings.php">AGRICULTURE</a></li>
                            <li><a href="seminar.php">MSME</a></li>
                            <li><a href="webiinars.php">PUBLIC TRANSPORT</a></li>
                            <li><a href="meetings.php">RURAL EMPLOYMENTE</a></li>
                            <li><a href="seminars.php">ENVIRONMENT AND CLIMATE CHANGE</a></li>
                            <li><a href="webiinars.php">HISTORY AND CULTURE</a></li>
                            <li><a href="meetings.php">ANTHROPOCENE</a></li>
                            <li><a href="seminar.php">GEOLOGY</a></li>
                            <li><a href="webiinars.php">NANO-TECHNOLOGY</a></li>
                            <li><a href="meetings.php">ARTIFICIAL INTELLIGENCE</a></li>
                            <li><a href="seminars.php">WATER RESOURCES</a></li>
                            <li><a href="webiinars.php">URBANISATION</a></li>
                            <li><a href="meetings.php">LAND</a></li>
                            <li><a href="seminar.php">CENTRE - STATE RELATIONS</a></li>
                            <li><a href="webiinars.php">ECONOMIC THEORY</a></li>
                            <li><a href="meetings.php">INDIAN BANKING</a></li>
                            <li><a href="seminars.php">POLITICAL THEORY</a></li>
                            <li><a href="webiinars.php">POPULATION AND DEMOGRAPHY</a></li>
                            <li><a href="meetings.php">RELIGION</a></li>
                            <li><a href="seminar.php">JUDICIAL REFORMS</a></li>
                            <li><a href="webiinars.php">ELECTORAL REFORMS</a></li>
                            <li><a href="meetings.php">GLOBALISATION</a></li>
                            <li><a href="seminars.php">INEQUALITY</a></li>
                            <li><a href="webiinars.php">SOCIAL JUSTICE</a></li>
                            <li><a href="meetings.php">DYNAMIC INTEGRATION BETWEEN MARX, GANDHI AND AMBEDKAR</a></li>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer-items">
            <?php include('footer.php');?>
        </div>
    </div>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        
        .container{
            width:100%;
            height:fit-content;
        }
        .topics-container{
            width:100%;
            height:fit-content;
        }
        .footer-items{
            margin:100px 0;
        }
        .topics-list-container{
        width:80%;
        height:fit-content;
        display:flex;
        flex-wrap:wrap;
        margin:auto;
        padding:5px;
        font-family: 'Playfair Display SC', serif;
        margin-top:50px;
    }
    .topics-list-header{
        width:100%;
        height:fit-content;
        padding:15px;
        display:flex;
        flex-wrap:wrap;
        text-align:center;
    }
    .topics-list-header a{
        color:black;
    }
    .topics-list-header .topics-list-head-title{
        width:100%;
        text-align:center;
    }
    .topics-list-sub-container{
        width:100%;
        height:fit-content;
        display:flex;
        flex-wrap:wrap;
        justify-content:space-around;
        margin-top:30px;
    }
    .topics-shortinfo{
        width:70%;
        padding:5px;
        margin:auto;
        
    }
    .topics-list-items{
        width:100%;
        margin:auto;
        margin-top:30px;
        display:flex;
        flex-wrap:wrap;
    }
    .topics-list-items li{
        margin-top:10px;
        width:25%;
    }
    .topics-list-items li a{
        color:#183b78;
        margin-top:10px;
    }
    @media screen and (max-width: 992px){
        .topics-list-container{
        width:100%;
        padding:15px;
        margin-top:30px;
    }
    .topics-list-sub-container{
        padding:0px;
    }
   
    .topics-list-items{
        width:100%;
        margin:auto;
        margin-top:0px;
        text-align:left;
        padding:20px;
        padding:5px 20px;
    }
    .topics-list-items li{
        margin-top:10px;
        margin:10px auto;
        width:90%;
        text-align:left;
    }
    .topics-list-items li a{
        color:#183b78;
        margin-top:10px;
    }
    .topics-shortinfo{
        width:95%;
        padding:10px;
        margin:auto;
        margin-top:30px;
    }
    }
    </style>

</body>
</html>