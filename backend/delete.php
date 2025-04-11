<?php
session_start();
require "../database/dbconn.php";

if (isset($_POST['message_id'])) {
    $message_id = $_POST['message_id'];
    $user_id = $_SESSION['user_id'];

    $stmt = $conn->prepare("DELETE FROM message WHERE id = :id AND user_id = :user_id");
    $stmt->bindParam(':id', $message_id);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->execute();
}

header("Location: ../index.php");