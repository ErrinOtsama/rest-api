<?php

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

$servername = "localhost";
$username = "root";
$password = "";
$database = "pengurus";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>