<?php
$nombre = $_POST['name'];
$correo = $_POST['email'];
$consulta = $_POST['message'];

$to= "mariandominguez88@gmail.com";
$subject ="Nuevo mensaje web";
$message =  "Nombre: " .$nombre . "\r\n" .
            "Correo: " . $correo . "\r\n" .
            "Mensaje: " . $consulta . "\r\n";


if(mail($to, $subject, $message )){
    echo "<br> Mensaje enviado";
} else {
    echo "Ha ocurrido un problema, intentalo más tarde."
}
?>