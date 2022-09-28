<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital@1&display=swap" rel="stylesheet">
<div class="single-container">
            <div class="single-left">
                <div class="left-items">
                    <a href="#" class="top-left-items head">Blogs & Posts</a>
                    <a href="#" class="top-left-items">Item1  &nbsp;<i class="fa-solid fa-angle-right"></i></a>
                    <a href="#" class="top-left-items">Item1 &nbsp;<i class="fa-solid fa-angle-right"></i></a>
                    <a href="#" class="top-left-items">Item1 &nbsp;<i class="fa-solid fa-angle-right"></i></a>
                    <a href="#" class="top-left-items">Item1 &nbsp;<i class="fa-solid fa-angle-right"></i></a>
                    <a href="#" class="top-left-items">Item1 &nbsp;<i class="fa-solid fa-angle-right"></i></a>
                    <a href="#" class="top-left-items">Item1 &nbsp;<i class="fa-solid fa-angle-right"></i></a>
                    <a href="#" class="top-left-items">Item1 &nbsp;<i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
            <div class="single-right">
                <div class="single-top">
                        <a href="#" class="top-items">Home &nbsp;<i class="fa-solid fa-angle-right"></i></a>
                        <a href="#" class="top-items">Blogs & Posts &nbsp;<i class="fa-solid fa-angle-right"></i></a>
                        <a href="#" class="top-items">Topic &nbsp;<i class="fa-solid fa-angle-right"></i></a>
                </div>
                <div class="single-item">
                    <div class="single-img-container">
                        <img src="spimg.jpg" alt="">
                    </div>
                    <h2 class="main-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae itaque, vero, distinctio iste</h2>
                    <p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam sint ab minima aliquid voluptatibus quaerat, ut iure debitis autem, maiores facere libero facilis tempore modi nulla, expedita optio animi neque! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam magnam aliquam modi in adipisci accusantium recusandae distinctio. Suscipit qui autem odio, minus, voluptas corporis exercitationem facere labore nostrum molestias quaerat? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque voluptate dicta facilis earum omnis a adipisci, enim eius nisi, assumenda itaque non, eum corporis doloribus quia necessitatibus suscipit ex quaerat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, reprehenderit! Asperiores nihil quibusdam voluptatem repellendus voluptas pariatur id! Commodi explicabo ullam iusto vitae in mollitia repellendus voluptatem eius nobis harum?</p>
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
        .single-top{
            width:100%;
            display:flex;
            flex-wrap:wrap;
            padding:10px;
        }
        .top-items{
            margin:10px;
            font-family: 'Noto Sans', sans-serif;
            color: #183b78;
            text-transform: uppercase;
            cursor: pointer;
            font-size:11px;
            font-weight:900;
            letter-spacing:2px;

        }
        .single-item{
            width:100%;
            display:flex;
            flex-wrap:wrap;
        }
        .single-img-container{
            width:100%;
            height:450px;
            margin:auto;
            margin-left:0;
        }
        .single-img-container img{
            width:100%;
            height:100%;
            object-fit:contain;
        }
        .main-title{
            font-family: 'Playfair Display SC', serif;
            font-size:18px;
            margin:auto;
            margin-top:30px;
            width:95%;
        }
        .single-item .description{
            width:95%;
            height:fit-content;
            font-family: 'Noto Sans', sans-serif;
            margin:20px auto;
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
        .single-top{
            width:100%;
            display:flex;
            flex-wrap:wrap;
            padding:0px;
        }
        .top-items{
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
        .single-item{
            width:100%;
            display:flex;
            flex-wrap:wrap;
            padding:5px;
            margin-top:15px;
        }
        .single-img-container{
            width:100%;
            height:fit-content;
        }
        .single-img-container img{
            width:100%;
            height:100%;
            object-fit:contain;
        }
        .main-title{
            font-family: 'Playfair Display SC', serif;
            font-size:18px;
            margin-top:10px;
            width:100%;
        }
        .single-item .description{
            width:100%;
            height:fit-content;
            font-family: 'Noto Sans', sans-serif;
            margin:15px 0;
        }
        }
    </style>