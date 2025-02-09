<?php
$host = 'localhost';
$dbname = 'spotify_cloneV0';
$user = 'postgres';
$password = 'Safaa.Yassir10';

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

