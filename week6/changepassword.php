<?php
$username = $_POST["username"];
$password = $_POST["pwd"];

include_once "dbconnection.php";

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