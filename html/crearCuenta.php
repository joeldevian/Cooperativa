<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Cuenta</title>
    <link rel="stylesheet" href="../css/crearCuenta.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="register-box">
            <h2>Crear Cuenta</h2>
            <form method="post">
                <div class="input-group">
                    <input type="text" name="nombreusuario" required>
                    <label for="">Nombre de Usuario</label>
                </div>
                <div class="input-group">
                    <input type="password" name="contraseña" required>
                    <label for="">Contraseña</label>
                </div>
                <div class="input-group">
                    <input type="email" name="correoelectronico" required>
                    <label for="">Correo Electrónico</label>
                </div>
                <button type="submit" name="crearcuenta">Crear Cuenta</button>
            </form>
        </div>
    </div>
    <?php
    include("../php/registrarCuenta.php")
    ?>
</body>
</html>
