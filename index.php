<?php


require_once 'app/database/connect.php';

$connection = new mysqli($host, $user, $password, $name);
if ($connection->connect_error) {
    die('Connection failed:');
}