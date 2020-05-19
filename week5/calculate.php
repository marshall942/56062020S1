<?php
if (isset($_POST["width"])) { //isset checks the post data
    $w = $_POST["width"];
    $h = $_POST["height"];
    $area = $w * $h;
    echo "Area: ".$area;
}
else {
    echo "Go back to form page";
}