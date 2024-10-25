<?php
include 'db.php';

// Crear
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['crear'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, email) VALUES (?, ?)");
    $stmt->execute([$nombre, $email]);
}

// Leer
$stmt = $pdo->query("SELECT * FROM usuarios");
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Actualizar
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['actualizar'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    $stmt = $pdo->prepare("UPDATE usuarios SET nombre = ?, email = ? WHERE id = ?");
    $stmt->execute([$nombre, $email, $id]);
}

// Eliminar
if (isset($_GET['eliminar'])) {
    $id = $_GET['eliminar'];
    $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
    $stmt->execute([$id]);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD con PHP</title>
</head>
<body>

<h2>Crear Usuario</h2>
<form method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="email" name="email" placeholder="Email" required>
    <button type="submit" name="crear">Crear</button>
</form>

<h2>Lista de Usuarios</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
        <td><?php echo $usuario['id']; ?></td>
        <td><?php echo $usuario['nombre']; ?></td>
        <td><?php echo $usuario['email']; ?></td>
        <td>
            <form method="POST" style="display:inline;">
                <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
                <input type="text" name="nombre" value="<?php echo $usuario['nombre']; ?>" required>
                <input type="email" name="email" value="<?php echo $usuario['email']; ?>" required>
                <button type="submit" name="actualizar">Actualizar</button>
            </form>
            <a href="?eliminar=<?php echo $usuario['id']; ?>">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>