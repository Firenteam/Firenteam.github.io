<!--Archivo de coneccion a base de datos-->
<!--una variable que conecta con la base de datos el primer parametro es el servidor, el segundo es el nombre de usuario, por defecto no tiene contraseña y el ultimo es la base de datos en si--> 
<?php

$conex = mysqli_connect("localhost","root","","registro"); 
$conex->set_charset=("utf=8");
?>