<?php
?>
<div class="header" id="myHeader">
    <h1><a href="https://marshall942.github.io/HTCS5606_casestudy1/home-page.html">Pet food shop online</a></h1>
    <hr>
    <h2>
        <!--        <a href="https://marshall942.github.io/HTCS5606_casestudy1/dog-category.html">Dogs</a>-->
        <!--        <a href="https://marshall942.github.io/HTCS5606_casestudy1/cat-category.html">Cats</a>-->
        <!--        <a href="https://marshall942.github.io/HTCS5606_casestudy1/bird-category.html">Birds</a>-->
        <!--        <a href="https://marshall942.github.io/HTCS5606_casestudy1/lizard-category.html">Reptiles</a>-->
        <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        include_once "classes/User.php";
        $user = new User(null, "", "", "");
        $categories = $user->viewCategories();
        $i = 0;
        while ($i < sizeOf($categories)) {
            $category = $categories[$i];
            echo "<li><a href='products.php?categoryID=".$category->id."'>".$category->name."</a></li>";
            $i = $i + 1;
        }
        ?>
        <a href="#">Other</a>
        <a href="#">Cart</a>
    </h2>
</div>