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

$ownername= $_POST['sing_up_owner_name'];
$company = $_POST['sing_up_company_name'];
$email = $_POST['sing_up_business_email'];
$addr = $_POST['sing_up_addr_name'];
$password = $_POST['sing_up_business_password'];

$sql = "INSERT INTO business_users (ownername,company,email,address,password)
VALUES ('$ownername', '$company', '$email','$addr','$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record S created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
