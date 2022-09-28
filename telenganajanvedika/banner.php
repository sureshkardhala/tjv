<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Telengana Jan Vedika</title>
    <link rel="stylesheet" href="banner_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body onload="slider()">
<div class="banner">
    <div class="slider">
        <img src="admin/banner/slider_1.jpg" alt="" id="slideImg">
    </div>
    <div class="overlay">
        <div class="content">
            <h1>Telengan Jan Vedika</h1>
            <h3>TJV is a multi disciplinary public policy forum working at the intersection of Political, Social, Economic and Environmental theories through the lens of Marx, Gandhi and Ambedkar</h3>

        </div>
    </div>
</div>

<script>
    var slideImg=document.getElementById("slideImg");
    var images=new Array(
        "admin/banner/slider_1.jpg",
        "admin/banner/slider_2.jpg",
        "admin/banner/slider_3.jpg",
        "admin/banner/slider_4.jpg"
    );
    var len=images.length;
    var i=0;
    function slider() {
        if(i>len-1){
            i=0;
        }
        
        slideImg.src=images[i];
        console.log(slideImg.src);
        i++;
        setTimeout('slider()', 3000);
    }
</script>
    
</body>
</html>