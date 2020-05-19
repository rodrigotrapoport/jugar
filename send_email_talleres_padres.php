<?php
    //Llamando campos
    $name = _POST ['name'];
    $email = _POST['email'];
    $phone = _POST ['phone'];
    $subject = _POST ['subject'];
    $message = _POST ['message'];

    //Datos para el correo
    $destination = "info@jugarestimulacionyjuegoteca.com";
    $title = "Consulta via WEB"

    //Mensajes del correo a enviar
    $carta = "De:".$carta."\n";
    $carta .= "Email:".$email."\n";
    $carta .= "Whatsapp".$phone."\n";
    $carta .= "Interes por".$subject."\n";
    $carta .= "Mensaje:"."\n"."$menssage";

    //Llamado a la función
    mail($destination, $title, $carta );
    header(Location:mensaje_de_envio_talleres_padres.html)
?>