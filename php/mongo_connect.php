<?php
$manager = new MongoDB\Driver\Manager('mongodb+srv://catifi:catifi2019@cluster0-xx7l9.gcp.mongodb.net/test?retryWrites=true');
//var_dump($manager);
//$stats = new MongoDB\Driver\Command(["dbstats" => 1]);
//    $res = $manager->executeCommand("testDB", $stats);
//    $stats = current($res->toArray());
//    print_r($stats);

//$bulk = new MongoDB\Driver\BulkWrite;
//$doc = ['_id' => new MongoDB\BSON\ObjectID, 'name' => 'test2', 'age' => 42];
//$bulk->insert($doc);
//$manager->executeBulkWrite('testDB.Demo', $bulk);
//
//$query = new MongoDB\Driver\Query([]); 
//$rows = $manager->executeQuery("testDB.Demo", $query);
//foreach ($rows as $row) {
//	echo "$row->name : $row->age<br>";
//	}
	
?>