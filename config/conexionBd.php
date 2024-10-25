<?php
// Configuración de la base de datos
$servername = "localhost"; // Puede ser 'localhost' o una dirección IP del servidor
$username = "root";        // Usuario por defecto de MySQL en XAMPP/WAMP es 'root'
$password = "";            // Contraseña, por defecto está vacía en XAMPP/WAMP
$dbname = "ugelsurprueba"; // Nombre de la base de datos creada en PHPMyAdmin

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos '$dbname'";
}

// Aquí puedes ejecutar tus consultas SQL, por ejemplo:
// $sql = "SELECT * FROM tu_tabla";
// $result = $conn->query($sql);

// Cerrar la conexión (cuando termines de usarla)
// $conn->close();
?>
