<?php
if((isset($_POST["singup_advertise_first_name"]))&&(!empty($_POST["singup_advertise_first_name"]))){

include_once('mongo_connect.php');

$firstname= $_POST['singup_advertise_first_name'];
$lastname = $_POST['singup_advertise_last_name'];
$email = $_POST['singup_advertise_email'];
$password = $_POST['singup_advertise_password'];


echo "<br>".$firstname."last name:".$lastname . "<br>" .$email . "<br>".$password;


$bulk = new MongoDB\Driver\BulkWrite; // to write
$doc = ['_id' => new MongoDB\BSON\ObjectID, 'first name' => $firstname, 'last name' => $lastname, 'email' => $email, 'password'=> $password];
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
