<?php
if((isset($_POST["sing_in_email"]))&&(!empty($_POST["sing_in_email"]))){

include_once('mongo_connect.php');

$email= $_POST['sing_in_email'];
$password= $_POST['sing_in_password'];

echo "<br>".$email."  age:".$password;

// test
///////////////////////////////////////////////////////////
// var_dump($manager);
// // $bulk = new MongoDB\Driver\BulkWrite; // to write
// // $doc = ['_id' => new MongoDB\BSON\ObjectID, 'email' => $email, 'password' => $password];
// // $bulk->insert($doc);
// // $manager->executeBulkWrite('testDB.Demo', $bulk);
//
//
// $query = new MongoDB\Driver\Query([]);
// $rows = $manager->executeQuery("testDB.Demo", $query);
// foreach ($rows as $row) {
// 	echo "$row->name : $row->age<br>";
// 	}
//


// almost ready
///////////////////////////////////////////////////////////
// $filter = [ "email" => $email , "password" => $password ];
// $options = [];
// $query = new MongoDB\Driver\Query($filter, $options);
// $rows = $manager->executeQuery("testDB.Demo", $query); // $mongo contains the connection object to MongoDB
// foreach($rows as $r){
   // echo $r->email."<br>";
// }

/////////////// not in used
//foreach($cursor as $document){
//    $document = json_decode(json_encode($document),true);
//    echo $document." $document";
//	}
}else {
  echo "failed";
}
?>
