<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Iniciar Sesion</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;1,300&family=Sen:wght@400;500;700&family=Teko:wght@300;400;500;700&family=Titillium+Web:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/iniciarSesion.css">
</head>
<body>
    <section class="login-container">
        <div class="login-form">
            <h2>Iniciar Sesión</h2>
            <form method="post">
                <div class="campo">
                    <label for="usuario">Usuario:</label>
                    <input type="text" name="nombreusuario" required>
                    <span id="errorUsuario" class="mensaje-error"></span>
                </div>
                
                <div class="campo">
                    <label for="contrasena">Contraseña:</label>
                    <input type="password" name="contraseña" required>
                    <span id="errorContrasena" class="mensaje-error"></span>
                </div>
                <div class="boton-registrar">
                    <button type="submit" name="iniciarsesion">Iniciar Sesión</button>
                </div>

                <p><a href="#">Olvidaste tu contraseña</a></p>            
            </form>
            
            <p>No tienes cuenta? <a href="./crearCuenta.php">Regístrate</a></p>
        </div>

        <div class="login-image">
            <!-- Aquí puedes agregar la etiqueta img con la ruta de tu foto -->
        </div>
    </section>
    <?php
    include("../php/registrarSesion.php")
    ?>
</body>
</html>