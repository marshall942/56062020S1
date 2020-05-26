<?php
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