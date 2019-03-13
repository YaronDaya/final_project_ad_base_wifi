<?php
$servername = "localhost";
$username = "root";
$password = "1234catwifi";
$dbname = "final_project";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$pass_sign_up = $_POST["pass_sign_up"];
$email_add_sing_up = $_POST["email_add_sing_up"];
$birthday = $_POST["birthday"];
#$rep_pass_sing_up = $_POST["rep_pass_sign_up"];
#echo " repet password".$rep_pass_sing_up."<br>";
 $sql = "INSERT INTO Users(First_name,Last_name,birthday,email,password)
VALUES ('$first_name', '$last_name', '$birthday','$email_add_sing_up','$pass_sign_up')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully <br>";
    echo "first name : " . $first_name."<br>";
    echo "last name: ". $last_name. "<br>";
    echo "password: ". $pass_sign_up;
    echo "email: ". $email_add_sing_up."<br>";
    echo "birthday: ". $birthday."<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
