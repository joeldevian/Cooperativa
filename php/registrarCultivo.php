<?php
    include("../conexion/conectar.php");
    var_dump($_POST);
    if (isset($_POST['registrarcultivo'])){ 
        echo "Formulario recibido correctamente";
        if(
            strlen($_POST['tipo']) >= 1 &&
            strlen($_POST['temporada']) >= 1 &&
            strlen($_POST['cantidadProduccion']) >= 1 &&
            strlen($_POST['areaCultivo']) >= 1 
        ){
            $Tipo= trim($_POST['tipo']);
            $temporada = trim($_POST['temporada']);
            $cantidadProduccion = trim($_POST['cantidadProduccion']);
            $areaCultivo = trim($_POST['areaCultivo']);
            
            $consulta = "INSERT INTO cultivo(Tipo,Temporada,Cantidad,Area)
                VALUES('$Tipo','$temporada','$cantidadProduccion','$areaCultivo')
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
