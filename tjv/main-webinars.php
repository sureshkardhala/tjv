<style>
    .event-container{
        width:80%;
        height:fit-content;
        display:flex;
        flex-wrap:wrap;
        margin:auto;
        padding:5px;
        font-family: 'Playfair Display SC', serif;
    }
    .event-header{
        width:100%;
        height:fit-content;
        padding:15px;
        display:flex;
        flex-wrap:wrap;
        text-align:center;
    }
    .event-header a{
        color:black;
    }
    .event-header .event-head-title{
        width:100%;
        text-align:center;
    }
    .event-header .viewall{
        text-align:right;
        width:100%;
        font-size:14px;
    }
    .event-sub-container{
        width:100%;
        height:fit-content;
        margin:20px 0;
        display:flex;
        flex-wrap:wrap;
        justify-content:space-around;
    }
    .event-items{
        width:30%;
        height:fit-content;
        display:flex;
        flex-wrap:wrap;
        justify-content:space-around;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
    }
    .event-img-container{
        width:100%;
        height:200px;
        overflow:hidden;
        justify-content:center;
        padding:5px;
        padding-bottom:0px;
    }
    .event-img-container img{
        max-width:100%;
        max-height:100%;
        object-fit:contain;
        justify-content:center;
    }
    .event-text-container{
        padding:10px;
        width:100%;
        height:fit-content;
    }
    .event-text-container .event-title{
        font-size:17px;
    }
    .event-text-container .event-title a{
        color:black;
    }
    .event-text-container a{
        color:black;
    }
    .event-text-container p{
        margin:10px 0 5px 0;
        font-size:14px;
        font-family: Noto Sans,sans-serif;
        font-weight:600;
    }
    .event-text-container .meeting{
        font-weight:400;
        font-size:15px;
    }
    .event-text-container .updated_on{
        font-size:10px;
        font-weight:400;
        margin-top:15px;
    }
    @media screen and (max-width: 992px){
        .event-container{
        width:100%;
        margin:0;
    }
    .event-header .viewall{
       margin-top:10px;
    }
    .event-sub-container{
        padding:15px;
        justify-content:space-around;
        margin:0;
    }
    .event-items{
        width:100%;
        margin-top:35px;
    }
    .event-img-container{
        width:100%;
        height:200px;
        overflow:hidden;
        justify-content:space-around;
        padding:5px;
    }
    .event-img-container img{
        max-width:100%;
        max-height:100%;
        object-fit:contain;
        justify-content:center;
    }
    .event-text-container{
        padding:5px;
        width:100%;
        height:fit-content;
        margin:10px 0;
    }
    .event-text-container .event-title{
        font-size:17px;
    }
    .event-text-container .event-title a{
        color:black;
    }
    .event-text-container a{
        color:black;
    }
    .event-text-container p{
        margin:10px 0 5px 0;
        font-size:14px;
        font-family: Noto Sans,sans-serif;
        font-weight:600;
    }
    .event-text-container .meeting{
        font-weight:400;
        font-size:15px;
    }
    .event-text-container .updated_on{
        font-size:10px;
        font-weight:400;
        margin-top:15px;
    }
    }
</style>
<div class="event-container">
    <div class="event-header">
        <h2 class="event-head-title"><a href="#">Events</a></h2>
        <a href="#" class="viewall">View All</a>
    </div>
    <div class="event-sub-container">
            <div class="event-items">
                <div class="event-img-container">
                    <a href="#"><img src="spimg.jpg" alt=""></a>
                </div>
                <div class="event-text-container">
                    <h2 class="event-title"><a href="#">1నీరు-నిత్యజీవనాధారం Water - Elixir of Life Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis harum suscipit odit nobis tempore neque repellat ullam minus labore a.</a></h2>
                    <p class="meeting">  <span>Meeting Timings:</span> April 17 2022 05:30 PM</p>
                    <p><a href="#" class="viewmore">View more</a></p>
                    <p class="updated_on">April 17 2022 05:30 PM</p>
                </div>
            </div>
            <div class="event-items">
                <div class="event-img-container">
                    <a href="#"><img src="spimg.jpg" alt=""></a>
                </div>
                <div class="event-text-container">
                    <h2 class="event-title"><a href="#">2నీరు-నిత్యజీవనాధారం Water - Elixir of Life Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis harum suscipit odit nobis tempore neque repellat ullam minus labore a.</a></h2>
                    <p class="meeting">  <span>Meeting Timings:</span> April 17 2022 05:30 PM</p>
                    <p><a href="#" class="viewmore">View more</a></p>
                    <p class="updated_on">April 17 2022 05:30 PM</p>
                </div>
            </div>
            <div class="event-items">
                <div class="event-img-container">
                    <a href="#"><img src="spimg.jpg" alt=""></a>
                </div>
                <div class="event-text-container">
                    <h2 class="event-title"><a href="#">3నీరు-నిత్యజీవనాధారం Water - Elixir of Life Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis harum suscipit odit nobis tempore neque repellat ullam minus labore a.</a></h2>
                    <p class="meeting">  <span>Meeting Timings:</span> April 17 2022 05:30 PM</p>
                    <p><a href="#" class="viewmore">View more</a></p>
                    <p class="updated_on">April 17 2022 05:30 PM</p>
                </div>
            </div>
            
    </div>
</div>