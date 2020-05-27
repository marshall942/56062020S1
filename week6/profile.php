<?php

include_once "dbconnection";

session_start();
$username = $_SESSION["username"];

$sql = "select * from users where username='something'";
$result = $connection->query($sql);
if ($result->num_rows == 1) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>".$row["id"]."</p>";
        echo "<p>".$row["username"]."</p>";
        echo "<p>".$row["password"]."</p>";
        echo "<p>".$row["name"]."</p>";
    }
}
?>
<p><a href="logout.php">Logout</a></p>