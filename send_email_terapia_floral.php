<?php
    //Llamando campos
    $nombre = $_POST['name'];
    $mail = $_POST['email'];
    $phone = $_POST ['phone'];
    $subject = $_POST ['subject'];
    $msj = $_POST['message'];
    
    $header = 'From: ' . $mail . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";
    
    $mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
    $mensaje .= "Su e-mail es: " . $mail . " \r\n";
    $mensaje .= "Se Whatsapp es:" . $phone . " \r\n";
    $mensaje .= "Mensaje: " . $msj . " \r\n";
    $mensaje .= "Su servicio de interes es:". $subject . " \r\n";
    $mensaje .= "Enviado el " . date('d/m/Y', time());
    
    $para = 'info@jugarestimulacionyjuegoteca.com';
    $asunto = 'CONSULTA WEB';
    
    mail($para, $asunto, utf8_decode($mensaje), $header);
    header("Location:mensaje_de_envio_terapia_floral.html");
?>