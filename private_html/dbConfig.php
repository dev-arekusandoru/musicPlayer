<?php
$user = "musicLogger";
$password = "EWyuaziFXVfPfBnp";

try {
    $pdo = new PDO("mysql:dbname=MusicDB;host=localhost",$user, $password);
} catch (PDOException $e){
    echo $e->getMessage();
    exit();
}