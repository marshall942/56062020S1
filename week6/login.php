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

    //is the username in my table
    $sql = "select * from users where username = '$username'"; //this is our query
    $result = $connection->query($sql); //run query on this connection through method query()
    if ($result->num_rows == 1) { //means the user exists in this database
        while ($row = $result->fetch_assoc()) {
            if ($row["password"] == $password) { //check password
                echo "Access granted";
                session_start();
                $_SESSION["username"] = $username;


            }
            else {
                echo "Wrong password";
                ?>
                <script>
                    setTimeout(function () {
                        window.open("loginform.html", "_self");
                    }, 3000);
                </script>
                <?php
            }
        }
    }
    else {
        echo "Wrong username";
        ?>
        <script>
            window.open("loginform.html", "_self"); //go to login form
        </script>
        <?php
    }
    $connection->close();
}
else {
}

