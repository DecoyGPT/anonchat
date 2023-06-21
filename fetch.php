<?php
$host = 'localhost';
$db   = 'chatroom';
$user = 'root';
$pass = '';

$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
$stmt = $pdo->query('SELECT * FROM messages ORDER BY timestamp ASC');

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo htmlentities($row['timestamp']) . ' : ' . htmlentities($row['content']) . "<br />";
}