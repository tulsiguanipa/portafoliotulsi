<?php
include('conexion.php');


	$nombre =$_POST['nombre'];
	$email =$_POST['email'];
	$tel =$_POST['tel'];
	$comentario =$_POST['comentarios'];

$resultado =mysqli_query($conexion, "INSERT INTO contacto (nombre,email,tel,comentario) VALUES ('$nombre','$email','$tel','$comentario') ");

if ($resultado!=0) {

	$destino = 'fl@gmail.com';
	$remitente = "From: $nombre <$email>";
	$asunto = $nombre . ' envio una consulta a traves de la WEB';
	$contenido = 'Nombre: ' . $nombre . "\r\n";
	$contenido .= 'Email: ' . $email . "\r\n";
	$contenido .= 'Telefono: ' . $tel . "\r\n";
	$contenido .= 'Comentario: ' . $comentario . "\r\n";

	$remitente_usuario = "From: Sitio web <flx64@gmail.com>";
	$asunto_usuario = 'Aviso de recibo de Consulta';
	$contenido_usuario = 'Hola ' . $nombre . ' enviaste el siguiente comentario ' . $comentario . "\r\n";
	$contenido_usuario .= 'A la brevedad nos comunicaremos';

	mail($destino,$asunto,$contenido,$remitente);
	mail($email,$asunto_usuario,$contenido_usuario,$remitente_usuario);

	header('location:contacto.php?envio=ok#contacto'); 
	//header > redireccionar envio=ok

} else{
	header('location:contacto.php?envio=error#contacto');
}

?>