<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pet shop home page</title>
    <link rel="stylesheet" href="css/style.css"> <!--css link-->
    <script src="js/script.js"></script> <!--javascript link-->
    <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'> <!--link for quicksand font-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans"> <!--link for open sans font-->
</head>
<body>

<?php
include_once "header.php"
?>

<!--content div-->
<div class="content" id="myContent">
    <!--carousel div-->
    <div class="row">
        <img id="dogCategory" onclick="carousel()" src="image/dog.jpg"/>
    </div>

    <!--article div-->
    <div class="row">
        <div class="column border article">
            <a href="https://www.rover.com/blog/science-cute-dogs/" target="_blank">
                <h1>The Science of Cute: How Cuteness Makes Us Love Our Dogs</h1></a
            ></div>
        <div class="column border article">
            <a href="https://www.nytimes.com/2019/09/24/science/cats-humans-bonding.html" target="_blank">
                <h1>Cats Like People! (Some People Anyway)</h1></a></h2>
        </div>
        <div class="column border article">
            <a href="https://www.mentalfloss.com/article/78996/15-amazing-facts-about-15-birds" target="_blank">
                <h1>15 Amazing Facts About 15 Birds</h1></a>
        </div>
        <div class="column border article">
            <a href="https://www.livescience.com/56017-lizard-facts.html" target="_blank">
                <h1>Facts About Lizards</h1></a>
        </div>
    </div>
</div>

<?php
include_once "footer.php"
?>

</body>
</html>