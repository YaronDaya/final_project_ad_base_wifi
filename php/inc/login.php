<?php
if((isset($_POST["sing_in_email"]))&&(!empty($_POST["sing_in_email"]))){

include_once('mongo_connect.php');

$email= $_POST['sing_in_email'];
$password= $_POST['sing_in_password'];

//echo "<br>".$firstname."  age:".$age;

$filter = ["email"=>$email, "password" => $password];
//$filter = ["age"=>["$gt"=>"18"]]; /*/

$options = []; /* put desired options here, should you need any */

$query = new MongoDB\Driver\Query($filter,$options);

$rows = $manager->executeQuery("testDB.Demo", $query);
foreach ($rows as $row) {
	echo "$row->email : $row->password <br>";
	}
//foreach($cursor as $document){
//    $document = json_decode(json_encode($document),true);
//    echo $document."Cantor kings of the realm";
//	}
}else {
  echo "failed";
}
?>
