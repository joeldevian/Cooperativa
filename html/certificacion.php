<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../css/certeficacion.css">
    <title>Certificación - Cooperativa Frutos del Ande</title>
</head>
<body>

    <a href="../html/main.php" class="enlace-regreso"><i class="fas fa-arrow-left"></i> Regresar</a>

  <div class="certificacion">
    <h1>Certificación</h1>
    
    <form method="post" onsubmit="return validarCertificacion()">
       
        <div class="campo">
            <label for="tipo">Tipo de Certificación:</label>
            <input type="text" id="tipo" name="tipo" required>
            <span id="errorTipo" class="mensaje-error"></span>
        </div>

        <div class="campo">
            <label for="fechaEmision">Fecha de Emisión:</label>
            <input type="date" id="fechaEmision" name="fechaEmision" required>
            <span id="errorFechaEmision" class="mensaje-error"></span>
        </div>

        <div class="campo">
            <label for="fechaExpiracion">Fecha de Expiración:</label>
            <input type="date" id="fechaExpiracion" name="fechaExpiracion" required>
            <span id="errorFechaExpiracion" class="mensaje-error" ></span>
        </div>

        <div class="campo">
            <label for="entidadEmisora">Entidad Emisora:</label>
            <input type="text" id="entidadEmisora" name="entidadEmisora" required>
            <span  id="errorEntidadEmisora" class="mensaje-error"></span>
        </div>

        <div class="campo">
            <label for="nombreProducto">Nombre del Producto:</label>
            <input type="text" id="nombreProducto" name="nombreProducto" required>
            <span id="errorNombreProducto" class="mensaje-error"></span>
        </div>

        <div class="campo">
            <label for="nombreProveedor">Nombre del Proveedor:</label>
            <input type="text" id="nombreProveedor" name="nombreProveedor" required>
            <span id="errorNombreProveedor" class="mensaje-error"></span>
        </div>
        
        <div >
            <button type="submit" name="generarcertificado">Generar Certificado</button>
        </div>
    </form>
  </div>
<script src="../js/validacionCertificacion.js"></script>
<?php 
    include("../php/registrarCertificado.php");
  ?>
</body>
</html>
