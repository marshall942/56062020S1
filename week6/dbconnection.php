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