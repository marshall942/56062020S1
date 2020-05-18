<?php

$greeting = "Hello"; //$ is the syntax for variable in php
$who = "Marshall";

echo $greeting;
echo $who;

echo "<p>".$greeting." ".$who."</p>"; // . means merge strinngs in php

$x = 4;
$y = 5;
echo "x = ".$x." y = ".$y." z = x + y =".($x + $y);

$greeting = "Hello world";
//length of string
echo "<br>".strlen($greeting)."<br>";
//word count - count number of words in the string
echo str_word_count($greeting)."<br>";
//reverse string
echo strrev($greeting)." string reverse <br>";
//string position
echo strpos($greeting, "Hello")."word position <br>";
//string replace
echo str_replace($greeting, "Hello", "ciao")."word replace <br>";
//change string to uppercase
echo strtoupper($greeting)."to uppercase <br>";
//change string to lowercase
echo strtolower($greeting)."to lowercase <br>";