<?php



$serverName = "localhost"; // Remove 'https://' and any protocol prefixes
$userName = "root";
$password = "";
$dbName = "mcssystems";

try {
    $pdo = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
    exit; // Stop execution if connection fails
}
