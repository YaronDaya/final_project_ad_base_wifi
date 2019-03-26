<?php
include_once('mongo_connect.php');
$options = [];
$filter=db.testDB.find();
$query = new MongoDB\Driver\Query($filter,$options);
$rows = $manager->executeQuery("testDB.Demo", $query);
echo "this is find func ".$row;

?>
