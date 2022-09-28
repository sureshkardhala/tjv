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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./static/css/search.css">
    <link rel="stylesheet" href="./static/css/nav.css">
    <script src="./static/js/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <?php include('./components/nav.php') ; ?>
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
    </div>
   <script src="./static/js/nav.js"></script>
</body>
</html>