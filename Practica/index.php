<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header("Location: perfil.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
</head>
<body>
    <h1>Bienvenido al Gym</h1>
    <a href="registro.php">Registrarse</a>
    <p></p>
    <a href="login.php">Iniciar Sesion</a>
</body>
</html>
