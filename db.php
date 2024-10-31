<?php
$host = 'localhost'; // O el nombre de tu servidor
$db = 'ecosistema_db';
$user = 'root'; // O tu usuario de base de datos
$pass = ''; // O tu contraseña de base de datos

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>