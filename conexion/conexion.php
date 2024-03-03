<?php
$conex = mysqli_connect("localhost", "root", "", "andelogin");  //Conexión a la base de datos
mysqli_set_charset($conex, 'utf8');//Se establece el juego de caracteres utf-8 para que se puedan insertar acentos y otros caracter
mysqli_set_charset($conex, 'utf8');//Se establece el juego de caracteres utf-8 para que se muestren correctamente los acentos

//Recibimos los datos del formulario por POST y realizamos las consultas correspondientes

?>