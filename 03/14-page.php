<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    
    if ($usuario === 'admin' && $contrasena === '1234') {
        echo "<h3>¡Login exitoso! Bienvenido, $usuario</h3>";
    } else {
        echo "<h3>Error: Usuario o contraseña incorrectos</h3>";
    }
    echo "<p><a href=''>Volver</a></p>";
    exit;
}
?>

<form method="post">
    <h3>Simulación de login</h3>
    <input type="text" name="usuario" placeholder="Usuario" required>
    <input type="password" name="contrasena" placeholder="Contraseña" required>
    <button type="submit">Iniciar sesión</button>
    <p>Usuario: admin, Contraseña: 1234</p>
</form>