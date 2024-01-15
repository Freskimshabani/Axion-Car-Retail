<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "axiondb";

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
?>