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

$sql = "select * from Users"; //create query
$result = $connection->query($sql); //run the query on this connection

if ($result->num_rows > 0) { //check if there is a record in the result
    while ($row = $result->fetch_assoc()) { //show each associated row
        echo $row['id']." ".$row['username']." ".$row['password']." ".$row['name']."<br>"; //in each row we have columns
    }
}
else {
    echo "No result in the table";
}
$connection->close();