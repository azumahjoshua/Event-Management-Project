<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'siststudentportal';
// Create connection
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
  return $conn;
  // echo "Connected successfully";
} catch(PDOException $e) {
     echo "Can not connect to data base";
  echo "Connection failed: " . $e->getMessage();
}
