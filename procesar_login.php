<?php
// Credenciales fijas (¡en producción usa base de datos y contraseñas hasheadas!)
//define('USUARIO_VALIDO', 'Chris502');
//define('CONTRASENA_VALIDA', '4721');

$mensaje = '';
$color = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //$username = $_POST['username'] ?? '';
    //$password = $_POST['password'] ?? '';

    $username = "Chris502";
    $password = "4721";
    if ($username === USUARIO_VALIDO && $password === CONTRASENA_VALIDA) {
        $mensaje = "¡Inicio de sesión exitoso!";
        $color = "green";
        // Aquí normalmente redirigirías o iniciarías una sesión
        // session_start(); $_SESSION['usuario'] = $username;
    } else {
        $mensaje = "Usuario o contraseña incorrectos.";
        $color = "red";
    }
}
?>

