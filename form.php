<?php

    $nombre = $_POST ["name"]
    $email = $_POST ["email"]
    $mensaje = $_POST ["textarea"]

    $mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
    $mensaje .= "Su email es: " . $email . ",\r\n";
    $mensaje .= "Mensaje: " . $_POST["mensaje"] . ",\r\n";
    $mensaje .= "Enviado el " . date('d/m/y', time()) . ",\r\n";

    $para = 'info@m3racing.com.ar'
    $asunto = 'Este mail fue enviado desde la web M3Racing.com'

    mail($para, $asunto, utf8_decode($mensaje), $header);4

    header('Location:exito.html');

?>