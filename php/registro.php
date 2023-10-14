<?php
require 'conexion.php';

// Inicializa las variables de mensaje
$mensajeError = '';
$mensajeBienvenida = '';

if (isset($_POST['registro'])) {
    $usuario = $_POST['nombre_user'];
    $contrasena = $_POST['contrasena_user'];
    $correo = $_POST['correo_user'];

    $sql = "INSERT INTO usuarios (nombre_user, contrasena_user, correo_user) VALUES ('$usuario', '$contrasena', '$correo')";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        // Registro exitoso
        $mensajeBienvenida = "¡Registro exitoso! Bienvenido, $usuario.";
		header("refresh:1;url=../index.html");
    } else {
        // Error en el registro
        $mensajeError = "Error al registrar el usuario. Por favor, inténtalo nuevamente.";
		header("refresh:3;url=../registro.html");

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <!-- Mensajes de error y bienvenida -->
    <?php
    if (isset($mensajeError)) {
        echo '<h1 class="error">' . $mensajeError . '</h1>';
    }
    if (isset($mensajeBienvenida)) {
        echo '<h1 class="bienvenida">' . $mensajeBienvenida . '</h1>';
    }
    ?>

</body>
</html>

