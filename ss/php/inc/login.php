<?php
if((isset($_POST["login_firstname"]))&&(!empty($_POST["login_age"]))){ 

include_once('mongo_connect.php');
	
$firstname= $_POST['login_firstname']; 
$age= $_POST['login_age']; 

//echo "<br>".$firstname."  age:".$age;

$filter = ["name"=>$firstname];
//$filter = ["age"=>["$gt"=>"18"]]; /*/
    
$options = []; /* put desired options here, should you need any */
    
$query = new MongoDB\Driver\Query($filter,$options);
    
$rows = $manager->executeQuery("testDB.Demo", $query);
foreach ($rows as $row) {
	echo "$row->name : $row->age<br>";
	}  
//foreach($cursor as $document){
//    $document = json_decode(json_encode($document),true);
//    echo $document."Cantor kings of the realm";
//	}
}
?>