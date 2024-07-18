<?php
$host = 'localhost';
$dbname = 'test';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('set names utf8mb4');
} catch (PDOException $e) {
    require 'errors/error500.php';
    die();
    //die(print_r($e->getMessage()));
}
date_default_timezone_set("Asia/Bangkok");