<?php
require_once("config.php");
echo "<br>welcome ad_singup_mysql <br>";

$firstname= $_POST['singup_advertise_first_name'];
$lastname = $_POST['singup_advertise_last_name'];
$email = $_POST['singup_advertise_email'];
$nickname = $_POST['singup_advertise_nickname'];
$password = $_POST['singup_advertise_password'];

$sql = "INSERT INTO `advertiser_users`(firstname,lastname,email,nickname,password)
VALUES ('$firstname', '$lastname', '$email','$nickname','$password')";

if ($conn->query($sql) === TRUE) {
    echo "<br>New Advertiser created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
