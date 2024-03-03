<?php
    include("../conexion/conectar.php");
    var_dump($_POST);
    if (isset($_POST['generarcertificado'])){ 
        echo "Formulario recibido correctamente";
        if(
            strlen($_POST['tipo']) >= 1 &&
            strlen($_POST['fechaEmision']) >= 1 &&
            strlen($_POST['fechaExpiracion']) >= 1 &&
            strlen($_POST['entidadEmisora']) >= 1 &&
            strlen($_POST['nombreProducto']) >= 1 &&
            strlen($_POST['nombreProveedor']) >= 1 
        ){
            $tipo = trim($_POST['tipo']);
            $fechaEmision = trim($_POST['fechaEmision']);
            $fechaExpiracion = trim($_POST['fechaExpiracion']);
            $entidadEmisora = trim($_POST['entidadEmisora']);
            $nombreProducto = trim($_POST['nombreProducto']);
            $nombreProveedor = trim($_POST['nombreProveedor']);
            
            $consulta = "INSERT INTO certificacion (Tipo, FechaEmision, FechaExpiracion, EntidadEmisora, NombreProducto, NombreProveedor)
                VALUES('$tipo','$fechaEmision','$fechaExpiracion','$entidadEmisora','$nombreProducto','$nombreProveedor')
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
