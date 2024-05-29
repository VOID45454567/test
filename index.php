<?php


require_once 'connect.php';

$connection = new mysqli($host, $user, $pass, $db);
if ($connection->connect_error) {
    die('Connection failed:');
}