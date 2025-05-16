<?php
$host = getenv("MYSQLHOST") ?: "localhost";
$db = getenv("MYSQLDATABASE") ?: "nombre_de_tu_base";
$user = getenv("MYSQLUSER") ?: "usuario";
$pass = getenv("MYSQLPASSWORD") ?: "contraseña";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
