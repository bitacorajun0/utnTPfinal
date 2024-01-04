<?php

$nombre_form = $_POST['nombre'];
$signoZodiacal_form = $_POST['signo'];
$mail_form = $_POST['mail'];


//envio de mails
$cuerpo_mail = 
$nombre_form . "\r\n".
"Queridx signo ". $signoZodiacal_form . "\r\n".
", gracias por registrarte!";

mail("laffarguejuno@gmail.com", "Mensaje enviado desde mi sitio en UTN PHP", $cuerpo_mail);


header("Location: BD.php?ok");

$conexion = mysqli_connect('localhost','id21631221_jmartinez','Admin%1234','id21631221_utnphp') or exit("No se pudo conectar a la base de datos");

mysqli_query($conexion, "INSERT INTO consulta VALUES(DEFAULT, '$nombre_form','$signoZodiacal_form','$mail_form'");

mysqli_close($conexion);

/*
    $sql = "INSERT INTO consulta (nombre, signo, mail) VALUES ('$nombre_form', '$signoZodiacal_form', '$mail_form')";

    if (mysqli_query($conexion, $sql)) {

        $destinatario = "laffarguejuno@gmail.com";
        $asunto = "Muchas gracias por registrarte";
        $mensaje = "Espero que tengas un lindo día!";

        // Intenta enviar el correo
        if (mail($destinatario, $asunto, $mensaje)) {
            echo "<p>Datos insertados correctamente y correo enviado</p>";
        } else {
            // Muestra información detallada sobre el error de correo
            $error_info = error_get_last();
            echo "<p>Datos insertados correctamente, pero hubo un error al enviar el correo. Detalles: " . $error_info['message'] . "</p>";
        }

        header("Location: index.php");
        exit();
    } else {
        echo "Error en la inserción de datos: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}
*/