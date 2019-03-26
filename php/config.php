<?php
echo "<br>welcome congif!<br>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adbasewifi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
