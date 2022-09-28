<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Telangana Jana Vedika</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Playfair+Display+SC&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php include('nav.php');?>
        <div class="search-item-container">
            <div class="search-container">
                <div class="search-bar-container">
                    <div class="wrapper">
                        <form class="search-input">
                            <a href="" target="_blank" hidden></a>
                            <input type="text" placeholder="Type to search.." name="search">
                            <button class="icon" type="submit" class="btn" value="search"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="search-list-sub-container">
                    <div class="search-list-items">
                        <div class="search-list-img-container">
                                <img src="spimg.jpg" alt="">
                        </div>
                        <div class="search-list-text-container">
                            <h2 class="search-list-title"><a href="#">2నీరు-నిత్యజీవనాధారం Water - Elixir of Life Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis harum suscipit odit nobis tempore neque repellat ullam minus labore a.</a></h2>
                            <p><a href="#" class="viewmore">View more</a></p>
                            <p class="updated_on">April 17 2022 05:30 PM</p>
                        </div>
                    </div>
                    <div class="search-list-items">
                        <div class="search-list-img-container">
                                <img src="spimg.jpg" alt="">
                        </div>
                        <div class="search-list-text-container">
                            <h2 class="search-list-title"><a href="#">9నీరు-నిత్యజీవనాధారం Water - Elixir of Life Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis harum suscipit odit nobis tempore neque repellat ullam minus labore a.</a></h2>
                            <p><a href="#" class="viewmore">View more</a></p>
                            <p class="updated_on">April 17 2022 05:30 PM</p>
                        </div>
                    </div>
                    <div class="search-list-items">
                        <div class="search-list-img-container">
                                <img src="spimg.jpg" alt="">
                        </div>
                        <div class="search-list-text-container">
                            <h2 class="search-list-title"><a href="#">1నీరు-నిత్యజీవనాధారం Water - Elixir of Life Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis harum suscipit odit nobis tempore neque repellat ullam minus labore a.</a></h2>
                            <p><a href="#" class="viewmore">View more</a></p>
                            <p class="updated_on">April 17 2022 05:30 PM</p>
                        </div>
                    </div>

                </div>
                <div class="search-list-sub-container">
                    <h2 class="title">No Results Found</h2>
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
        .search-item-cotainer{
            width:100%;
            height:fit-content;
        }
        .search-container{
            width:70%;
            height:fit-content;
            margin:10px auto;
        }
        .search-bar-container{
            width:100%;
            height:fit-content;
            padding:5px;
        }
        .search-list-container{
            width:100%;
            height:fit-content;
            padding:10px;

        }
        .footer-items{
            width:100%;
            height:fit-content;
        }
    .search-list-sub-container{
        width:100%;
        height:fit-content;
        margin:40px 0;
        display:flex;
        flex-wrap:wrap;
        justify-content:space-around;
        font-family: 'Playfair Display SC', serif;
    }
    .search-list-sub-container .title{
        font-family: 'Playfair Display SC', serif;
        text-align:center;
    }
    .wrapper{
        width:100%;
        height:fit-content;
        justify-content:space-around;
        margin:70px auto 50px auto;
    }
    .search-input{
        width:90%;
        height:100%;
        display: flex;
        flex-wrap:wrap;
        justify-content: center;
        margin:auto;
    }
    .search-input input{
        width:100%;
        height:45px;
        border-radius:10px;
        padding:0 0 0 10px;
        border:none;
        font-family: Noto Sans,sans-serif;
        border:none;
    }
    .search-input button{
        width:10%;
        height:45px;
        border-radius:5px;
        margin-left:-10%;
        background:#4984b9;
        color:white;
        border:1px solid white;
    }
    .search-list-items{
        width:30%;
        height:fit-content;
        display:flex;
        flex-wrap:wrap;
        justify-content:space-around;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        margin-top:20px;
    }
    .search-list-img-container{
        width:100%;
        height:180px;
        overflow:hidden;
        justify-content:center;
        padding:10px 10px 0 10px;
        padding-bottom:0px;
    }
    .search-list-img-container img{
        max-width:100%;
        max-height:100%;
        object-fit:contain;
        justify-content:center;
    }
    .search-list-text-container{
        padding:0px 10px;
        width:100%;
        height:fit-content;
    }
    .search-list-text-container .search-list-title{
        font-size:17px;
    }
    .search-list-text-container .search-list-title a{
        color:black;
    }
    .search-list-text-container a{
        color:black;
    }
    .search-list-text-container p{
        margin:10px 0 5px 0;
        font-size:14px;
        font-family: Noto Sans,sans-serif;
        font-weight:600;
    }
    .search-list-text-container .meeting{
        font-weight:400;
        font-size:14px;
    }
    .search-list-text-container .updated_on{
        font-size:10px;
        font-weight:400;
        margin-top:15px;
    }
    @media screen and (max-width: 992px){
        .search-container{
            width:100%;
        }
        .search-list-container{
        width:100%;
        margin:0;
    }
    .search-list-header .viewall{
       margin-top:10px;
    }
    .search-list-sub-container{
        padding:15px;
        justify-content:space-around;
        margin:0;
    }
    .search-list-items{
        width:100%;
        margin-top:25px;
    }
    .search-list-img-container{
        width:100%;
        height:210px;
        overflow:hidden;
        justify-content:space-around;
        padding:10px;
    }
    .search-list-img-container img{
        max-width:100%;
        max-height:100%;
        object-fit:contain;
        justify-content:center;
        margin:auto;
    }
    .search-list-text-container{
        padding:10px;
        width:100%;
        height:fit-content;
        margin:0;
    }
    .search-list-text-container .search-list-title{
        font-size:17px;
    }
    .search-list-text-container .search-list-title a{
        color:black;
    }
    .search-list-text-container a{
        color:black;
    }
    .search-list-text-container p{
        margin:10px 0 5px 0;
        font-size:14px;
        font-family: Noto Sans,sans-serif;
        font-weight:600;
    }
    .search-list-text-container .meeting{
        font-weight:400;
        font-size:15px;
    }
    .search-list-text-container .updated_on{
        font-size:10px;
        font-weight:400;
        margin-top:15px;
    }
    .search-input button{
        width:20%;
        margin-left:-20%;
    }
    }
    </style>

</body>
</html>