<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "eshop";

$conexiune = new mysqli($hostname, $username, $password, $database);

$link = mysqli_connect("localhost", "root", "", "eshop");

if ($conexiune->connect_error) {
    die("Connection failed:" . $conexiune->connect_error);
}


?> 
