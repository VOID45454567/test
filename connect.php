<?php

$driver = 'mysql';
$host = 'localhost';
$name = 'project';
$user = 'root';
$password = 'mysql';
$charset = 'utf8';
$options = [PDO::MYSQL_ATTR_INIT_COMMAND => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new PDO("$driver:host=$host;dbname=$name", $user, $password, $options);
}catch (PDOException $e){
    die("Connection failed:");
}



