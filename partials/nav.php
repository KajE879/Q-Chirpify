<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Chirpify</title>
</head>
<?php session_start(); ?>

<body>
    <script src="js/main.js"></script>
    <nav>
        <a href="index.php">
            <img src="img/logo.png" alt="">
        </a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="settings.php">Settings</a></li>
            <li><a href="profile.php">Profile</a></li>
            <button class="post-button" onclick="openPopup()">Post</button>
        </ul>
    </nav>