<?php
if((isset($_POST["sing_up_first_name"]))&&(!empty($_POST["sing_up_first_name"]))){

include_once('mongo_connect.php');

$firstname= $_POST['sing_up_first_name'];
$lastname = $_POST['sing_up_last_name'];
$email = $_POST['sing_up_email'];
$birthday= $_POST['sing_up_birhtday'];
$password = $_POST['sing_up_password'];


echo "<br>".$firstname."last name:".$lastname . "<br>" .$email . "<br>".$birthday . "<br>".$password;


$bulk = new MongoDB\Driver\BulkWrite; // to write
$doc = ['_id' => new MongoDB\BSON\ObjectID, 'first name' => $firstname, 'last name' => $lastname, 'email' => $email, 'birthday'=> $birthday,'password'=> $password];
$bulk->insert($doc);
$manager->executeBulkWrite('testDB.Demo', $bulk);

//$query = new MongoDB\Driver\Query([]);
//$rows = $manager->executeQuery("testDB.Demo", $query);
//foreach ($rows as $row) {
	//echo "$row->name : $row->age<br>";
	//}

}else {
  echo "failed";
}
?>
