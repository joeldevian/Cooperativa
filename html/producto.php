<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Productos - Cooperativa Frutos del Ande</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../css/producto.css">
</head>
<body>

    <a href="../html/main.php" class="enlace-regreso"><i class="fas fa-arrow-left"></i> Regresar</a>
    
  <div class="registro-productos">
    <h1>Registro de Productos</h1>
    
    <form method="post" onsubmit="return validarProducto()">
        <div class="campo">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <span id="errorNombre" class="mensaje-error"></span>
        </div>

        <div class="campo">
            <label for="tipo">Tipo:</label>
            <input type="text" id="tipo" name="tipo" required>
            <span id="errorTipo" class="mensaje-error"></span>
        </div>

        <div class="campo">
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" step="0.01" required>
            <span id="errorPrecio" class="mensaje-error"></span>
        </div>

        <div class="campo">
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" required></textarea>
            <span  id="errorDescripcion" class="mensaje-error"></span>
        </div>

        <div >
            <button type="submit" name="registrarproducto">Registrar Producto</button>
        </div>
    </form>
  </div>
<script src="../js/validacionProducto.js"></script>
<?php 
    include("../php/registrarProducto.php");
  ?>
</body>
</html>
