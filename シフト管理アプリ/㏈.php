<?php

$host = "localhost";
$dbname = "shift_app";
$user = "root";
$pass = "";

try{
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $user,
        $pass
    );
}catch(PDOException $e){
    die("接続失敗:".$e->getMessage());
}