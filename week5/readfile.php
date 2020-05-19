<?php
$file = fopen("helloworld.txt", 'r'); //fopen all programming language, r means read only, w write, a append
while (!feof($file)) {
    echo fgets($file)."<br>";
}
fclose($file); //if the file is opened the file needs to be closed