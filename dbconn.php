<?php
$username = "root";
$password = "";

try{    
    $conn = new PDO("mysql:host=localhost;dbname=mydb", $username, $password);    
    echo "Succesvolle database verbinding!";
}catch (PDOException $foutmelding){    
    echo $foutmelding->getMessage();
}
?>
