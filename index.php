<?php
$mysqli = new mysqli("localhost", "myuser", "mypassword", "mywebsite");
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$ip_address = $_SERVER['REMOTE_ADDR'];
$current_time = date('Y-m-d H:i:s');

echo "Hello World! Your IP address is $ip_address. Current time is $current_time";
?>

