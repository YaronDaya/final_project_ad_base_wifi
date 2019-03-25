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

$firstname= $_POST['singup_advertise_first_name'];
$lastname = $_POST['singup_advertise_last_name'];
$email = $_POST['singup_advertise_email'];
$nickname = $_POST['singup_advertise_nickname'];
$password = $_POST['singup_advertise_password'];

$sql = "INSERT INTO Advertiser_Users(firstname,lastname,email,nickname,password)
VALUES ('$firstname', '$lastname', '$email','$nickname','$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record S created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
