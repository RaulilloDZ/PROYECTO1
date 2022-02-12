<?php
$nombre_usuario=$_POST['nombre'];
$email_usuario=$_POST['email'];
$tel_usuario=$_POST['telefono'];
$empresa_usuario=$_POST['empresa'];
$consulta_usuario=$_POST['mensaje'];
// Creo 3 variables que me toman lo que se envía por POST de cada valor del formulario

$destino="contacto@epitco.es";

$asunto="Consulta enviada desde www.EPITCO.es";

$mensaje="Nombre: ".$nombre_usuario."\r\n";
$mensaje.="Email: ".$email_usuario."\r\n";
$mensaje.="Teléfono: ".$tel_usuario."\r\n";
$mensaje.="Empresa: ".$empresa_usuario."\r\n";
$mensaje.="Consulta: ".$consulta_usuario."\r\n";

$headers = 'From: '.$email_usuario."\r\n".

'Reply-To: '.$email_usuario."\r\n" .

@mail($destino, $asunto, $mensaje, $headers);


header("Location:contacto.php?i=ok");
// SI EL FORMULARIO SE ENVIO CORRECTAMENTE, PONEME EN LA URL DESPUES DEL INDEX.PHP UN SIGNO DE PREGUNTA, UNA LETRA I, Y UN IGUAL OK
?>
