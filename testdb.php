<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$dbhost = "mahilabharatdb.cluster-chhncm19jeiw.ap-south-1.rds.amazonaws.com";
$dbname = "mahilabharatdb";
$dbuser = "etvmahiladbuser";
$dbpwd = "mAh!laBharAtD2Us5r";
$dbport = 5432;

echo 'connecting...';

$conn = new PDO("pgsql:host=$dbhost;port=$dbport;dbname=$dbname", $dbuser, $dbpwd);

echo $conn;

