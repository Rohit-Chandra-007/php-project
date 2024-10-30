<?php
$host = "localhost";
$port = 3306;
$userName = "chandra";
$password = "";
$db = "blogs";

$dsn = "mysql:host={$host};dbname={$db};port={$port};charset=utf8";

try {
    $pdo = new PDO($dsn, $userName, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // fetch as associative array
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
