<?php
ob_start();

//database connection
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "contact_form";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>