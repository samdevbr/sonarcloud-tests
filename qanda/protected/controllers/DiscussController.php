<?php

$id = $_GET['id'];
$conn = new PDO("mysql:host=localhost;dbname=whatever", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);

$stmt = $conn->prepare("SELECT * FROM users WHERE id = :id");
$stmt->execute([
    "id" => $id
]);

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($results);
