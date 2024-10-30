<?php
require "database/index.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method'], $_POST['id'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM posts WHERE id = :id";
    $statement = $pdo->prepare($sql);
    $params = ['id' => $id];
    $statement->execute($params);
    header("Location: index.php");
    exit;
}
