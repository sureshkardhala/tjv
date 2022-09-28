<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telengana Jan Vedika</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto+Slab&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="container">
        <div class="nav-section">
            <div class="logo">
                   <img src="logo.png" alt="">
            </div>
            <div class="short-info">
                <div class="caption">
                    <div class="motto">
                        <h3>Public Policy.  Research.  Analysis.</h3>
                    </div>
                    <div class="search-box">
                        <form action="search.php" method="POST" class="search-form">
                            <input type="text" name="search" placeholder="Search..." class="input" />
                            <a type="submit" class="btn"><i class="fas fa-search"></i></a>
                        </form>
                    </div>
                    <div class="empty">

                    </div>
                </div>
                <div class="nav-bar">
                    <div class="nav-items">
                        <label><input type="checkbox" name="content" id="content1" class="chb">Who We Are</label>
                        <label><input type="checkbox" name="content" id="content2" class="chb">Events</label>
                        <label><input type="checkbox" name="content" id="content3" class="chb">Topics Covered</label>
                        <label><input type="checkbox" name="content" id="content4" class="chb">Join Our Network</label>
                        <label><input type="checkbox" name="content" id="content5" class="chb">Contact</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="content1">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam inventore, necessitatibus beatae ut atque officiis quod odio odit cum id laudantium! Deserunt expedita delectus voluptates reprehenderit in quod perferendis asperiores?</p>
        </div>
        <div class="content2">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam inventore, necessitatibus beatae ut atque officiis quod odio odit cum id laudantium! Deserunt expedita delectus voluptates reprehenderit in quod perferendis asperiores?</p>
        </div>
        <div class="content3">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam inventore, necessitatibus beatae ut atque officiis quod odio odit cum id laudantium! Deserunt expedita delectus voluptates reprehenderit in quod perferendis asperiores?</p>
        </div>
        <div class="content4">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam inventore, necessitatibus beatae ut atque officiis quod odio odit cum id laudantium! Deserunt expedita delectus voluptates reprehenderit in quod perferendis asperiores?</p>
        </div>
        <div class="content5">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam inventore, necessitatibus beatae ut atque officiis quod odio odit cum id laudantium! Deserunt expedita delectus voluptates reprehenderit in quod perferendis asperiores?</p>
        </div>
    </div>
<script src="script.js"></script>
</body>
</html>

<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family: 'Roboto Slab', serif;
        background:whitesmoke;
    }
    .container{
        width:100%;
        height:fit-content;
        display:flex;
        flex-wrap:wrap;
    }
    .nav-section{
        width:100%;
        height:fit-content;
        display:flex;
        flex-wrap:wrap;
        background:white;
        box-shadow: 0 4px 4px rgba(0,0,0,0.1);
    }
    .logo{
        width:18%;
        height:100px;
        justify-content:right;
        padding:0 0 0 7%;
    }
    .logo img{
        width:100%;
        height:100%;
        object-fit:contain;
    }
    .short-info{
        width:82%;
        display: flex;
        flex-wrap:wrap;
        
    }
    .caption{
        width:100%;
        height:55px;
        padding:20px 10px 17px 0;
        display:flex;
        flex-wrap:wrap;
        justify-content:space-around;
        border-bottom:0.5px solid #D4D3D5;
    }
    .caption .motto{
        width:40%;
        height:100%;
    }
    .caption .motto h3{
        font-family: 'Playfair Display', serif;
        letter-spacing:2px;
        color:#4D5EB2;
        font-weight:600px;
        font-size:18px;
    }

    .caption .search-box{
        width:40%;
        display:flex;
        flex-wrap:wrap;
        padding:0;
    }
    .caption .search-box .search-form{
        width:100%;
    }
    .caption .search-box a{
        width:10%;
        font-size:20px;
        text-align:center;
        cursor: pointer;
    }    
    .caption .search-box .input {
        background: transparent;
        border: none;
        outline: none;
        width:90%;
        font-weight: 500;
        font-size: 16px;
        transition: 0.8s;
        border-bottom:0.5px solid #E2C6DA;
    }
    .caption .search-box .btn .fas {
        color:#50A3E6;
    }
    .caption .empty{
        width:20%;
        visibility: hidden;
    }
    .nav-bar{
        width:100%;
        height:45px;
        padding:0;
    }
    .nav-bar .menu{
        display:none;
    }
    .nav-bar .nav-items{
        width:100%;
        height:100%;
        display:flex;
        flex-wrap:wrap;
        justify:space-around;
    }
    .nav-bar .nav-items label{
        width:20%;
        height:100%;
        border:0.5px solid grey;
    }
    .content1, .content2, .content3, .content4, .content5{
        width:100%;
        height:200px;
        padding:50px;
        display:none;
    }
    .content1{

        border:2px solid red;
    } 
    .content2{
        border:2px solid blue;
    } 
    .content3{
        border:2px solid black;
    } 
    .content4{
        border:2px solid yellow;
    }
    .content5{
        border:2px solid grey;
    }
</style>