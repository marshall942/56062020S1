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

    //is the username in my table
    $sql = "select * from users where username = '$username'"; //this is our query
    $result = $connection->query($sql); //run query on this connection through method query()
    if ($result->num_rows == 1) { //means the user exists in this database
        while ($row = $result->fetch_assoc()) {
            if ($row["password"] == $password) { //check password
                echo "Access granted";
                session_start();
                $_SESSION["username"] = $username;
                ?>
                <p><a href="profile.php">profile</a></p>
                <p><a href="changepassword.php">change password</a></p>
                <?php

            }
            else {
                echo "Wrong paddword"
            }
        }
    }
    else {
        echo "Wrong username";
    }
    $connection->close();
}
else { ?>
    <script>
        window.open("loginform.html");
    </script>
    <?php
}

