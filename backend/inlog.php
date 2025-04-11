<?php 
session_start();

require "../database/dbconn.php";

$stmt = $conn->prepare("SELECT * FROM users WHERE username =:username");
$stmt->bindParam(":username", $_POST['username']);
$stmt->execute();
$users = $stmt->fetch();
var_dump($_POST['password']);

if (password_verify($_POST['password'], $users['password'])){
    $_SESSION['username'] = $users['username'];
    $_SESSION['user_id'] = $users['id'];
    header("location: ../index.php");
}else{
    header("location: ../inlog-form.php");
}