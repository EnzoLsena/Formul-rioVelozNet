<?php

date_default_timezone_set('America/Sao_Paulo');

$host = 'bdcloud.mysql.database.azure.com';
$dbname = 'bancoveloznet';
$username = 'Cloud1213';
$password = 'Enzo@1280';

global $pdo;
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // echo "conectou";
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}