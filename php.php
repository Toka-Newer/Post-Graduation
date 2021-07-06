<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'project';

//set DSN 
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

// create a PDO instance
try {
    $pdo = new PDO($dsn, $user, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    // echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }



