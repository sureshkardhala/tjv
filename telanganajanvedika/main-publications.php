<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .publication-container{
        width:80%;
        height:fit-content;
        font-family: 'Roboto Slab', serif;
        margin:auto;
        display:flex;
        flex-wrap:wrap;
    }
    .publication-section{
        width:100%;
        height:fit-content;
        display:flex;
        flex-wrap:wrap;
        padding:0 30px;
        justify-content:space-between;
        box-shadow: 0px 0px 1px 0px rgba(66, 68, 90, 1);
        text-align:left;
    }
    .publication-header{
        width:100%;
        height:fit-content;
        text-align:center;
        font-family: 'Poppins', sans-serif;
        font-weight:600px;
        font-size:18px;
        color:black;
    }
    .publication-header p{
        margin:10px 0;
        font-family: 'Roboto Slab', serif;
    }
    .viewall1{
        width:100%;
        margin:10px 0;
        text-align:right;
        font-size:15px;
    }
    .publication-item{
        width:90%;
        height:fit-content;
    }
    .publication-items{
        width:100%;
        height:300px;
        display:flex;
        flex-wrap:wrap;
        padding:5px 0 10px 0;
        border:1px solid #eee;
        box-shadow: 0px 0px 1px 0px rgba(66, 68, 90, 1);
        margin:auto;
        margin-top:30px;

    }
    .publication-image-container{
        width:40%;
        height:fit-content;
        padding:10px;
        
    }
    .publication-image-container img{
        max-width:100%;
    }
    .publication-text-container{
        width:60%;
        height:fit-content;
        padding:15px;
        overflow:hidden;
    }
    .title1{
        font-size:15px;
    }
    .short-info1{
        margin:10px 0;
    }
    .speaker {
        margin:15px 0;
        font-size:14px;
        
    }
    span{
        font-weight:600;
    }
    .calender{
        margin:15px 0;
        font-size:14px;
    }
    .calender i{
        font-size:20px;
    }
    .publication-button{

        margin:10px 0 10px 0;
        font-size:14px;
        font-weight:600;
    }
    .reveal{
      transform: translateY(50px);
      opacity: 0;
      transition: 1s all ease;
    }
    
    .reveal.active{
      transform: translateY(0);
      opacity: 1;
    }
    @media screen and (max-width: 992px){
        .publication-container{
            width:100%;
        }
        .publication-items{
            width:100%;
        }
        .publication-items{
        width:100%;
        height:fit-content;
        display:flex;
        flex-wrap:wrap;
        padding:5px 0 10px 0;
        border:1px solid #eee;
        box-shadow: 0px 0px 1px 0px rgba(66, 68, 90, 1);
        margin:auto;
        margin-top:30px;

    }
    .publication-image-container{
        width:100%;
        height:fit-content;
        padding:0px;
        
    }
    .publication-image-container img{
        max-width:100%;
    }
    .publication-text-container{
        width:100%;
        height:fit-content;
        padding:10px;
        margin:5px 0;
    }
        .reveal{
      position: relative;
      transform: translateY(150px);
      opacity: 0;
      transition: 1s all ease;
    }
    }
</style>
<div class="publication-container reveal">
    <div class="publication-header">
        <h2>Events</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos facilis, assumenda nobis exceptur</p>
        <div class="viewall1">
        <a href="#">View all  <i class="fa-solid fa-arrow-right-long"></i></a>
    </div>
    <div class="publication-section slider">
    <div class="publication-item">
    <div class="publication-items ">
        <div class="publication-image-container">
            <img src="spimg.jpg" alt="">
        </div>
        <div class="publication-text-container ">
            <h2 class="title1">నీరు-నిత్యజీవనాధారం Water - Elixir of Life</h2>
            <p class="short-info1">A talk on, the importance and intricate necessity of water in the daily lives and its overall role in sustainable development. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa autem, delectus nostrum iure ab illo non tenetur quasi ex omnis quaerat veritatis dolorem repellat sint doloribus itaque blanditiis reiciendis tempora.</p>
            <p class="calender"><i class="fa-solid fa-calendar-days"></i> &nbsp;April 17 2022 05:30 PM</p>
            <a class="publication-button" href="#">View More  <i class="fa-solid fa-arrow-right-long"></i></a>
        </div>
    </div>
    </div>
    
    <div class="publication-item">
    <div class="publication-items ">
        <div class="publication-image-container">
            <img src="spimg.jpg" alt="">
        </div>
        <div class="publication-text-container ">
            <h2 class="title1">నీరు-నిత్యజీవనాధారం Water - Elixir of Life</h2>
            <p class="short-info1">A talk on, the importance and intricate necessity of water in the daily lives and its overall role in sustainable development. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa autem, delectus nostrum iure ab illo non tenetur quasi ex omnis quaerat veritatis dolorem repellat sint doloribus itaque blanditiis reiciendis tempora.</p>
            <p class="calender"><i class="fa-solid fa-calendar-days"></i> &nbsp;April 17 2022 05:30 PM</p>
            <a class="publication-button" href="#">View More  <i class="fa-solid fa-arrow-right-long"></i></a>
        </div>
    </div>
    </div>
    <div class="publication-item">
    <div class="publication-items ">
        <div class="publication-image-container">
            <img src="spimg.jpg" alt="">
        </div>
        <div class="publication-text-container ">
            <h2 class="title1">నీరు-నిత్యజీవనాధారం Water - Elixir of Life</h2>
            <p class="short-info1">A talk on, the importance and intricate necessity of water in the daily lives and its overall role in sustainable development. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa autem, delectus nostrum iure ab illo non tenetur quasi ex omnis quaerat veritatis dolorem repellat sint doloribus itaque blanditiis reiciendis tempora.</p>
            <p class="calender"><i class="fa-solid fa-calendar-days"></i> &nbsp;April 17 2022 05:30 PM</p>
            <a class="publication-button" href="#">View More  <i class="fa-solid fa-arrow-right-long"></i></a>
        </div>
    </div>
    </div>
</div>

</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
<script type="text/javascript">
  $('.slider').slick({
    slidesToShow:1,
    slidesToScroll: 3,
    autoplay: true,
    autoplaySpeed: 4000,
    dots:true,
  });
</script>
<script>
        function reveal() {
        var reveals = document.querySelectorAll(".reveal");
      
        for (var i = 0; i < reveals.length; i++) {
          var windowHeight = window.innerHeight;
          var elementTop = reveals[i].getBoundingClientRect().top;
          var elementVisible = 150;
      
          if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
          } else {
            reveals[i].classList.remove("active");
          }
        }
      }
      
      window.addpublicationListener("scroll", reveal);
    </script>