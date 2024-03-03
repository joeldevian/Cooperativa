<?php
    include("../conexion/conectar.php");
    var_dump($_POST);
    if (isset($_POST['registrarproveedor'])){ 
        echo "Formulario recibido correctamente";
        if(
            strlen($_POST['nombre']) >= 1 &&
            strlen($_POST['direccion']) >= 1 &&
            strlen($_POST['contacto']) >= 1 &&
            strlen($_POST['tipoInsumo']) >= 1 &&
            strlen($_POST['terminosContrato']) >= 1 &&
            strlen($_POST['fechaContrato']) >= 1 &&
            strlen($_POST['fechaFinalizacion']) >= 1 

        ){
            $nombre = trim($_POST['nombre']);
            $direccion = trim($_POST['direccion']);
            $contacto = trim($_POST['contacto']);
            $tipoInsumo = trim($_POST['tipoInsumo']);
            $terminosContrato = trim($_POST['terminosContrato']);
            $fechaContrato = trim($_POST['fechaContrato']);
            $fechaFinalizacion = trim($_POST['fechaFinalizacion']);
            
            $consulta = "INSERT INTO proveedor(Nombre,Direccion,Contacto,Insumo,Contrato,Inicio,Finalizacion)
                VALUES('$nombre','$direccion','$contacto','$tipoInsumo','$terminosContrato','$fechaContrato','$fechaFinalizacion')
                ";
            $resultado = mysqli_query($conex, $consulta);
            if($resultado){
                echo "Consulta ejecutada correctamente";
                ?>
                <h3 class = "success"> Tu registro es a completado </h3>
                <?php
            }else{
                ?>
                <h3 class="error"> Ocurrio un error </h3>
                <?php
            }
        }else{
            ?>
                <h3 class="error">Complete todo los campos </h3>
            <?php
        }
    }
?>
