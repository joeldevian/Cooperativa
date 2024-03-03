// validacionCultivo.js
function validarCultivo(){
    var tipo                = document.getElementById('tipo').value;
    var temporada           = document.getElementById('temporada').value;
    var cantidadProduccion  = document.getElementById('cantidadProduccion').value;
    var areaCultivo         = document.getElementById('areaCultivo').value;

    var errorTipo               = document.getElementById('errorTipo');
    var errorTemporada          = document.getElementById('errorTemporada');
    var errorCantidadProduccion = document.getElementById('errorCantidadProduccion');
    var errorAreaCultivo        = document.getElementById('errorAreaCultivo');
    
    // Limpiar mensajes de error
    errorTipo.innerText = '';
    errorTemporada.innerText = ''; 
    errorCantidadProduccion.innerText = '';
    errorAreaCultivo.innerText = '';

    // Validar tipo
    if (!/^[a-zA-Z\s]+$/.test(tipo)) {
        errorTipo.innerText = 'El Tipo de cultivo solo puede contener letras y espacios';
        return false;
    }

    // Validar temporada
    /*
    if (temporada !== "Verano" && temporada !== "Invierno" && temporada !== "Otoño" && temporada !== "Primavera") {
        errorTemporada.innerText = 'La temporada no es válida';
        return false;
    }
    */
   
    // Validar Cantidad de produccion
    if (isNaN(cantidadProduccion) || cantidadProduccion < 0) {
        errorCantidadProduccion.innerText = 'Ingresa una cantidad de producción válida';
        return false;
    }

    // Validar área de cultivo
    if (isNaN(areaCultivo) || areaCultivo < 0) {
        errorAreaCultivo.innerText = 'Ingresa un área de cultivo válida';
        return false;
    }

   
    // Si la validación pasa, podrías enviar los datos al servidor o realizar otras acciones
    return true;
}
