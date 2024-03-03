<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Pedidos - Cooperativa Frutos del Ande</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../css/pedido.css">
</head>
<body>

    <a href="../html/main.php" class="enlace-regreso"><i class="fas fa-arrow-left"></i> Regresar</a>

  <div class="registro-pedidos">
    <h1>Registro de Pedidos</h1>
    
    <form method="post" onsubmit="return validarPedido()">
        <div class="campo">
            <label for="cliente">Cliente:</label>
            <input type="text" id="cliente" name="cliente" required>
            <span id="errorCliente" class="mensaje-error"></span>
        </div>

        <div class="campo">
            <label for="fecha">Fecha de Pedido:</label>
            <input type="date" id="fechaPedido" name="fecha" required>
            <span id="errorFechaPedido" class="mensaje-error"></span>
        </div>

        <div class="campo">
            <label for="detalles">Detalles:</label>
            <textarea id="detallesPedido" name="detalles" required></textarea>
            <span id="errorDetallePedido" class="mensaje-error"></span>
        </div>

        <div class="campo">
            <label for="estado">Estado:</label>
            <select id="estado" name="estado" required>
                <option value="pendiente">Pendiente</option>
                <option value="en_proceso">En Proceso</option>
                <option value="entregado">Entregado</option>
            </select>
            <span id="errorEstadoPedido" class="mensaje-error"></span>
        </div>

        <div >
            <button type="submit" name="registrarpedido">Registrar Pedido</button>
        </div>
    </form>
  </div>
<script src="../js/validacionPedido.js"></script>
<?php 
    include("../php/registrarPedido.php");
  ?>
</body>
</html>