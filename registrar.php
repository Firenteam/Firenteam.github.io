<!--archivo que realiza el procesamiento de datos para despues enviarmlos a con_db.php osea la base de datos-->
<?php 
// Incluir el archivo de conexión a la base de datos
include("con_db.php");

// Verificar si se ha enviado el formulario de registro y si los campos no están vacíos
if (isset($_POST['register']) && strlen($_POST['email']) >= 1 && strlen($_POST['contraseña']) >= 1) {
    // Obtener y limpiar los datos del formulario
    $email = trim($_POST['email']);
    $contraseña = trim($_POST['contraseña']);
    $fechareg = date("d/m/Y", strtotime("now")); // Formato día/mes/año

    // Verificar si el correo electrónico tiene el formato adecuado
    if (strpos($email, "@gmail.com") !== false) {
        // Verificar si el correo electrónico ya está en uso
        $consulta_verificar = "SELECT * FROM datos WHERE email='$email'";
        $resultado_verificar = mysqli_query($conex, $consulta_verificar);

        // Si el correo electrónico ya está registrado, mostrar un mensaje de error
        if (mysqli_num_rows($resultado_verificar) > 0) {
            ?> 
            <h3 class="bad">¡El correo electrónico ya está registrado!</h3>
            <?php
        } else {
            // Insertar los datos en la base de datos si el correo electrónico no está duplicado
            $consulta_insertar = "INSERT INTO datos (email, contraseña, fecha_reg) VALUES ('$email', '$contraseña', '$fechareg')";
            $resultado_insertar = mysqli_query($conex, $consulta_insertar);
            
            // Mostrar mensajes de éxito o error según el resultado de la inserción
            if ($resultado_insertar) {
                ?> 
                <h3 class="ok">¡Te has inscrito correctamente!</h3>
                <?php
            } else {
                ?> 
                <h3 class="bad">¡Ups, ha ocurrido un error!</h3>
                <?php
            }
        }
    } else {
        ?> 
        <h3 class="bad">¡Por favor utiliza una dirección de correo electrónico válida!</h3>
        <?php
    }
} elseif (isset($_POST['register'])) {
    ?> 
    <h3 class="bad">¡Por favor complete los campos obligatorios!</h3>
    <?php
}
?>
