<?php
$host = "localhost";
$dbname = "hevxdbsfcs_ingexpert";
$user = "hevxdbsfcs_ingexpert";
$pass = "A8?6u,T`~e";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (Exception $e) {
    die("Erreur connexion base de données");
}
