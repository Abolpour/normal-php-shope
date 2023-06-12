<?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName="ninja";


  $conn = new PDO("mysql:host=$servername;dbname=$databaseName", $username, $password);
  // set the PDO error mode to exception
  $stmt=$conn->prepare("select * from shops");
  $stmt->execute();
  $shops=$stmt->setFetchMode(pdo::FETCH_ASSOC);
  var_dump($stmt->fetchall());
?> 