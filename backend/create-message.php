<?php
session_start();
require "../database/dbconn.php";

$message = $conn->prepare("INSERT INTO message (content, user_id) VALUES (:content, :user_id)");
$message->bindParam(":content", $_POST['content']);
$message->bindParam(":user_id", $_SESSION['user_id']);
$message->execute();

header("Location: ../index.php");
