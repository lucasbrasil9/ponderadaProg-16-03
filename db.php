<?php
// Configurações da conexão
$host = 'tutorial-db-instance.c4zc0a8063xs.us-east-1.rds.amazonaws.com';
$db   = 'sample';
$user = 'tutorial_user';
$pass = 'lucas-es06-2025';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>
