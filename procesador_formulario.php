<?php
include('conexion.php');

	$nombre =$_POST['nombre'];
	$email =$_POST['email'];
	$comentario =$_POST['comentarios'];

$resultado =mysqli_query($conexion, "INSERT INTO idconsulta (nombre,email,comentario) VALUES ('$nombre','$email','$comentario') ");

if ($resultado!=0) {

	$destino = 'tulsiguanipa@gmail.com';
	$remitente = "From: $nombre <$email>";
	$asunto = $nombre . ' envio una consulta a traves de la WEB';
	$contenido = 'Nombre: ' . $nombre . "\r\n";
	$contenido .= 'Email: ' . $email . "\r\n";
	$contenido .= 'Comentario: ' . $comentario . "\r\n";

	$remitente_usuario = "From: Sitio web <tulsiguanipa@gmail.com>";
	$asunto_usuario = 'Aviso de recibo de Consulta';
	$contenido_usuario = 'Hola ' . $nombre . ' enviaste el siguiente comentario ' . $comentario . "\r\n";
	$contenido_usuario .= 'A la brevedad nos comunicaremos';

	mail($destino,$asunto,$contenido,$remitente);
	mail($email,$asunto_usuario,$contenido_usuario,$remitente_usuario);

	header('location:index.php?envio=ok#contact'); 
	//header > redireccionar envio=ok

} else{
	header('location:index.php?envio=error#contact');
}

?>