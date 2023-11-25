<?php

include("conect.php");
if (isset($_POST['contacto'])) {
    if (
    strlen($_POST['nombre']) >= 1 && 
    strlen($_POST['email']) >= 1 && 
    strlen($_POST['telefono']) >= 1 && 
    strlen($_POST['mensaje']) > 1) 
    {
        $name = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['telefono']);
        $message = trim($_POST['mensaje']);
        $fecha = date("d/m/y");
        $consulta = "INSERT INTO contacto(nombre, email, telefono, mensaje, fecha) 
        VALUES ('$name', '$email', '$phone', '$message', '$fecha')";
        $resultado = mysqli_query($conn ,$consulta);
        if ($resultado) {
            ?>
            <h3 class="success">Tu registro se a completado</h3>
            <?php
        } else {
            ?>
            <h3 class="error">Ocurrio un error</h3>
            <?php
        }
    } else {
        ?>
        <h3 class="error">LLena todos los campos</h3>
        <?php
    }
}
?> 