<?php 

include("con_db.php"); /*coneccion con la coneccion de la base de datos*/ 


if (!empty($_POST['btningresar'])) /*condicional para verificar si apreto el ingresar*/ {
    if (empty($_POST['email']) and empty($_POST['contraseña'])) /*condicion si estan completo los campos*/{
        echo '<div class="alert alert-danger">los campos estan vacios</div>';
    } else {
        $_email=$_POST['email'];
        $_contraseña=$_POST['contraseña'];
        $sql=$conex->query("select * from datos where email='$_email' and contraseña='$_contraseña'");
        if ($datos=$sql->fetch_object()) {
            header ("location:index.html");
        } else {
            echo '<div class="alert alert-danger">Acceso denegado</div>';
        }
        
}
}
?>