<?php

require_once('config.php');
echo "<br>start business_sing_up signup<br>";


$ownername= $_POST['sing_up_owner_name'];
$company = $_POST['sing_up_company_name'];
$email = $_POST['sing_up_business_email'];
$addr = $_POST['sing_up_addr_name'];
$password = $_POST['sing_up_business_password'];

$sql = "INSERT INTO `business_users` (`owner`,`company`,`address`,`password`,`email`)
VALUES ('$ownername', '$company', '$addr','$password','$email')";

if ($conn->query($sql) === TRUE) {
    echo "<br>New business created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
