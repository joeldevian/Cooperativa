<?php
//conectando cliente
$conex = mysqli_connect("localhost", "root", "", "cooperativaagraria");
mysqli_set_charset($conex, 'utf8');




// Verificar la conexión
if (!$conex) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
} else {
    echo "Conexión exitosa!";
}
?>
