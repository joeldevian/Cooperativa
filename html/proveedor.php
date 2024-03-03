<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Proveedores - Cooperativa Frutos del Ande</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../css/proveedor.css">
</head>
<body>
    <a href="../html/main.php" class="enlace-regreso"><i class="fas fa-arrow-left"></i> Regresar</a>

  <div class="registro-proveedores">
    <h1>Registro de Proveedores</h1>
    
    <form method="post" onsubmit="return validarProveedor()">
        <div class="campo">
            <label for="nombre">Nombre del Proveedor:</label>
            <input type="text" id="nombre" name="nombre" required>
            <span id="errorNombre" class="mensaje-error"></span>
        </div>

        <div class="campo">
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" required>
            <span id="errorDireccion" class="mensaje-error"></span>
        </div>

        <div class="campo">
            <label for="contacto">Contacto:</label>
            <input type="text" id="contacto" name="contacto" required>
            <span id="errorContacto" class="mensaje-error"> </span>
        </div>

        <div class="campo">
            <label for="tipoInsumo">Tipo de Insumo:</label>
            <input type="text" id="tipoInsumo" name="tipoInsumo" required>
            <span id="errorInsumo" class="mensaje-error"></span>
        </div>

        <div class="campo">
            <label for="terminosContrato">Términos del Contrato:</label>
            <textarea id="terminosContrato" name="terminosContrato" required></textarea>
            <span id="errorTerminosContrato" class="mensaje-error"></span>
        </div>

        <div class="campo">
            <label for="fechaContrato">Fecha de Contrato:</label>
            <input type="date" id="fechaContrato" name="fechaContrato" required>
            <span id="errorFechaContrato" class="mensaje-error"></span>
        </div>

        <div class="campo">
            <label for="fechaFinalizacion">Fecha de Finalización de Contrato:</label>
            <input type="date" id="fechaFinalizacion" name="fechaFinalizacion" required>
            <span id="errorFechaFinalizacion" class="mensaje-error" ></span>
        </div>

        <div >
            <button type="submit" name ="registrarproveedor">Registrar Proveedor</button>
        </div>
    </form>
  </div>
<script src="../js/validacionProveedor.js"></script>
<?php 
    include("../php/registrarProveedor.php");
  ?>
</body>
</html>
