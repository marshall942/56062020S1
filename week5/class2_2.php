<?php
//set default time zone
date_default_timezone_set('Pacific/Auckland');
//take the time from the system or online
//data function to take the time
$t = date("Y-m-d");
$t1 = date("H:i:s");
echo $t." ".$t1;

$hour = intval(date("H"));
$minutes = intval(date("i"));
echo "<p>h: ".$hour."</p>";
echo "<p>m: ".$minutes."</p>";
if ($hour >= 10 && $minutes < 20) { //&& means and || means or
    // above command works before 10:20
    echo " Buongiorno";
} elseif ($hour< 20){ //works before 8pm
    echo " Bounasera";
} else { //works otherwise
    echo " Buonnotte";
}