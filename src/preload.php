<?php

$servername = "mysqlserver";
$username = "username";
$password = "password";

// Create connection
$mysql = new mysqli($servername, $username, $password);
$mysql->select_db("database");

// Check connection
if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}
