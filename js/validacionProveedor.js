// validacionProveedor.js
function validarProveedor(){
    var nombre           = document.getElementById('nombre').value;
    var direccion = document.getElementById('direccion').value;
    var contacto = document.getElementById('contacto').value;
    var tipoInsumo  = document.getElementById('tipoInsumo').value;
    var terminosContrato = document.getElementById('terminosContrato').value;
    var fechaContrato = document.getElementById('fechaContrato').value;
    var fechaFinalizacion = document.getElementById('fechaFinalizacion').value;
    
    var errorNombre            = document.getElementById('errorNombre');
    var errorDireccion   = document.getElementById('errorDireccion');
    var errorContacto = document.getElementById('errorContacto');
    var errorInsumo = document.getElementById('errorInsumo');
    var errorTerminosContrato = document.getElementById('errorTerminosContrato');
    var errorFechaContrato = document.getElementById('errorFechaContrato');
    var errorFechaFinalizacion = document.getElementById('errorFechaFinalizacion');


    // Limpiar mensajes de error
    errorNombre.innerText = '';
    errorDireccion.innerText = ''; 
    errorContacto.innerText = '';
    errorInsumo.innerText = '';
    errorTerminosContrato.innerText = '';
    errorFechaContrato.innerText = '';
    errorFechaFinalizacion.innerText = '';


    // Validar nombre
    if (!/^[a-zA-Z\s]+$/.test(nombre)) {
        errorNombre.innerText = 'El nombre solo puede contener letras y espacios';
        return false;
    }

    // Validar Dirección
    if (direccion.trim() === '') {
        errorDireccion.innerText = 'Por favor, ingrese una dirección válida';
        return false;
    }

    // Validar contacto
    var regexTelefono = /^[0-9]{9}$/; // Ahora se espera un formato de 9 dígitos
    if (!regexTelefono.test(contacto)) {
        errorContacto.innerText = 'Por favor, ingrese un número de teléfono válido con 9 dígitos';
        return false;
    }

    // Validar tipo de insumo
    if (!/^[a-zA-Z\s]+$/.test(tipoInsumo)) {
        errorInsumo.innerText = 'El nombre del insummo solo puede contener letras y espacios';
        return false;
    }

    //validar terminos de contrato
    /*
    if (!/^[a-zA-Z\s]+$/.test(terminosContrato)) {
        errorTerminosContrato.innerText = 'Los términos del contrato solo puede contener letras y espacios';
        return false;
    }
    //validar fecha de contrato 
   const fechaActual = new Date();
   const fechaContratoDate = new Date(fechaContrato);
   if (!fechaContrato) {
       errorFechaContrato.innerText = "Por favor, ingrese la fecha";
       return false;
   }
   if (fechaContratoDate <= fechaActual) {
    errorFechaContrato.innerText = "La fecha de pedido no puede ser igual o anterior a la fecha actual";
    return false;
}
   // validar fecha de finalizacion
   if (fechaFinalizacion  < fechaContrato) {
       errorFechaFinalizacion.innerText = "Por favor, ingrese la fecha ";
       return false;
   }
    // Si la validación pasa, podrías enviar los datos al servidor o realizar otras acciones
    return true;
    */
}

