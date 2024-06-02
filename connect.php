<?php

$driver = 'mysql';
$host = 'localhost';
$name = 'project';
$user = 'root';
$password = 'mysql';
$charset = 'utf8';
$options  = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

try {
    $pdo = new PDO("$driver:host=$host;dbname=$name", $user, $password, $options);
} catch (PDOException $e) {
    die('Connection failed:');
};