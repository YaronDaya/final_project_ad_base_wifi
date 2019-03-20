<?php
if((isset($_POST["sing_up_owner_name"]))&&(!empty($_POST["sing_up_owner_name"]))){
include_once('mongo_connect.php');

$ownername= $_POST['sing_up_owner_name'];
$company = $_POST['sing_up_company_name'];
$email = $_POST['sing_up_business_email'];
$addr = $_POST['sing_up_addr_name'];
$password = $_POST['sing_up_business_password'];


echo "<br>".$ownername."last name:".$company . "<br>" .$email . "<br>".$addr . "<br>".$password;


$bulk = new MongoDB\Driver\BulkWrite; // to write
$doc = ['_id' => new MongoDB\BSON\ObjectID, 'owner_name' => $ownername, 'company' => $company, 'email' => $email, 'address'=> $addr,'password'=> $password];
$bulk->insert($doc);
$manager->executeBulkWrite('testDB.Demo', $bulk);

//$query = new MongoDB\Driver\Query([]);
//$rows = $manager->executeQuery("testDB.Demo", $query);
//foreach ($rows as $row) {
	//echo "$row->name : $row->age<br>";
	//}

}
else {
  echo "failed";
}
?>
