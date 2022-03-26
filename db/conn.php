<?php
$servername = "localhost";
$username = "root";
$password = "Sayan@2407";
$dbname = "attendance";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage());
    // echo "Connection Failed " . $e->getMessage();
}

require_once 'crud.php';
$crud = new crud($conn);
