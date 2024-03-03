<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../css/cliente.css">
    <title>Registro de Clientes - Cooperativa Frutos del Ande</title>
    
</head>
<body>

    <a href="../html/main.php" class="enlace-regreso"><i class="fas fa-arrow-left"></i> Regresar</a>

  <div class="registro-clientes">
    <h1>Registro de Clientes</h1>
    <form  id="miFormulario" method="post" onsubmit="return validarRegistro()">
        <div class="campo">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <span id="errorNombre" class="error"></span>
        </div>

        <div class="campo">
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" required>
            <span id="errorDireccion" class="error"></span>
        </div>

        <div class="campo">
            <label for="contacto">Contacto:</label>
            <input type="text" id="contacto" name="contacto" required>
            <span id="errorContacto" class="error"></span>

        </div>

        <div class="campo">
            <label for="referencia">Referencia:</label>
            <textarea id="referencia" name="referencia" required></textarea>
            <span id="errorReferencia" class="error"></span>
        </div>

        <div >
            <button type="submit" name="registrarcliente">Registrar Cliente</button>
        </div>   
    </form>
  </div>
  <script src="../js/validacionRegistro.js" ></script>
  <?php 
    include("../php/registrarCliente.php");
  ?>
</body>
</html>
