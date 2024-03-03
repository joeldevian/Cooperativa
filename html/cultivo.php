<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cultivo.css">
    <title>Registro de Cultivos - Cooperativa Frutos del Ande</title>
</head>
<body>

  <div class="registro-cultivos">
    <h1>Registro de Cultivos</h1>
    
    <form method="post" onsubmit=" return validarCultivo()">
        <div class="campo">
            <label for="tipo">Tipo de Cultivo:</label>
            <input type="text" id="tipo" name="tipo" required>
            <span id="errorTipo" class="mensaje-error"></span>
        </div>

        <div class="campo">
            <label for="temporada">Temporada:</label>
            <input type="text" id="temporada" name="temporada" required>
            <span id ="errorTemporada" class="mensaje-error"></span>
        </div>

        <div class="campo">
            <label for="cantidadProduccion">Producción Estimada:</label>
            <input type="number" id="cantidadProduccion" name="cantidadProduccion" step="0.01" required>
            <span id="errorCantidadProduccion" class="mensaje-error"></span>
        </div>

        <div class="campo">
            <label for="areaCultivo">Área de Cultivo:</label>
            <input type="number" id="areaCultivo" name="areaCultivo" step="0.1" required>
            <span id="errorAreaCultivo" class="mensaje-error"></span>
        </div>

        <div >
            <button type="submit" name="registrarcultivo">Registrar Cultivo</button>
        </div>
    </form>
  </div>
<script src="../js/validacionCultivo.js"></script>
<?php
    include("../php/registrarCultivo.php")
?>
</body>
</html>
