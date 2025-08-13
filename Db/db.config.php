<?php



$serverName = "localhost"; // Remove 'https://' and any protocol prefixes
$userName = "root";//u115172255_mcsUser 
$password = "";//c8M8UMp@&
$dbName = "mcssystems";//u115172255_MCS

try {
    $pdo = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
    exit; // Stop execution if connection fails
}
