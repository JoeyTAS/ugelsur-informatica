<?php
// Incluir archivo de conexión
require 'config/conexionBd.php'; // Archivo con la conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturar y sanitizar datos
    $dni = filter_input(INPUT_POST, 'floating_dni', FILTER_SANITIZE_STRING);
    $nombres = filter_input(INPUT_POST, 'floating_first_name', FILTER_SANITIZE_STRING);
    $apellidos = filter_input(INPUT_POST, 'floating_last_name', FILTER_SANITIZE_STRING);
    $telefono = filter_input(INPUT_POST, 'floating_phone', FILTER_SANITIZE_STRING);
    $correo = filter_input(INPUT_POST, 'floating_email', FILTER_SANITIZE_EMAIL);
    $rol = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_STRING);
    $contraseña = filter_input(INPUT_POST, 'floating_password', FILTER_SANITIZE_STRING); // Sin cifrar

    // SQL para insertar datos
    $sql = "INSERT INTO usuarios (dni, nombres, apellidos, telefono, correo, rol, contraseña)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssssss", $dni, $nombres, $apellidos, $telefono, $correo, $rol, $contraseña);
        
        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "Registro exitoso";
            header('Location: index.php'); // Redirige al index después de registrar
            exit();
        } else {
            echo "Error en el registro: " . $stmt->error;
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
    <title>Registro</title>
    <link rel="stylesheet" href="css/styleRegistro.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1 class="form-title">Registro</h1>
            <form method="POST" action="registro.php">
                <!-- Campos del formulario -->
                <div class="form-group">
                    <input type="text" name="floating_dni" id="floating_dni" class="form-input" placeholder=" " required />
                    <label for="floating_dni" class="form-label">DNI</label>
                </div>
                <div class="form-group">
                    <input type="text" name="floating_first_name" id="floating_first_name" class="form-input" placeholder=" " required />
                    <label for="floating_first_name" class="form-label">Nombres</label>
                </div>
                <div class="form-group">
                    <input type="text" name="floating_last_name" id="floating_last_name" class="form-input" placeholder=" " required />
                    <label for="floating_last_name" class="form-label">Apellidos</label>
                </div>
                <div class="form-group">
                    <input type="tel" name="floating_phone" id="floating_phone" class="form-input" placeholder=" " />
                    <label for="floating_phone" class="form-label">Teléfono</label>
                </div>
                <div class="form-group">
                    <input type="email" name="floating_email" id="floating_email" class="form-input" placeholder=" " required />
                    <label for="floating_email" class="form-label">Correo Electrónico</label>
                </div>
                <!-- Campo de selección de rol -->
                <div class="form-group">
                    <select name="role" id="role" class="form-input" required>
                        <option value="" disabled selected>Seleccione un rol</option>
                        <option value="SuperAdmin">SuperAdmin</option>
                        <option value="Admin">Admin</option>
                        <option value="Usuario">Usuario</option>
                    </select>
                    <label for="role" class="form-label">Rol</label>
                </div>
                <div class="form-group">
                    <input type="password" name="floating_password" id="floating_password" class="form-input" placeholder=" " required />
                    <label for="floating_password" class="form-label">Contraseña</label>
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

