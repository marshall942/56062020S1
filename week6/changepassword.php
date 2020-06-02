<?php

include_once "dbconnection.php";

session_start(); //either use session or start session
$username = $_SESSION["username"]; //use session
$oldPwd = $_POST["oldpwd"];
$newPwd = $_POST["newpwd"];
if (changePassword($username, $oldPwd, $newPwd)) {
    echo "Password changed";
}
else {
    echo "Password not changed";
}

?>
<p><a href="logout.php">Logout</a></p>