<?php

$id = $_GET['id'];
$conn = new PDO("mysql:host=localhost;dbname=whatever", "user", "password");

$stmt = $conn->prepare("SELECT * FROM users WHERE id = '$id'");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($results);
