<?php
require_once('config.php');
echo "<br>start signup<br>";

$firstname= $_POST['sing_up_first_name'];
$lastname = $_POST['sing_up_last_name'];
$email = $_POST['sing_up_email'];
$birthday= $_POST['sing_up_birhtday'];
$password = $_POST['sing_up_password'];



$sql = "INSERT INTO Users (firstname, lastname, email,birthday,password)
VALUES ('$firstname', '$lastname', '$email','$birthday','$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record S created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
