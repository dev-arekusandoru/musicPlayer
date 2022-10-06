<?php
$user = "musicLogger";
$password = "jE[v[q8C6PLLAxZ[";

try {
    $pdo = new PDO("mysql:dbname=MusicDB;host=localhost",$user, $password);
} catch (PDOException $e){
    echo $e->getMessage();
    exit();
}