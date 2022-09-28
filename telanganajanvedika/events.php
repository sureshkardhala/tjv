<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins&family=Roboto&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php include('nav1.php');?>
    <div class="container">
        <div class="single-container">
            <p class="title">నీరు-నిత్యజీవనాధారం Water - Elixir of Life</p>
            <p class="shortinfo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit a vero nemo facere aperiam autem voluptate maiores odio? Quas repudiandae asperiores illum ratione iste? Aut dignissimos exercitationem quam! Modi, beatae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore voluptatibus fugiat neque doloremque aut consectetur eos.</p>
            <div class="single-image">
                    <img src="spimg.jpg" alt="">
            </div>
            <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores earum ab in quos voluptatem minima laborum totam adipisci eius ipsum amet reiciendis consectetur voluptate nostrum debitis vero, architecto incidunt iure!Loremlore Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore omnis maiores a, debitis beatae iste quaerat id nulla molestiae quos nam expedita explicabo sint, vel eveniet commodi aliquid. Cupiditate, nesciunt! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi laboriosam repudiandae deserunt at culpa earum vel ut beatae esse unde est nemo, ducimus hic voluptatum in itaque saepe facilis nulla. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente voluptatem blanditiis, inventore atque aut nobis veniam consequuntur pariatur voluptatum odit excepturi aliquid corrupti fuga, repellendus ducimus minima suscipit ex? Quibusdam.</div>
       
            <div class="speaker">
                <p class="speaker-title1">About Speaker</p>
                <div class="speaker-image">
                    <img src="spimg.jpg" alt="">
                </div>
                <div class="speaker-text-container">
                    <p class="speaker-title"><span>Suresh Kardhala</span>  - BTech in CSE</p>
                    <p class="speaker-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, eveniet quam. Rem voluptatibus officia placeat dolores optio. Sed velit soluta earum, neque sunt est atque commodi magni eius assumenda minus.</p>
                </div>
            </div>
            <div class="meeting-details">
                <p class="title2">Meeting Details</p>
                <ul>
                    <li><p><i class="fa-solid fa-calendar-days"></i>&nbsp;<span>Date & Timings:&nbsp;&nbsp;</span>May 8, 2022 05:30 PM</p></li>
                    <li><p><span>Meeting Id:&nbsp;&nbsp;</span>2023045666</p></li>
                    <li><p><span>Password:&nbsp;&nbsp;</span>bfjfhfhhfhfh</p></li>
                </ul>
            </div>
            <div class="div-buttons">
                <p class="title3">Join Here <i class="fa-solid fa-circle-arrow-down"></i></p>
                <div class="join-buttons">
                    <p class="join-button 1"><a href="#">Join Zoom Meeting</a></p>
                    <p class="join-button 2"><a href="#">Watch On Youtube</a></p>
                    <p class="join-button 3"><a href="#">Join Facebook Live</a></p>
                </div>
            </div>

        </div>
    </div>
    <?php include('footer.php');?>
</body>
</html>
<style>
    
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    body{
        background:linear-gradient(90deg,  100%)
    }
    .container{
        width:100%;
        height:fit-content;
        font-family: 'Roboto Slab', serif;
        margin:50px auto;
    }
    .single-container{
        width:70%;
        height:fit-content;
        border:2px solid red;
        margin:20vh auto;
        padding:50px;
    }
    .title{
        margin:20px;
        margin-left:0;
        font-weight:600;
        font-size:18px;
        font-family:'Poppins', sans-serif;
    }
    .shortinfo{
        margin:10px;
        margin-left:0;
        font-size:14.5px;
    }
    .single-image{
        width:90%;
        margin:20px auto;
        max-height:500px;
        border:2px solid red;
    }
    .single-image img{
        width:100%;
        object-fit:contain;
        margin:auto;
    }
    .speaker{
        width:45%;
        height:fit-content;
        margin:30px auto;
        padding:5px;
        border:2px solid red;
    }
    .speaker-title1{
        text-align:center;
        font-family:'Poppins', sans-serif;
        font-weight:600;
        margin:10px 0;
    }
    .speaker-image{
        width:60%;
        margin:5px auto;
    }
    .speaker-image img{
        max-width:100%;
        object-fit:contain;
    }
    .speaker-text-container{
        width:80%;
        margin:5px auto;
        border:2px solid red;
        padding:5px;
        font-size:14.5px;
    }
    .speaker-title{
        margin:10px 0 10px 0;
        font-size:11px;
        font-weight:600;
    }
    .speaker-title span{
        font-family:'Poppins', sans-serif;
        font-weight:600;
        font-size:15px;
    }
    .description{
        width:90%;
        margin:20px auto;
        padding:10px;
    }
    .meeting-details{
        width:90%;
        border:2px solid red;
        margin:15px auto;
        padding:15px;
    }
    ul{
        margin:20px;
    }
    li{
        list-style: none;
        margin:10px 0;
        font-family: 'Roboto Slab', serif;
        font-size:15px;
    }

    li p span{
        font-weight:600;
        font-family:'Poppins', sans-serif;
        font-size:16px;
    }
    li p i{
        font-size:20px;
    }
    .title2{
        font-weight:600;
        font-family:'Poppins', sans-serif;
        margin:10px 0 10px 0;
    }
    .title3{
        font-weight:600;
        font-family:'Poppins', sans-serif;
        margin:10px 0 10px 0;
    }
    .title3 i{
        font-size:20px;
        transition: .5s ease-in-out;
    }
    .div-buttons{
        width:90%;
        margin:25px auto;
    }
    .join-buttons{
        width:100%;
        border:2px solid red;
        margin:15px auto;
        padding:15px;
        display: flex;
        flex-wrap:wrap;
    }
    .join-button{
        width:180px;
        height:50px;
        border:2px solid red;
        border-radius:20px;
        text-align:center;
        margin-left:30px;
        padding:10px;
    }
    a{
        text-decoration:none;
    }
    @media screen and (max-width: 992px){
        .single-container{
        width:100%;
        margin:0;
        padding:20px;
    }
    .title{
        margin:20px;
        margin-left:0;
        font-weight:600;
        font-size:18px;
        font-family:'Poppins', sans-serif;
    }
    .single-image{
        width:100%;
    }
    .speaker{
        width:100%;
       
    }
    .speaker-image{
        width:70%;
       
    }
    .speaker-text-container{
        width:90%;
    }
    .meeting-details{
        width:100%;
        padding:10px;
    }
    .join-buttons{
        width:100%;
        border:2px solid red;
        margin:15px auto;
        padding:15px;
        display: flex;
        flex-wrap:wrap;
    }
    .join-button{
        width:180px;
        height:50px;
        border:2px solid red;
        border-radius:20px;
        text-align:center;
        padding:10px;
        margin:auto;
        margin-bottom:20px;
    }
    .title3, .title2{
        text-align:center;
    }

    }
</style>