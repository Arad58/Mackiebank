<?php

// Things for the database
$host = "localhost";
$dbname = "mackiebank";
$username = "root";
$password = "Arad2003!";

try {
    // Makes new PDO for database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Makes PDO error for attribute
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Makes messages if user succeeds or fails
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
