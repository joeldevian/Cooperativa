<?php
    include("../conexion/conectar.php");
    var_dump($_POST);
    if (isset($_POST['registrarproducto'])){ 
        echo "Formulario recibido correctamente";
        if(
            strlen($_POST['nombre']) >= 1 &&
            strlen($_POST['tipo']) >= 1 &&
            strlen($_POST['precio']) >= 1 &&
            strlen($_POST['descripcion']) >= 1 
        ){
            $nombre = trim($_POST['nombre']);
            $tipo = trim($_POST['tipo']);
            $precio = trim($_POST['precio']);
            $descripcion = trim($_POST['descripcion']);
            
            $consulta = "INSERT INTO productos(Nombre,Tipo,Precio,Descripcion)
                VALUES('$nombre','$tipo','$precio','$descripcion')
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
