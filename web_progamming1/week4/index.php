<?php

try{
    $pdo = new PDO('mysql:host=localhost;dbname=week4db;charset=utf8mb4', 'root','');
    // $output = "Data Connection Established";
    $sql ='SELECT joketext FROM joke';
    $jokes = $pdo->query($sql);

}catch(PDOException $e){

    // $output="Unable to connect to the database server: ".$e;
    $error ="Unable to connect to the database server: ".$e;

}

include 'templates/jokes.html.php';

?>