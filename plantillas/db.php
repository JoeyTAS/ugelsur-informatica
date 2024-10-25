<?php
$host = 'localhost'; // Cambia si es necesario
$db = 'mi_base_de_datos';
$user = 'root'; // Cambia por tu usuario
$pass = ''; // Cambia por tu contraseña

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>