<?php

$host = '127.0.0.1';
$db   = 'del_finu';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $options);

$sql = "
    SELECT *
    FROM clients
    LEFT JOIN phones
    ON clients.id = phones.client_id
";

$stmt = $pdo->query($sql);

$data = $stmt->fetchAll();

echo '<pre>';

print_r($data);