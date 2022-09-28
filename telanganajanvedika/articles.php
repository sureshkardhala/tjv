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
        <div class="single-image">
                    <img src="spimg.jpg" alt="">
            </div>
            <p class="title">నీరు-నిత్యజీవనాధారం Water - Elixir of Life</p>
            <p class="shortinfo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit a vero nemo facere aperiam autem voluptate maiores odio? Quas repudiandae asperiores illum ratione iste? Aut dignissimos exercitationem quam! Modi, beatae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore voluptatibus fugiat neque doloremque aut consectetur eos.</p>
           
            <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores earum ab in quos voluptatem minima laborum totam adipisci eius ipsum amet reiciendis consectetur voluptate nostrum debitis vero, architecto incidunt iure!Loremlore Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore omnis maiores a, debitis beatae iste quaerat id nulla molestiae quos nam expedita explicabo sint, vel eveniet commodi aliquid. Cupiditate, nesciunt! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi laboriosam repudiandae deserunt at culpa earum vel ut beatae esse unde est nemo, ducimus hic voluptatum in itaque saepe facilis nulla. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente voluptatem blanditiis, inventore atque aut nobis veniam consequuntur pariatur voluptatum odit excepturi aliquid corrupti fuga, repellendus ducimus minima suscipit ex? Quibusdam.</div>
        </div>
    </div>
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
        padding:50px;
    }
    .single-container{
        width:70%;
        height:fit-content;
        padding:50px;
        margin:20vh auto;
        padding:50px;
        border:1px solid rgba(0,0,0,0.1);
    }
    .title{
        margin:20px;
        margin-left:0;
        font-weight:600;
        font-size:25px;
        font-family:'Poppins', sans-serif;
    }
    .shortinfo{
        margin:10px;
        margin-left:0;
        font-size:15px;
    }
    .single-image{
        width:60%;
        margin:20px auto;
        max-height:500px;
        padding:50px;
    }
    .single-image img{
        width:100%;
        object-fit:contain;
        margin:auto;
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
}
</style>