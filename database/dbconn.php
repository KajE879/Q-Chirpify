<?php
$username = "root";
$password = "";

try{    
    $conn = new PDO("mysql:host=localhost;dbname=mydb", $username, $password);    
}catch (PDOException $foutmelding){    
    echo $foutmelding->getMessage();
}