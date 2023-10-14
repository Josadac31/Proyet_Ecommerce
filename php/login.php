<?php
// Se utiliza para llamar al archivo que contiene la conexión a la base de datos
require 'conexion.php';

// Mensajes de error y bienvenida
$mensajeError = "";
$mensajeBienvenida = "";

// Validamos que el formulario y que el botón login haya sido presionado
if (isset($_POST['login'])) {

    // Obtener los valores enviados por el formulario
    $usuario = $_POST['nombre_user'];
    $contrasena = $_POST['contrasena_user'];

    // Crear una consulta preparada para evitar la inyección de SQL
    $sql = "SELECT * FROM usuarios WHERE nombre_user = ? AND contrasena_user = ?";
    
    if ($stmt = mysqli_prepare($conexion, $sql)) {
        // Vincular los parámetros
        mysqli_stmt_bind_param($stmt, "ss", $usuario, $contrasena);

        // Ejecutar la consulta preparada
        mysqli_stmt_execute($stmt);

        // Obtener el resultado
        $resultado = mysqli_stmt_get_result($stmt);

        // Contar el número de filas en el resultado
        $numero_registros = mysqli_num_rows($resultado);

        if ($numero_registros != 0) {
            // Mensaje de bienvenida
            $mensajeBienvenida = "¡Registro exitoso! Bienvenido, $usuario.";
            header("refresh:1;url=../index.html");

        } else {
            // Mensaje de error
            $mensajeError = "Credenciales inválidas. Por favor, verifica tu nombre de usuario y/o contraseña.";
            // Redireccionar a la página de inicio de sesión después de 3 segundos
            header("refresh:3;url=../login.html");
        }

        // Cerrar la consulta preparada
        mysqli_stmt_close($stmt);
    } else {
        // Mensaje de error en caso de error en la consulta preparada
        $mensajeError = "Error en la consulta SQL.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <!-- El mensaje de error se muestra dentro del HTML -->
    <?php if (!empty($mensajeError)) : ?>
        <h1 class="Error"><?php echo $mensajeError; ?></h1>
    <?php endif; ?>
    
    <!-- Ventana modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h1 class="message"><?php echo $mensajeBienvenida; ?></h1>
        </div>
    </div>

    <script>
        // Obtener la ventana modal
        var modal = document.getElementById("myModal");

        // Obtener el botón para cerrar la ventana modal
        var closeButton = document.getElementsByClassName("close")[0];

        // Mostrar la ventana modal cuando hay un mensaje de bienvenida
        <?php if (!empty($mensajeBienvenida)) : ?>
            modal.style.display = "block";
        <?php endif; ?>

        // Cerrar la ventana modal cuando se hace click en el botón de cerrar
        closeButton.onclick = function() {
            modal.style.display = "none";
        }

        // Cerrar la ventana modal cuando se hace click en cualquier parte fuera de la ventana modal
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>
</html>
