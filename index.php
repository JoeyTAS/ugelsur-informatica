<?php
// Incluir archivo de conexión
require 'config/conexionBd.php'; // Archivo con la conexión a la base de datos
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturar y sanitizar datos
    $dni = filter_input(INPUT_POST, 'floating_dni', FILTER_SANITIZE_STRING);
    $contraseña = filter_input(INPUT_POST, 'floating_password', FILTER_SANITIZE_STRING);

    // Preparar la consulta para verificar el usuario
    $sql = "SELECT id, nombres, apellidos, contraseña, rol FROM usuarios WHERE dni = ?";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $dni);
        $stmt->execute();
        $stmt->store_result();

        // Verificar si existe un registro con el DNI proporcionado
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $nombres, $apellidos, $stored_password, $rol);
            $stmt->fetch();

            // Verificar la contraseña
            if ($contraseña === $stored_password) { // Verificación directa sin hash
                // Crear variables de sesión
                $_SESSION['id'] = $id;
                $_SESSION['nombres'] = $nombres;
                $_SESSION['apellidos'] = $apellidos;
                $_SESSION['rol'] = $rol;

                // Redirigir al usuario a la página de inicio (puedes cambiar la URL a la página que desees)
               
                header("Location: paginas/resources.php");

                exit();
            } else {
                // Contraseña incorrecta
                echo "<script>alert('Error: Contraseña incorrecta.'); window.location.href = '/index.php';</script>";
            }
        } else {
            // DNI no encontrado
            echo "<script>alert('Error: Usuario no encontrado.'); window.location.href = '/index.php';</script>";
        }

        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/styleindex.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1 class="form-title">Iniciar Sesión</h1>
            <form method="post" action="index.php"> <!-- Corregido el method y action -->
                <div class="form-group">
                    <input type="text" name="floating_dni" id="floating_dni" class="form-input" placeholder=" " required />
                    <label for="floating_dni" class="form-label">DNI</label>
                </div>
                <div class="form-group">
                    <input type="password" name="floating_password" id="floating_password" class="form-input" placeholder=" " required />
                    <label for="floating_password" class="form-label">Contraseña</label>
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="remember_password" id="remember_password" class="checkbox" />
                        Recordar contraseña
                    </label>
                </div>
                <button type="submit" class="submit-button">Enviar</button>
            </form>
        </div>
        <div class="box">
            <img src="img/ugelsur.png" alt="Descripción de la imagen" class="box-image" />
        </div>
    </div>
</body>
</html>
