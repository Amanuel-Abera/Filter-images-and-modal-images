<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/homeStyle.css">
    <title>Filter and modal image</title>
</head>
<body>
 
<div id="header">
    <span class="filter active" data-target="all">ALL</span>
    <span class="filter" data-target="app">APP</span>
    <span class="filter" data-target="card">CARD</span>
    <span class="filter" data-target="web">WEB</span>
</div>

<div id="gallery">
    <div class="all app" data-target="img/portfolio/portfolio-1.jpg">
        <img src="img/portfolio/portfolio-1.jpg" width="100%" height="100%">
    </div>

    <div class=" web" data-target="img/portfolio/portfolio-2.jpg">
        <img src="img/portfolio/portfolio-2.jpg" width="100%" height="100%">
    </div>

    <div class="all app" data-target="img/portfolio/portfolio-3.jpg">
        <img src="img/portfolio/portfolio-3.jpg" width="100%" height="100%">
    </div>

    <div class="all card" data-target="img/portfolio/portfolio-4.jpg">
        <img src="img/portfolio/portfolio-4.jpg" width="100%" height="100%">
    </div>

    <div class="all web" data-target="img/portfolio/portfolio-5.jpg">
        <img src="img/portfolio/portfolio-5.jpg" width="100%" height="100%">
    </div>

    <div class="all app" data-target="img/portfolio/portfolio-6.jpg">
        <img src="img/portfolio/portfolio-6.jpg" width="100%" height="100%">
    </div>

    <div class="all card" data-target="img/portfolio/portfolio-7.jpg">
        <img src="img/portfolio/portfolio-7.jpg" width="100%" height="100%">
    </div>

    <div class="all card" data-target="img/portfolio/portfolio-8.jpg">
        <img src="img/portfolio/portfolio-8.jpg" width="100%" height="100%">
    </div>

    <div class="all web" data-target="img/portfolio/portfolio-9.jpg">
        <img src="img/portfolio/portfolio-9.jpg" width="100%" height="100%">
    </div>
</div>



<div id="view_image">
    <img src="" id="viewer_img" alt="">
    <span id="close" onclick="exit()">&times;</span>
</div>






<script src="js/home.js"></script>
</body>
</html>