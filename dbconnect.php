<?php

$hostName="localhost";
$username = "root";
$password = "";
$dbname = "library";

// create connection
$connect = new  mysqli($hostName, $username, $password, $dbname);

// check connection
if($connect->connect_error) {
    die("connection failed: " . $connect->connect_error);
} else {
    // echo "Successfully Connected";
}

?>