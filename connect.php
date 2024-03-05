<?php

$host = "localhost";
$dbname = "mackiebank";
$username = "root";
$password = "Arad2003!";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Makes PDO error to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}