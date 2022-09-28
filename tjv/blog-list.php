<div class="blogs-list-container">
    <div class="blogs-list-header">
        <h2 class="blogs-list-head-title"><a href="blogs.php">blogs & Posts</a></h2>
        <p class="blogs-shortinfo">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo, ea impedit? Porro quos explicabo fugiat error, repellat totam odio praesentium debitis incidunt quibusdam sequi nobis, aut sapiente ipsa non facere.</p>
    </div>
    <div class="blogs-list-sub-container">
        <div class="blogs-list-items">
            <div class="blogs-list-img-container">
               <img src="spimg.jpg" alt="">
            </div>
            <div class="blogs-list-text-container">
                <h2 class="blogs-list-title"><a href="#">2నీరు-నిత్యజీవనాధారం Water - Elixir of Life Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis harum suscipit odit nobis tempore neque repellat ullam minus labore a.</a></h2>
                <p><a href="#" class="viewmore">View more</a></p>
                <p class="updated_on">April 17 2022 05:30 PM</p>
            </div>
        </div>
        <div class="blogs-list-items">
            <div class="blogs-list-img-container">
               <img src="spimg.jpg" alt="">
            </div>
            <div class="blogs-list-text-container">
                <h2 class="blogs-list-title"><a href="#">2నీరు-నిత్యజీవనాధారం Water - Elixir of Life Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis harum suscipit odit nobis tempore neque repellat ullam minus labore a.</a></h2>

                <p><a href="#" class="viewmore">View more</a></p>
                <p class="updated_on">April 17 2022 05:30 PM</p>
            </div>
        </div>
        <div class="blogs-list-items">
            <div class="blogs-list-img-container">
               <img src="spimg.jpg" alt="">
            </div>
            <div class="blogs-list-text-container">
                <h2 class="blogs-list-title"><a href="#">2నీరు-నిత్యజీవనాధారం Water - Elixir of Life Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis harum suscipit odit nobis tempore neque repellat ullam minus labore a.</a></h2>
                <p><a href="#" class="viewmore">View more</a></p>
                <p class="updated_on">April 17 2022 05:30 PM</p>
            </div>
        </div>
    </div>
</div>
<style>
    .blogs-list-container{
        width:80%;
        height:fit-content;
        display:flex;
        flex-wrap:wrap;
        margin:auto;
        padding:5px;
        font-family: 'Playfair Display SC', serif;
        margin-top:50px;
    }
    .blogs-list-header{
        width:100%;
        height:fit-content;
        padding:15px;
        display:flex;
        flex-wrap:wrap;
        text-align:center;
    }
    .blogs-list-header a{
        color:black;
    }
    .blogs-list-header .blogs-list-head-title{
        width:100%;
        text-align:center;
    }
    .blogs-list-header .viewall{
        text-align:right;
        width:100%;
        font-size:14px;
    }
    .blogs-shortinfo{
        width:100%;
        margin:10px 0;
        padding:5px;
        font-family: Noto Sans,sans-serif;
    }
    .blogs-list-sub-container{
        width:100%;
        height:fit-content;
        margin:40px 0;
        display:flex;
        flex-wrap:wrap;
        justify-content:space-around;
    }
    .blogs-list-items{
        width:30%;
        height:fit-content;
        display:flex;
        flex-wrap:wrap;
        justify-content:space-around;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        margin-top:20px;
    }
    .blogs-list-img-container{
        width:100%;
        height:200px;
        overflow:hidden;
        justify-content:center;
        padding:5px;
        padding-bottom:0px;
    }
    .blogs-list-img-container img{
        max-width:100%;
        max-height:100%;
        object-fit:contain;
        justify-content:center;
    }
    .blogs-list-text-container{
        padding:10px;
        width:100%;
        height:fit-content;
    }
    .blogs-list-text-container .blogs-list-title{
        font-size:17px;
    }
    .blogs-list-text-container .blogs-list-title a{
        color:black;
    }
    .blogs-list-text-container a{
        color:black;
    }
    .blogs-list-text-container p{
        margin:10px 0 5px 0;
        font-size:14px;
        font-family: Noto Sans,sans-serif;
        font-weight:600;
    }
    .blogs-list-text-container .meeting{
        font-weight:400;
        font-size:14px;
    }
    .blogs-list-text-container .updated_on{
        font-size:10px;
        font-weight:400;
        margin-top:15px;
    }
    @media screen and (max-width: 992px){
        .blogs-list-container{
        width:100%;
        margin:0;
    }
    .blogs-list-header .viewall{
       margin-top:10px;
    }
    .blogs-list-sub-container{
        padding:15px;
        justify-content:space-around;
        margin:0;
    }
    .blogs-list-items{
        width:100%;
        margin-top:35px;
    }
    .blogs-list-img-container{
        width:100%;
        height:210px;
        overflow:hidden;
        justify-content:space-around;
        padding:10px;
    }
    .blogs-list-img-container img{
        max-width:100%;
        max-height:100%;
        object-fit:contain;
        justify-content:center;
        margin:auto;
    }
    .blogs-list-text-container{
        padding:10px;
        width:100%;
        height:fit-content;
        margin:0;
    }
    .blogs-list-text-container .blogs-list-title{
        font-size:17px;
    }
    .blogs-list-text-container .blogs-list-title a{
        color:black;
    }
    .blogs-list-text-container a{
        color:black;
    }
    .blogs-list-text-container p{
        margin:10px 0 5px 0;
        font-size:14px;
        font-family: Noto Sans,sans-serif;
        font-weight:600;
    }
    .blogs-list-text-container .meeting{
        font-weight:400;
        font-size:15px;
    }
    .blogs-list-text-container .updated_on{
        font-size:10px;
        font-weight:400;
        margin-top:15px;
    }
    }
</style>