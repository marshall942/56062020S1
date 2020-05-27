<?php
session_start(); 
session_destroy(); //remove everything in session

setTimeout(function () {
    window.open("loginform.html", "_self");
}, 3000);