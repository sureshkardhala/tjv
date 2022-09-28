<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .publication-container{
        width:80%;
        height:fit-content;
        display:flex;
        flex-wrap:wrap;
        margin:auto;
        margin-top:20px;
        font-family: 'Playfair Display SC', serif;
    }
    .publication-header{
        width:100%;
        height:fit-content;
        padding:15px;
        display:flex;
        flex-wrap:wrap;
        text-align:center;
    }
    .publication-header a{
        color:black;
    }
    .publication-header .publication-header-title{
        width:100%;
        text-align:center;
    }
    .publication-header .viewall{
        text-align:right;
        width:100%;
        font-size:14px;
    }
    .publication-sub-container{
        width:100%;
        height:fit-content;
        display:flex;
        flex-wrap:wrap;
        margin:auto;
        margin-top:20px;
    }
    .publication-item{
        width:100%;
        height:fit-content;
        padding:15px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
    }
    .publication-items{
        width:90%;
        height:fit-content;
        display:flex;
        flex-wrap:wrap;
        margin:auto;
       
    }
    .publication-img-container{
        width:39%;
        height:250px;
        overflow:hidden;
        justify-content:center;
    }
    .publication-img-container img{
        max-width:100%;
        max-height:100%;
        object-fit:contain;
        justify-content:center;
    }
    .publication-text-container{
        margin-left:10px;
        padding:0 5px 0 0;
        width:60%;
        height:fit-content;
    }
    .publication-text-container .publication-title{
        font-size:17px;
    }
    .publication-text-container .publication-title a{
        color:black;
    }
    .publication-text-container a{
        color:black;
    }
    .publication-text-container p{
        margin:10px 0 5px 0;
        font-size:14px;
        font-family: Noto Sans,sans-serif;
    }
    .publication-text-container .shortinfo{
        font-size:16px;
    }
    .publication-text-container .viewmore a{
        font-weight:600;
    }
    .publication-text-container .uploaded_on{
        font-size:10px;
        margin-top:30px;
    }
    @media screen and (max-width: 992px){
        .publication-container{
        width:100%;
        padding:15px;
       
    }
    .publication-header .viewall{
        margin-top:10px;
    }
    .publication-item{
        margin:10px 0;
    }
    .publication-items{
        width:100%;
        
    }
    .publication-img-container{
        width:100%;
        height:200px;
        margin:0;
    }
    .publication-img-container img{
        max-width:100%;
        max-height:100%;
        object-fit:contain;
        justify-content:center;
    }
    .publication-text-container{
        margin:0;
        padding:5px;
        width:100%;
        height:fit-content;
    }
    .publication-text-container .publication-title{
        font-size:17px;
    }
    .publication-text-container .publication-title a{
        color:black;
    }
    .publication-text-container a{
        color:black;
    }
    .publication-text-container p{
        margin:10px 0 5px 0;
        font-size:14px;
        font-family: Noto Sans,sans-serif;
    }
    .publication-text-container .shortinfo{
        font-size:16px;
    }
    .publication-text-container .viewmore a{
        font-weight:600;
    }
    .publication-text-container .uploaded_on{
        font-size:10px;
        margin-top:30px;
    }
    .slick-prev:before {
color: #183b78 !important;
display:none !important;
/* background-color: #eee; */
}
.slick-next:before {
color: #183b78 !important;
display:none !important;
/* background-color: #eee; */
}
    }
</style>
<div class="publication-container">
    <div class="publication-header">
        <h2 class="publication-header-title"><a href="#"> Publications</a></h2>
        <a href="#" class="viewall">View All</a>
    </div>
    <div class="publication-sub-container slider1">
        <div class="publication-item">
            <div class="publication-items">
                <div class="publication-img-container">
                    <img src="spimg.jpg" alt="">
                </div>
                <div class="publication-text-container">
                    <h2 class="publication-title"><a href="#">6నీరు-నిత్యజీవనాధారం Water - Elixir of Life Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis harum suscipit odit nobis tempore neque repellat ullam minus labore a.</a></h2>
                    <p class="shortinfo">A talk on, the importance and intricate necessity of water in the daily lives and its overall role in sustainable development. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa autem, delectus nostrum iure ab illo non tenetur quasi ex omnis quaerat veritatis dolorem repellat sint doloribus itaque blanditiis reiciendis tempora.</p>
                    <p class="viewmore"><a href="#">ViewMore</a></p>
                    <p class="uploaded_on">April 17 2022 05:30 PM</p>
                </div>
            </div>
        </div>
        <div class="publication-item">
            <div class="publication-items">
                <div class="publication-img-container">
                    <img src="spimg.jpg" alt="">
                </div>
                <div class="publication-text-container">
                    <h2 class="publication-title"><a href="#">6నీరు-నిత్యజీవనాధారం Water - Elixir of Life Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis harum suscipit odit nobis tempore neque repellat ullam minus labore a.</a></h2>
                    <p class="shortinfo">A talk on, the importance and intricate necessity of water in the daily lives and its overall role in sustainable development. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa autem, delectus nostrum iure ab illo non tenetur quasi ex omnis quaerat veritatis dolorem repellat sint doloribus itaque blanditiis reiciendis tempora.</p>
                    <p class="viewmore"><a href="#">ViewMore</a></p>
                    <p class="uploaded_on">April 17 2022 05:30 PM</p>
                </div>
            </div>
        </div>
        <div class="publication-item">
            <div class="publication-items">
                <div class="publication-img-container">
                    <img src="spimg.jpg" alt="">
                </div>
                <div class="publication-text-container">
                    <h2 class="publication-title"><a href="#">6నీరు-నిత్యజీవనాధారం Water - Elixir of Life Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis harum suscipit odit nobis tempore neque repellat ullam minus labore a.</a></h2>
                    <p class="shortinfo">A talk on, the importance and intricate necessity of water in the daily lives and its overall role in sustainable development. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa autem, delectus nostrum iure ab illo non tenetur quasi ex omnis quaerat veritatis dolorem repellat sint doloribus itaque blanditiis reiciendis tempora.</p>
                    <p class="viewmore"><a href="#">ViewMore</a></p>
                    <p class="uploaded_on">April 17 2022 05:30 PM</p>
                </div>
            </div>
        </div>
        <div class="publication-item">
            <div class="publication-items">
                <div class="publication-img-container">
                    <img src="spimg.jpg" alt="">
                </div>
                <div class="publication-text-container">
                    <h2 class="publication-title"><a href="#">6నీరు-నిత్యజీవనాధారం Water - Elixir of Life Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis harum suscipit odit nobis tempore neque repellat ullam minus labore a.</a></h2>
                    <p class="shortinfo">A talk on, the importance and intricate necessity of water in the daily lives and its overall role in sustainable development. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa autem, delectus nostrum iure ab illo non tenetur quasi ex omnis quaerat veritatis dolorem repellat sint doloribus itaque blanditiis reiciendis tempora.</p>
                    <p class="viewmore"><a href="#">ViewMore</a></p>
                    <p class="uploaded_on">April 17 2022 05:30 PM</p>
                </div>
            </div>
        </div>
        <div class="publication-item">
            <div class="publication-items">
                <div class="publication-img-container">
                    <img src="spimg.jpg" alt="">
                </div>
                <div class="publication-text-container">
                    <h2 class="publication-title"><a href="#">6నీరు-నిత్యజీవనాధారం Water - Elixir of Life Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis harum suscipit odit nobis tempore neque repellat ullam minus labore a.</a></h2>
                    <p class="shortinfo">A talk on, the importance and intricate necessity of water in the daily lives and its overall role in sustainable development. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa autem, delectus nostrum iure ab illo non tenetur quasi ex omnis quaerat veritatis dolorem repellat sint doloribus itaque blanditiis reiciendis tempora.</p>
                    <p class="viewmore"><a href="#">ViewMore</a></p>
                    <p class="uploaded_on">April 17 2022 05:30 PM</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.slider1').slick({
  dots: true,
  infinite: true,
  speed: 300,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrow:true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
</script>