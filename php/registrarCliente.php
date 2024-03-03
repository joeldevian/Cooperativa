<?php
    include("../conexion/conectar.php");
    var_dump($_POST);
    if (isset($_POST['registrarcliente'])){ 
        echo "Formulario recibido correctamente";
        if(
            strlen($_POST['nombre']) >= 1 &&
            strlen($_POST['direccion']) >= 1 &&
            strlen($_POST['contacto']) >= 1 &&
            strlen($_POST['referencia']) >= 1 
        ){
            $nombre = trim($_POST['nombre']);
            $direccion = trim($_POST['direccion']);
            $contacto = trim($_POST['contacto']);
            $referencia = trim($_POST['referencia']);
            
            $consulta = "INSERT INTO cliente(Nombre,Direccion,Contacto,Referencia)
                VALUES('$nombre','$direccion','$contacto','$referencia')
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
