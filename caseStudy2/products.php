<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pet food shop bird food</title>
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

    <div class="row">
        <!--filter div-->
        <div class="column filter">
            <h2>Food</h2>
            <h2>Other</h2>
            <h2>Sort by:</h2>
            <h2>Price</h2>
        </div>
        <!--carousel div-->
        <div class="column">
            <img id="dogCategory" onclick="carousel()" src="image/dog.jpg" alt="Carousel of images"/>
        </div>
    </div>
    <br>
    <!--cart row-->
    <div class="row">
        <div class="border" id="cartContent"><p>Cart contents:</p></div>
    </div>
    <!--product row-->
    <div class="row">
        <?php
        $categoryID = $_GET["categoryID"];
        $products = $user->showProductsByCategory($categoryID);
        $i = 0;
        while ($i<sizeof($products)) {
            $product = $products[$i];
            ?>
            <div class="column border product">
                <img class="productImage" src="image/<?php echo $product->picture;?>" alt="Picture of bird food brand 1"/>
                <h2><?php echo $product->name;?></h2>
                <p>$<?php echo $product->price;?> each</p>
                <p>Quantity:<input class="qty" type="number" />
                    <button name="<?php echo $product->name; ?>" class="addBut" onclick="addToCart(this)">Add to cart</button>
            </div>
            <?php
            $i = $i + 1;
        }
        ?>


    </div>
</div>

<?php
include_once "footer.php"
?>

</body>
</html>