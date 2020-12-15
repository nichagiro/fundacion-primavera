<?php

$nombre = $_POST['name'];
$correo = $_POST['email'];
$telefono = $_POST['phone'];
$mensaje = $_POST['msg'];


if($nombre == '' | $correo == '' | $telefono == '' | $mensaje == '') {

    echo json_encode('error');

}   else {
    
    $to = "administracion@fundacionprimavera.org";
    $subject = "Nuevo mensaje desde pagina web";
    $message = "Nombre: $nombre".
                "\nTelefono: $telefono".
                "\nMensaje: $mensaje";


    $headers = "From:". $correo;



    mail($to, $subject, $message, $headers);


    echo json_encode('ok');


    }