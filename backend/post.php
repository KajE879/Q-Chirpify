<?php
require "database/dbconn.php";

$sql = "SELECT message.id, message.content, message.user_id, users.username 
        FROM message 
        JOIN users ON message.user_id = users.id 
        ORDER BY message.id DESC";
$stmt = $conn->prepare($sql);
$stmt->execute();
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);