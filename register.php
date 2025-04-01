<?php 

require "dbconn.php";

$hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['email']) && !empty($_POST['email']));
$insert_user = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
$insert_user->bindParam(":username", $_POST['username']);
$insert_user->bindParam(":email", $_POST['email']);
$insert_user->bindParam(":password", $hash);
$insert_user->execute();

header("location: index.php");
