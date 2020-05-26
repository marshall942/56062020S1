<?php
$username = $_POST["username"];
$password = $_POST["pwd"];

$server = "g9fej9rujq0yt0cd.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user = "icibdh91bbrbwbvm";
$pwd = "kdtxdor70hp0zgwy";
$database = "cun8cx3lck9iiqgv";

$connection = new mysqli($server, $user, $pwd, $database);
if ($connection->connect_error) {
    echo $connection->connect_error;
}
else {
    echo "Connection created";
}

session_start(); //either use session or start session
$username = $_SESSION["username"]; //use session

$sql = "select password from users where username='something'";
$result = $connection->query($sql);
if ($result->num_rows == 1) {
    while ($row = $result->fetch_assoc()) {
        $oldPwdInDtb = $row["password"];
    }
}
}

if (isset($_POST["oldpwd"])) {
    $sql = "update users set password - '";
    $sql .= $_POST["newpwd"]; 
    $sql .= "'where username = 'something'";
    $result = $connection->query($sql);
    echo "Password changed";
}
else {
    echo "Go back and input again";
}

$connection->close();
?>
<p><a href="logout.php">Logout</a></p>