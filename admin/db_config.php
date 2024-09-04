<?php
$dsn = 'mysql:host=localhost;dbname=koder360_koder360';
$username = 'koder360_koder360';
$password = 'o=Q-~m_A^r;y';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
