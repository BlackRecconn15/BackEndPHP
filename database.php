<?php

$host = "localhost";
$db = "contacts_app";
$user = "root";
$pwd = "";

try{
  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
  // foreach ($conn->query("SHOW DATABASES") as $row){
  //   print_r($row);
  // }
} catch (PDOException $e){
  die("PDO Connection Error: " . $e->getMessage());
}
