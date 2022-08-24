<?php
$conn = new PDO("mysql:host=localhost;dbname=database", $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);

$id = preg_replace("[^0-9]", "", $_GET['id']);

$query = $conn->prepare("SELECT * FROM users WHERE id = '$id'");
$query->execute();

$user = $query->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <label>Username:</label> <span><?= $user['username']; ?></span><br>
    <label>Email:</label> <span><?= $user['email']; ?></span>
    <label>Description:</label> <span><?= $user['description']; ?></span>
</html>
