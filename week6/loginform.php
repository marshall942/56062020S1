<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
</head>
<body>
<?
include_once "login.php";
session_start();
if (isset($_SESSION["username"])) { //if login, else show form
    ?>
    <p><a href="profile.php">profile</a></p>
    <p><a href="changepassword.php">change password</a></p>
    <p><a href="logout.php">Logout</a></p>
    <?php
}
else {

?>

<form action="<?php echo $_SERVER['PHP_SELF']; //post request to same page ?>" method="post">
    <p>Username: <input type="text" name="username" required></p>
    <p>Password: <input type="password" name="pwd" required></p>
<!--    <p><input type="submit" value="Login"></p>-->
    <p><button>Login</button></p> <!--exact same as input type submit-->
</form>
<?php
}
?>
</body>
</html>