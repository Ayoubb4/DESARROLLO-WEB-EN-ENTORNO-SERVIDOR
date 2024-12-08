<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clases</title>
</head>
<body>
    <h1>Clases Disponibles</h1>
    <ul>
        <li>Yoga</li>
        <li>Pilates</li>
        <li>Spinning</li>
    </ul>
</body>
</html>
