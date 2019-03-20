<?php
if((isset($_POST["signup_firstname"]))&&(!empty($_POST["signup_age"]))){ 

include_once('mongo_connect.php');
	
$firstname= $_POST['signup_firstname']; 
$age= $_POST['signup_age']; 

echo "<br>".$firstname."  age:".$age;

$bulk = new MongoDB\Driver\BulkWrite;
$doc = ['_id' => new MongoDB\BSON\ObjectID, 'name' => $firstname, 'age' => $age];
$bulk->insert($doc);
$manager->executeBulkWrite('testDB.Demo', $bulk);

$query = new MongoDB\Driver\Query([]); 
$rows = $manager->executeQuery("testDB.Demo", $query);
foreach ($rows as $row) {
	echo "$row->name : $row->age<br>";
	}

}
?>