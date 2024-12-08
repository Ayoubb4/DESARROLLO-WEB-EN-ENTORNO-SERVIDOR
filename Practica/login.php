<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];

    if ($nombre === $_COOKIE['ultimo_usuario'] && strlen($contrasena) == 6) {
        $_SESSION['usuario'] = $nombre;
        $_SESSION['rol'] = $_POST['rol'];
        header("Location: perfil.php");
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form method="post">
        <input type="text" name="nombre" placeholder="Usuario" required>
        <input type="password" name="contrasena" placeholder="Contraseña" required>
        <select name="rol">
            <option value="usuario">Usuario</option>
            <option value="profesor">Profesor</option>
            <option value="admin">Administrador</option>
        </select>
        <button type="submit">Entrar</button>
    </form>
    <?php if (isset($error)){echo "<p>$error</p>";} ?>
</body>
</html>
