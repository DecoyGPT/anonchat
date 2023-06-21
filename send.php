<?php
$host = 'localhost';
$db   = 'chatroom';
$user = 'root';
$pass = '';

$message = $_POST['message'];

$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
$stmt = $pdo->prepare('INSERT INTO messages (content) VALUES (:content)');
$stmt->execute(['content' => $message]);