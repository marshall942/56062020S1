<?php
$res = $_POST["mark"]; //receive post request
if ($res > 100 || $res < 0) {
    echo "Wrong input";
}
elseif ($res > 85) {
    echo "A";
    }
elseif ($res >= 75) {
    echo "B";
}
elseif ($res >= 60 ) {
    echo "C";
}
elseif ($res > 50) {
    echo "D";
}
else {
    echo "E";
}