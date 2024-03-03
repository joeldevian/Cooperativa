<?php
include("../conexion/conexion.php"); // Archivo de conexión a la base de datos

session_start(); // Iniciar sesión

if (isset($_POST['iniciarsesion'])) {
    if (strlen($_POST['nombreusuario']) >= 1 && 
        strlen($_POST['contraseña']) >= 1) {
        
        $nombreusuario = trim($_POST['nombreusuario']);
        $contraseña = trim($_POST['contraseña']);
        
        // Verificar las credenciales del usuario
        $consulta_credenciales = "SELECT * FROM Usuarios WHERE NombreUsuario = '$nombreusuario' AND Contraseña = '$contraseña'";
        $resultado_credenciales = mysqli_query($conex, $consulta_credenciales);
        
        if (mysqli_num_rows($resultado_credenciales) == 1) {
            // Inicio de sesión exitoso
            $_SESSION['nombreusuario'] = $nombreusuario;
            $_SESSION['success_message'] = "¡Inicio de sesión exitoso!";
            header("Location: ../html/main.php"); // Redirigir a la página principal después del inicio de sesión
            exit;
        } else {
            $_SESSION['error_message'] = "Nombre de usuario o contraseña incorrectos";
        }
        
        // Redirigir al usuario de vuelta a la página actual para evitar envío duplicado de formularios
        header("Location: {$_SERVER['REQUEST_URI']}");
        exit;
    } else {
        $_SESSION['error_message'] = "Por favor, llena todos los campos";
        header("Location: {$_SERVER['REQUEST_URI']}");
        exit;
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



