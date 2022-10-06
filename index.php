<?php
header("Content-type: application/json");
$myObj=new \stdClass();

$myObj->id = rand(1000,9999);
$myObj->age = rand(10, 50);
$myObj->income = rand(10000, 50000);


$myJSON = json_encode($myObj);
echo $myJSON;


