<?php
$servername = "localhost";
$username = "root";
$password = "1234catwifi";
$dbname = "adbasewifi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE Users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
birthday DATE,
password VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$id = 1;
$firstname= $_POST['sing_up_first_name'];
$lastname = $_POST['sing_up_last_name'];
$email = $_POST['sing_up_email'];
$birthday= $_POST['sing_up_birhtday'];
$password = $_POST['sing_up_password'];
$sql = "INSERT INTO Users (firstname, lastname, email,birthday,password)
VALUES ('$id','$firstname', '$lastname', '$email','$birthday','$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record S created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
