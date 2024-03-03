// validacionPedido.js
function validarPedido(){
    var cliente              = document.getElementById('cliente').value;
    var fechaPedido          = document.getElementById('fechaPedido').value;
    var detallesPedido       = document.getElementById('detallesPedido').value;
    var estado      = document.getElementById('estado').value;

    var errorCliente             = document.getElementById('errorCliente');
    var errorFechaPedido         = document.getElementById('errorFechaPedido');
    var errorDetallePedido       = document.getElementById('errorDetallePedido');
    var errorEstadoPedido        = document.getElementById('errorEstadoPedido');
    
    // Limpiar mensajes de error
    errorCliente.innerText = '';
    errorFechaPedido.innerText = ''; 
    errorDetallePedido.innerText = '';
    errorEstadoPedido.innerText = '';

    // Validar cliente
    if (!/^[a-zA-Z\s]+$/.test(cliente)) {
        errorCliente.innerText = 'El nombre del cliente  solo puede contener letras y espacios';
        return false;
    }

    // Validar fecha de pedido
    const fechaActual = new Date();
    const fechaPedidoDate = new Date(fechaPedido);
    if (!fechaPedido) {
        errorFechaPedido.innerText = "Por favor, ingrese la fecha de pedido";
        return false;
    }
    if (fechaPedidoDate <= fechaActual) {
        errorFechaPedido.innerText = "La fecha de pedido no puede ser igual o anterior a la fecha actual";
        return false;
    }

    // Validar los detalles del pedido
    if (!/^[a-zA-Z0-9\s]+$/.test(detallesPedido)) {
        errorDetallePedido.innerText = 'En este campo solo puede proporcionar letras, números y espacios';
        return false;
    }


    // Validar estado de cultivo
    if (estado !== "pendiente" && estado !== "En Proceso" && estado !== "Entregado" ) {
        errorEstadoPedido.innerText = 'Seleccione un estado de pedido';
        return false;
    }
    // Si la validación pasa, podrías enviar los datos al servidor o realizar otras acciones
    return true;
}
