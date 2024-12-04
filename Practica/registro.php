<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombreUsuario = $_POST['nombreUsuario'];
    $constraseña = $_POST['constraseña'];
    $rol = $_POST['rol'];

    if (preg_match('/[a-zA-Z]{6,}/', $nombreUsuario) && preg_match('/[a-zA-Z0-9]{6}/', $constraseña)) {
        $_SESSION['usuario'] = $nombreUsuario;
        $_SESSION['rol'] = $rol;
        header('Location: login.php');
        exit();
    } else {
        echo 'Error en la validacion del formulario.';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>
    <h1>Formulario de Registro</h1>
    <form action="registro.php" method="POST">
        <label for="nombreUsuario">Nombre de usuario:</label>
        <input type="text" name="nombreUsuario" required><br>

        <label for="constraseña">Contraseña:</label>
        <input type="password" name="constraseña" required><br>

        <label for="rol">Rol:</label>
        <select name="rol">
            <option value="usuario">Usuario</option>
            <option value="profesor">Profesor</option>
            <option value="administrador">Administrador</option>
        </select><br>

        <button type="submit">Registrarse</button>
    </form>
</body>
</html>
