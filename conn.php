<?php
$servername = "localhost";
$username = "root";
$password = "";
$port = 3307; // Change this to your desired port number

try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=db_member", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
