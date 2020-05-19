<?php
if (isset($_POST["width"])) { //isset checks the post data
    $w = $_POST["width"];
    $h = $_POST["height"];
//    $a = calculateArea($w, $h); //corresponding to my function input width and height
//    echo "Area: ".$area;
    echo "Area: ".calculateArea($w, $h);
}
else {
    echo "Go back to form page";
}

//$area = $w * $h; - known as a formula
//f(x,y) = x * y
function calculateArea ($width, $height) { //parameters for input
//    $area = $width * $height;
//    return $area; give result out
    return $width * $height;
}