<div class="founder" id="f1">
    <div class="founder-heading">
        <h3>Founders Of TJV</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum dolores cum at obcaecati voluptatum mo</p>
    </div>
    <div class="founder-details">
    <div class="founder1">
        <div class="founder-img">
            <div class="img"><img src="spimg.jpg" alt=""></div>
        </div>
        <div class="founder-text">
                <div><h3>Founder Name</h3></div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error quo illo tempora deleniti alias illum autem accusantium sapiente ipsum eveniet! Qui quibusdam velit dolores quidem accusantium ut, maxime earum pariatur?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor earum provident veritatis quisquam error nobis soluta nulla sunt obcaecati. Minima nisi praesentium sit fugiat ratione itaque voluptatum officiis placeat animi?</p>
        </div>
    </div>
    <div class="founder2">
        <div class="founder-img">
            <div class="img"><img src="spimg.jpg" alt=""></div>
        </div>
        <div class="founder-text">
                <div><h3>Founder Name</h3></div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error quo illo tempora deleniti alias illum autem accusantium sapiente ipsum eveniet! Qui quibusdam velit dolores quidem accusantium ut, maxime earum pariatur?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor earum provident veritatis quisquam error nobis soluta nulla sunt obcaecati. Minima nisi praesentium sit fugiat ratione itaque voluptatum officiis placeat animi?</p>
        </div>

    </div>
    </div>
</div>

<style>
    *{
        padding:0;
        margin:0;
        box-sizing:border-box;
    }
    .founder{
        width:100%;
        padding:10px;
        height:fit-content;
        display:flex;
        flex-wrap:wrap;
    }
    .founder-heading{
        width:100%;
        height:fit-content;
        /* border:2px solid red; */
        text-align:center;
        padding:15px;
    }
    .founder-heading p{
        margin:5px 0;
    }
    .founder-details{
        width:100%;
        height:fit-content;
        /* border:2px solid red; */
        padding:20px;
        display: flex;
        flex-wrap:wrap;
        justify-content:space-around;
    }
    .founder1{
        width:45%;
        height:fit-content;
        display:flex;
        flex-wrap:wrap;
        /* border:2px solid grey; */
        padding:30px;
    }
    .founder2{
        width:45%;
        height:fit-content;
        display:flex;
        flex-wrap:wrap;
        /* border:2px solid grey; */
        padding:30px;
    }
    .founder-img{
        width:100%;
        height:fit-content;
        justify-content:center;
        height:200px;
        /* border:2px solid grey; */
    }
    .img{
        height:fit-content;
        width:100%;
        justify-content:center;
    }
    .img img{
        width:180px;
        height:180px;
        border-radius:90px;
        margin-left:30%;
    }
    .founder-text{
        width:100%;
        height:fit-content;
        display:flex;
        flex-wrap:wrap;
        padding:10px;
    }
    .founder-text div{
        width:100%;
        text-align:center;
        padding:10x;
        height:50px;
    }
    .founder-text h3{
        text-align:center;
    }
    @media screen and (max-width: 992px){
    .founder1{
        width:100%;
        padding:15px;
    }
    .founder2{
        width:100%;
        padding:15px;
        margin:15px 0;
    }
    .img{
        padding:0;
    }
    .img img{
        width:180px;
        height:180px;
        border-radius:90px;
        margin-left:15%;
    }
    .founder-text{
        padding:5px;
        
    }
    }
</style>