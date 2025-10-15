<?php
$mensaje = '';
$color = 'red';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger datos
    $nombre = trim($_POST['nombre'] ?? '');
    $usuario = trim($_POST['usuario'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $password2 = $_POST['password2'] ?? '';

    $errores = [];

    // Validar
    if (empty($nombre)) $errores[] = "El nombre es obligatorio.";
    if (empty($usuario)) $errores[] = "El usuario es obligatorio.";
    if (strlen($usuario) < 3 || strlen($usuario) > 20) $errores[] = "El usuario debe tener 3-20 caracteres.";
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errores[] = "Email inválido.";
    if (empty($password)) $errores[] = "La contraseña es obligatoria.";
    if (strlen($password) < 5) $errores[] = "La contraseña debe tener al menos 5 caracteres.";
    if ($password !== $password2) $errores[] = "Las contraseñas no coinciden.";

    // Verificar si ya existe el usuario o email
    $archivo = 'usuarios.json';
    $usuarios_existentes = file_exists($archivo) ? json_decode(file_get_contents($archivo), true) : [];

    foreach ($usuarios_existentes as $u) {
        if ($u['usuario'] === $usuario) {
            $errores[] = "El nombre de usuario ya está en uso.";
            break;
        }
        if ($u['email'] === $email) {
            $errores[] = "El correo ya está registrado.";
            break;
        }
    }

    if (empty($errores)) {
        // Guardar nuevo usuario (¡contraseña segura!)
        $nuevo = [
            'nombre' => htmlspecialchars($nombre),
            'usuario' => htmlspecialchars($usuario),
            'email' => htmlspecialchars($email),
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ];

        $usuarios_existentes[] = $nuevo;
        file_put_contents($archivo, json_encode($usuarios_existentes, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

        $mensaje = "¡Registro exitoso! Puedes iniciar sesión.";
        $color = "green";
    } else {
        $mensaje = implode("<br>", $errores);
    }
}
?>
