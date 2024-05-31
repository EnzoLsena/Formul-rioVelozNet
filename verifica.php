<?php

date_default_timezone_set('America/Sao_Paulo');

$host = 'localhost';
$dbname = 'veloznet';
$username = 'root';
$password = '';

global $pdo;
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // echo "conectou";
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}