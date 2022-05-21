<?php

// A simple PHP script that prints some JSON and tests database connectivity

header('Content-Type: application/json');

$host = getenv('MYSQL_HOST');
$username = getenv('MYSQL_USERNAME');
$password = getenv('MYSQL_PASSWORD');
$dbName = getenv('MYSQL_DATABASE');

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
    $message = 'Database connection successful.';
} catch(PDOException $e) {
    $message = 'Database connection failed: ' . $e->getMessage();
}

echo json_encode([
    'greeting' => 'Hello world!',
    'time' => date(DATE_ISO8601),
    'message' => $message,
]);
