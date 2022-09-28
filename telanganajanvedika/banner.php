<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <div class="banner-container">
        <div class="left-banner">
            <div class="image-banner">
                <img src="home1-img.png" alt="" class="home__img">
            </div>
            
            <!-- <div class="small-text">
                <h4>The Labu “Reiza”</h4>
                <span>The Living Pumpkin</span>
            </div> -->

        </div>
        <div class="right-banner">
            <div class="content">
                <h3 class="sub-title"># BRIDGE BETWEEN ACADEMIA AND THE PUBLIC</h3>
                <h1 class="title"><span>THE</span><br> TELANGANA JANA VEDIKA</h1>
                <p class="description">TJV IS A MULTI DISCIPLINARY PUBLIC POLICY FORUM WORKING AT THE INTERSECTION OF POLITICAL,SOCIAL, ECONOMIC AND ENVIRONMENTAL THEORIES THROUGH THE LENS OF MARX, GANDHI AND AMBEDKAR</p>
            </div>
            <div class="banner-buttons">
                <div class="button2"><a href="#">Join Our Network &nbsp;  <i class="fa-solid fa-arrow-right-long"></i></a></div>
                <div class="button1"><a href="#">View More &nbsp; <i class="fa-solid fa-arrow-right-long"></i></a></div>
            </div>
            

        </div>
    </div>
   
  </div>
</body>
</html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;900&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing: border-box;
}
body{
    background:linear-gradient(90deg,  100%)
}
a{
    text-decoration: none;
}
.banner-container{
    font-family: 'Noto Sans', sans-serif;
    background:linear-gradient(136deg,  100%);
    display: flex;
    flex-wrap:wrap;
    width:100%;
    height:85vh;
    /*border:2px solid red;*/
    justify-content: center;
}
.left-banner{
    width:35%;
    height:85%;
    margin:auto ;
    margin-bottom:15px;
    margin-right:15px;
    display: flex;
    flex-wrap:wrap;
    justify-content: center;
    animation: transistionup 1s;
    padding:20px 0;
}
.home__img{
    height:350px;
    justify-self: center;
  }
.right-banner{
    width:40%;
    height:85%;
    margin:auto ;
    margin-bottom:15px;
    margin-left:15px;
    display: flex;
    flex-wrap:wrap;
    padding:10px 0;
    animation: transistionup 3s;
}
@keyframes transistionup{
    from{
        opacity: 0;
        transform: translateY(-20px);
    }
    to{
        opacity: 1;
        transform: translateY(0);
    }
    
}
.content{
    width:100%;
    height:60%;
    margin:auto;
    padding:30px 10px 0 10px;
}
.sub-title{
    font-size:13px;
    font-family:'Roboto Slab',serif;
    letter-spacing:1px;
}
.title{
    margin:10px 0;
    font-size:25px;
    font-weight:bold;
    letter-spacing:1px;
    font-family:'Noto Sans', sans-serif;
    font-weight:900;
}
.title span{
    font-size:16px;
    font-weight:bold;
}
.description{
    margin:30px 0;
}
.banner-buttons{
    width:100%;
    height:20%;
    margin:5px auto;
    justify-content: space-between;
    display: flex;
    flex-wrap: wrap;
    padding:0 15px;
}
.button1{
    width:180px;
    height:50px;
    border:2px solid red;
    text-align:center;
    border-radius:50px;
    padding:10px;
    cursor: pointer;
}
.button1 a{
    width:100%;
    height:200px;
    transition: .3s;
    font-weight:bold;
}
.button2{
    width:200px;
    height:50px;
    border:2px solid red;
    text-align:center;
    border-radius:50px;
    padding:10px;
    cursor: pointer;
}
.button2 a{
    width:100%;
    height:200px;
    transition: .3s;
    font-weight:bold;
}
@media screen and (max-width: 992px){
    .banner-container{
       height:fit-content;
    }
    .left-banner{
        width:100%;
        padding:0;
       
    }
    .home__img{
        height:300px;
        justify-self: center;
      }
    .right-banner{
        width:100%;
    }
    .content{
        width:100%;
        padding:0 0 0 5px;
        margin:0;
    }
    .description{
        margin:5px 0;
    }
    .banner-buttons{
        justify-content:left;
        margin:15px 0;
        padding:0;
    }
    .button1{
        width:150px;
        height:45px;  
        margin:0 0 0 10px;
        padding:9px 0;

    }
    .button1 a{
        margin-bottom:12px;
    }
    .button2{
       display: none;
    }
}
</style>