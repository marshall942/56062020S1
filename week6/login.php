<?php
/**
 * Author: Isabel Pitcher
 * Date: 26 May 2020
 * Version: 1.0
 * Purpose: for login
*/

if (isset($_POST["username"])) {
    $username = $_POST["username"];
    $password = $_POST["pwd"];

    include_once "dbconnection";
    //I will use my login function here
    if (login($username, $password)) { //if true (login success)
        session_start();
        $_SESSION['username'] = $username;
    }
    else {
        echo "Wrong username or password";
    }
}
else {
}

