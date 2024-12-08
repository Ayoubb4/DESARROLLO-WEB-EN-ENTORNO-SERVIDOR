<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];
    $rol = $_POST['rol'];

    if (preg_match('/^(?=.*[a-z])(?=.*[A-Z]).{6,}$/', $nombre)/* Nombre de usuario (debe contener mínimo 6 letras, combinando mayúsculas y
    minúsculas). */ 
    && 
        preg_match('/^(?=.*[a-zA-Z])(?=.*\d).{6}$/', $contrasena))/* Contraseña (debe contener exactamente 6 dígitos que contengan letras y números) */ 
        {
        
        setcookie('ultimo_usuario', $nombre, time() + 3600); // Cookie 1hora
        header("Location: login.php");
        exit();
    } else {
        $error = "Nombre o contraseña no cumplen los requisitos.";
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
    <h1>Registro</h1>
    <form method="post">
        <input type="text" name="nombre" placeholder="Usuario" required>
        <input type="password" name="contrasena" placeholder="Contraseña" required>
        <select name="rol">
            <option value="usuario">Usuario</option>
            <option value="profesor">Profesor</option>
            <option value="admin">Administrador</option>
        </select>
        <button type="submit">Registrarse</button>
    </form>
    <?php if (isset($error)){echo "<p>$error</p>";}?>
</body>
</html>
