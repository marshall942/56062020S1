<?php
$server = "g9fej9rujq0yt0cd.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user = "icibdh91bbrbwbvm";
$pwd = "kdtxdor70hp0zgwy";
$database = "cun8cx3lck9iiqgv";


/**
 * @return mysqli a connection
 */
function dbconn()
{
    $connection = new mysqli($GLOBALS['server'], $GLOBALS['user'], $GLOBALS['pwd'], $GLOBALS['database']); //create database connection
    if ($connection->connect_error) {
        echo $connection->connect_error;
    } else {
        return $connection; //return database connection out
    }
}


/**
 * @param $username
 * @param $password
 * @return bool
 */
function login($username, $password)
{
//    return true/false return give result back and jump out from this function. Any code after return won't be run
    $conn = dbconn(); //create database connection from function dbconn()
//    $conn->close();
    $sql = "select * from users where username = '$username'"; //this is our query
    $result = $conn->query($sql); //run query on the created connection through method query()
    if ($result->num_rows == 1) { // means user exist in our database
        while ($row = $result->fetch_assoc()) {
            if ($row["password"] == $password) { //check password
                $conn->close();
                return true; //login
            } else //username is correct, check password
            {
                $conn->close();
                return false; //cannot login
            }
        }
    } else {
        $conn->close();
        return false; //cannot login
    }
}

/**
 * @param $username
 */
function showProfile($username)
{
    $conn = dbconn();
    $sql = "select * from users where username='$username'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            echo "<p>" . $row["id"] . "</p>";
            echo "<p>" . $row["username"] . "</p>";
            echo "<p>" . $row["password"] . "</p>";
            echo "<p>" . $row["name"] . "</p>";
            $conn->close();
        }
    }
}

/**
 * @name changePassword
 * @param $username
 * @param $oldPwd
 * @param $newPwd
 * @return bool //changed or not
 */
function changePassword($username, $oldPassword, $newPassword)
{
    $conn = dbconn();
    $sql = "select password from users where username='$username'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            $oldPwdInDtb = $row["password"];
        }
    }

    if ($oldPassword == $oldPwdInDtb) {
        $sql = "update Users set password = '";
        $sql .= $newPassword;
        $sql .= "' where username = '$username'";
        $conn->query($sql);
        return true;
    } else {
        $conn->close();
        return false;
    }
}

include_once "class/User.php";
/**
 * @name showRecords
 * @return array // User array
 */
function showRecords() {
    $conn = dbconn();
    $sql = "select * from users"; //create query
    $result = $conn->query($sql); //run the query on this connection
    $records = array();

    if ($result->num_rows > 0) { //check if there is a record in the result
        while ($row = $result->fetch_assoc()) { //show each associated row
//            echo $row['id']." ".$row['username']." ".$row['password']." ".$row['name']."<br>";
            //in each row we have columns
            $record = new User($row['id'], $row['username'], $row['password'], $row['name']);
            array_push($records, $record);
        }
    }
    else {
        echo "No result in the table";
    }
    $conn->close();
    return $records;
}