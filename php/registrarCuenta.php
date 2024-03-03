<?php
include("../conexion/conexion.php"); // Archivo de conexión a la base de datos

session_start(); // Iniciar sesión

if (isset($_POST['crearcuenta'])) {
    if (strlen($_POST['nombreusuario']) >= 1 && 
        strlen($_POST['contraseña']) >= 1 && 
        strlen($_POST['correoelectronico']) >= 1) {
        
        $nombreusuario = trim($_POST['nombreusuario']);
        $contraseña = trim($_POST['contraseña']);
        $correoelectronico = trim($_POST['correoelectronico']);
        // Verificar si el nombre de usuario ya está en uso
        $consulta_usuario_existente = "SELECT * FROM Usuarios WHERE NombreUsuario = '$nombreusuario'";
        $resultado_usuario_existente = mysqli_query($conex, $consulta_usuario_existente);
        
        if (mysqli_num_rows($resultado_usuario_existente) == 0) {
            // Insertar nuevo usuario en la base de datos
            $consulta = "INSERT INTO Usuarios(NombreUsuario, Contraseña, CorreoElectronico) 
                         VALUES('$nombreusuario', '$contraseña', '$correoelectronico')";
            if ($conex->query($consulta) === TRUE) {
                $_SESSION['success_message'] = "¡Cuenta creada exitosamente!";
            } else {
                $_SESSION['error_message'] = "Error al crear la cuenta: " . $conex->error;
            }
        } else {
            $_SESSION['error_message'] = "El nombre de usuario ya está en uso. Por favor, elige otro.";
        }
        
        // Redirigir al usuario de vuelta a la página actual para evitar envío duplicado de formularios
        header("Location: {$_SERVER['REQUEST_URI']}");
        exit;
    } else {
        $_SESSION['error_message'] = "Llena todos los campos";
    }
}

// Limpiar mensajes de sesión después de mostrarlos
if (isset($_SESSION['success_message'])) {
    echo "<h3 class='success'>{$_SESSION['success_message']}</h3>";
    unset($_SESSION['success_message']);
}

if (isset($_SESSION['error_message'])) {
    echo "<h3 class='error'>{$_SESSION['error_message']}</h3>";
    unset($_SESSION['error_message']);
}
?>
