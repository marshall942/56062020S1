<?php
// global variable can be used anywhere
// local variable can only be used in a function

$a = 4;
$b = 5;

function cal() {
    return $GLOBALS['a'] * $GLOBALS['b'];
}

