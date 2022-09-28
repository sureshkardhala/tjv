<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital@1&display=swap" rel="stylesheet">
<div class="single-container">
            <div class="single-left">
                <div class="left-items">
                    <a href="#" class="top-left-items head">Events</a>
                    <a href="#" class="top-left-items">Meetings  &nbsp;<i class="fa-solid fa-angle-right"></i></a>
                    <a href="#" class="top-left-items">Webinars &nbsp;<i class="fa-solid fa-angle-right"></i></a>
                    <a href="#" class="top-left-items">Seminars &nbsp;<i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
            <div class="single-right">
                <div class="single-top">
                        <a href="#" class="top-items">Home &nbsp;<i class="fa-solid fa-angle-right"></i></a>
                        <a href="#" class="top-items">Meetings &nbsp;<i class="fa-solid fa-angle-right"></i></a>
                        <a href="#" class="top-items">Topic &nbsp;<i class="fa-solid fa-angle-right"></i></a>
                </div>
                <div class="single-item">
                    <div class="single-img-container">
                        <img src="spimg.jpg" alt="">
                    </div>
                    <h2 class="main-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae itaque, vero, distinctio iste</h2>
                    <p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam sint ab minima aliquid voluptatibus quaerat, ut iure debitis autem, maiores facere libero facilis tempore modi nulla, expedita optio animi neque! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam magnam aliquam modi in adipisci accusantium recusandae distinctio. Suscipit qui autem odio, minus, voluptas corporis exercitationem facere labore nostrum molestias quaerat? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque voluptate dicta facilis earum omnis a adipisci, enim eius nisi, assumenda itaque non, eum corporis doloribus quia necessitatibus suscipit ex quaerat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, reprehenderit! Asperiores nihil quibusdam voluptatem repellendus voluptas pariatur id! Commodi explicabo ullam iusto vitae in mollitia repellendus voluptatem eius nobis harum?</p>
                    <h2 class="main-title">Date & Timings: <span>hhhhhhhhhhhhhhhh</span></h2>
                    <div class="speaker">
                        <div class="speaker-image-container">
                            <img src="spimg.jpg" alt="">
                        </div>
                        <div class="short-info">
                        <h2 class="speaker-title">Dr Suresh Kardhala</h2>
                        <p class="speaker-shortinfo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum animi corrupti at, quaerat esse nisi tempora, commodi a distinctio excepturi, quas eum nobis! Modi temporibus ratione possimus mollitia vel odit!</p>
                        </div>
                    </div>
                </div>
                <div class="buttons">
                            <div class="zoom btn123"><a href="#" >Zoom</a></div>
                            <div class="youtube btn123"><a href="#" >Youtube</a></div>
                            <div class="facebook btn123"><a href="#" >Facebook</a></div>
                </div>
            </div>
        </div>

        <style>
        .single-container{
            width:100%;
            height:fit-content;
            padding:25px;
            display:flex;
            flex-wrap:wrap;
            justify-content:center;
            margin-top:60px;
        }
        .single-left{
            width:25%;
            height:100%;
            margin:auto;
            margin-top:0;
            box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px;
            padding:30px;
            text-transform:uppercase;
            padding-top:10px;
        }
        .left-items{
            width:80%;
            margin:auto;
            display:flex;
            flex-wrap:wrap;
            justify-content:space-around;
        } 
        .top-left-items{
            width:100%;
            margin:10px;
            font-family: 'Noto Sans', sans-serif;
            color: #183b78;
            text-transform: uppercase;
            cursor: pointer;
            font-size:12px;
            font-weight:900;
            letter-spacing:2px;
        }
        .head{
            font-size:16px;
            color:#000;
            font-family: 'Playfair Display SC', serif;
            font-size:18px;
        }
        .single-right{
            width:70%;
            height:fit-content;
            display:flex;
            flex-wrap:wrap;
            padding:0 30px;
            margin:auto;
            box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px;
        }
        .single-right .single-top{
            width:100%;
            display:flex;
            flex-wrap:wrap;
            padding:10px;
        }
        .single-right .top-items{
            margin:10px;
            font-family: 'Noto Sans', sans-serif;
            color: #183b78;
            text-transform: uppercase;
            cursor: pointer;
            font-size:11px;
            font-weight:900;
            letter-spacing:2px;

        }
        .single-right .single-item{
            width:100%;
            display:flex;
            flex-wrap:wrap;
        }
        .single-right .single-img-container{
            width:100%;
            height:450px;
            margin:auto;
            margin-left:0;
        }
        .single-right .single-img-container img{
            width:100%;
            height:100%;
            object-fit:contain;
        }
        .single-right  .main-title{
            font-family: 'Playfair Display SC', serif;
            font-size:18px;
            margin:auto;
            margin-top:30px;
            width:95%;
        }
        .single-right  .main-title span{
            font-family: 'Noto Sans', sans-serif;
            font-weight:400;
            font-size:15px;
        }
        .single-right  .single-item .description{
            width:95%;
            height:fit-content;
            font-family: 'Noto Sans', sans-serif;
            margin:20px auto;
        }
        .single-right  .speaker{
            width:80%;
            margin:auto;
            margin-top:50px;
            display:flex;
            flex-wrap:wrap;
            justify-content:space-around;
            padding:5px;
        }
        
        .single-right  .speaker-image-container{
            width:30%;
            height:100%;
        }
        .single-right  .speaker-image-container img{
            max-width:100%;
            max-height:100%;
            object-fit:contain;
        }
        .single-right  .short-info{
            width:65%;
            display:flex;
            flex-wrap:wrap;
            justify-content:space-around;
            margin:0;
            padding:0;
            height:fit-content;
        }
        .single-right .speaker-title{
            width:100%;
            height:fit-content;
            text-transform:uppercase;
            font-family: 'Playfair Display SC', serif;
            font-size:18px;
            font-weight:900;
            letter-spacing:.5px;
        }
        .single-right .speaker-shortinfo{
            width:100%;
            height:fit-content;
            margin-top:7px;
            font-family: 'Noto Sans', sans-serif;
            font-size:15px;
        }
        .single-right .buttons{
            width:100%;
            margin:30px 0;
            height:fit-content;
            display:flex;
            flex-wrap:wrap;
            padding:10px;
        }
        .single-right .btn123{
            width:100px;
            height:40px;
            padding:10px 5px;
            margin-left:25px;
            font-family: 'Noto Sans', sans-serif;
            font-size:13px;
            border-radius:10px;
            text-transform:uppercase;
            text-align:center;
            
        }
        .single-right .btn123 a{
            color:#eee;
        }
        .youtube{
            background:#CD0B0B;
        }
        .zoom{
            margin:0;
            background:#5559D6;
        }
        .facebook{
            background:#334B76;
        }
        @media screen and (max-width: 992px){
            .single-container{
            width:100%;
            height:fit-content;
            padding:5px;
            display:flex;
            flex-wrap:wrap;
            justify-content:center;
            margin-top:60px;
            flex-direction:column-reverse;
        }
        .single-left{
            width:100%;
            height:100%;
            margin:auto;
            margin-top:0;
            box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px;
            padding:30px;
            text-transform:uppercase;
            text-align:center;
            padding:10px;
        }
        .left-items{
            width:100%;
            margin:auto;
            display:flex;
            flex-wrap:wrap;
            justify-content:space-around;
        } 
        .top-left-items{
            width:100%;
            margin:10px 0;
            font-family: 'Noto Sans', sans-serif;
            color: #183b78;
            text-transform: uppercase;
            cursor: pointer;
            font-size:14px;
            font-weight:900;
            letter-spacing:2px;
        }
        .head{
            font-size:16px;
            color:#000;
            font-family: 'Playfair Display SC', serif;
            font-size:18px;
        }
        
        .single-right{
            width:100%;
            height:fit-content;
            display:flex;
            flex-wrap:wrap;
            padding:5px;
            margin:0;
            box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px;
        }
        .single-right .single-top{
            width:100%;
            display:flex;
            flex-wrap:wrap;
            padding:0px;
        }
        .single-right .top-items{
            margin:0px;
            font-family: 'Noto Sans', sans-serif;
            color: #183b78;
            text-transform: uppercase;
            cursor: pointer;
            font-size:11px;
            font-weight:900;
            letter-spacing:2px;
            margin-left:5px;

        }
        .single-right  .single-item{
            width:100%;
            display:flex;
            flex-wrap:wrap;
            padding:5px;
            margin-top:15px;
        }
        .single-right .single-img-container{
            width:100%;
            height:fit-content;
        }
        .single-right .single-img-container img{
            width:100%;
            height:100%;
            object-fit:contain;
        }
        .single-right .main-title{
            font-family: 'Playfair Display SC', serif;
            font-size:18px;
            margin-top:10px;
            width:100%;
        }
        .single-right .single-item .description{
            width:100%;
            height:fit-content;
            font-family: 'Noto Sans', sans-serif;
            margin:15px 0;
        }
        .single-right  .speaker{
            width:100%;
            margin:auto;
            margin-top:50px;
            display:flex;
            flex-wrap:wrap;
            justify-content:space-around;
            padding:15px;
        }
        
        .single-right .speaker-image-container{
            width:80%;
            height:100%;
            margin:auto;
            justify-content:center;
        }
        .single-right .speaker-image-container img{
            max-width:100%;
            max-height:100%;
            object-fit:contain;
        }
        .single-right .short-info{
            width:100%;
            display:flex;
            flex-wrap:wrap;
            justify-content:space-around;
            margin:0;
            padding:0;
            height:fit-content;
            margin:15px 0;
        }
        .single-right .speaker-title{
            width:100%;
            height:fit-content;
            text-transform:uppercase;
            font-family: 'Playfair Display SC', serif;
            font-size:18px;
            font-weight:900;
            letter-spacing:.5px;
            text-align:center;
        }
        .single-right .speaker-shortinfo{
            width:90%;
            height:fit-content;
            font-family: 'Noto Sans', sans-serif;
            font-size:16px;
            margin:10px auto;
        }
        .single-right .buttons{
            width:100%;
            margin:0;
            height:fit-content;
            display:flex;
            flex-wrap:wrap;
            padding:10px;
        }
        .single-right .btn{
            width:100%;
            height:40px;
            padding:8px 5px;
            margin-left:10px;
            border:1px solid red;
            font-family: 'Noto Sans', sans-serif;
            font-size:13px;
            border-radius:10px;
            text-transform:uppercase;
            text-align:center;
        }
        .zoom{
            width:60%;
        }
        }
    </style>