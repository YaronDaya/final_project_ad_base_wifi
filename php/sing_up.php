<?php
include_once('connect.php');
$user_id = 2;
$first_name = $_POST['sing_in_first_name'];
$last_name = $_POST['sing_in_last_name'];
$email = $_POST['sing_in_email'];
$birhtday = $_POST['sing_in_birhtday'];
$password = $_POST['sing_in_password'];

$sql = "INSERT INTO users(User_id,First_name,Last_name,email,birthday,pass_word)
VALUES ('$user_id','$first_name','$last_name','$email','$birhtday','$password ')";

if (mysqli_query($conn,$sql)){
  echo "New User created successfully";
}else {
  echo "Error : ".$sql."<br>". mysqli_error($conn);
}
?>
