<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style2.css"> <!--coneccion con los estilos-->
</head>
<body>
    <!--formulario en si-->
    <form method="post">
    	<h1>¡Registrate!</h1>
    	<input type="email" name="email" placeholder="Email"> <!--lugar del email-->
		<input type="text" name="contraseña" placeholder="contraseña"> <!--lugar del nombre-->
    	<input type="submit" name="register"> <!--boton de enviar-->
    </form>
        <?php 
        include("registrar.php"); /*coneccion con el archivo que raliza el procesamiento de datos*/
        ?>
</body>
</html>