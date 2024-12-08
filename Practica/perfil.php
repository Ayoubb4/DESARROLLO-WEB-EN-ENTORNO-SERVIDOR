<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

$usuario = $_SESSION['usuario'];
$rol = $_SESSION['rol'];

$titulo = "Bienvenido, $usuario";
$contenido = '';

switch ($rol) {
    case 'usuario':
        $contenido = '<p>Tu Membresia: Basica</p>
                      <a href="clases.php">Ver Clases</a>';
        break;

    case 'profesor':
        $contenido = '<p>Clases y Usuarios</p>';
        break;

    case 'admin':
        $contenido = '<p>Gestion Completa</p>';
        break;

    default:
        $contenido = '<p>Rol no reconocido</p>';
        break;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil</title>
</head>
<body>
    <h1><?php echo $titulo; ?></h1>
    <a href="logout.php">Cerrar Sesion</a>
    <div>
        <?php echo $contenido; ?>
    </div>
</body>
</html>
