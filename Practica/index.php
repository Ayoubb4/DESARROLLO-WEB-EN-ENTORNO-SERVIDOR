<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header('Location: perfil.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gimnasio - Inicio</title>
</head>
<body>
    <h1>Bienvenido al Sistema de Gestión del Gimnasio</h1>
    <a href="registro.php">Registrar Usuario</a><br>
    <a href="login.php">Iniciar Sesión</a>
</body>
</html>