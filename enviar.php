<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enviado</title>
<meta name="descripción" content="Formulario enviado">
<meta name="palabras clave" content="Formulario">
<meta name="autor" content="Mateo Di Blasio">
<link href="font/FruitsDelight.otf" rel="font" type="font">
<link href="css/odessey&oracle-enviado.css" rel="stylesheet" type="text/css">
</head>

<header>
	<ul class="links">
	<h1 class="link"><a class="subrayado" href="historia.html">Historia</a></h1>
	<h1 class="link"><a class="subrayado" href="posters.html">Posters</a></h1>
	<a href="index.html">
		<img class="logo-header" alt="logo" src="images/Odessey and Oracle.png" width="100px">
	</a>
	<h1 class="link"><a class="subrayado" href="albumes.html">Albumes</a></h1>
	<h1 class="link"><a  class="subrayado" href="artistas.html">Artistas</a></h1>
	</ul>
</header>

<body>
<div class="php">
<?php

$nombre=$_POST["nombre"];
$email=$_POST["email"];
$comentario=$_POST["comentario"];

$destino="mail@mail.com,mail2@mail.com";
$asunto="Contacto desde el sitio";
$mensaje="Nombre: ".$nombre." Email: ".$email." Mensaje: ".$comentario;

$header="From: ".$nombre."<".$email.">";

$enviado = mail($destino,$asunto,$mensaje,$header);

if($enviado == true){
	echo "Enviado";
}else{
	echo "Error";
}

include ("conexion.php");

$consulta = mysqli_query($conexion, "INSERT INTO contactos (nombre,email,comentario) VALUES ( '$nombre','$email','$comentario')") or die(mysqli_error($conexion));

?>
</div>
<h1 class="agradecimiento">¡GRACIAS POR SU OPINIÓN!</h1>
</body>

<footer>
	<h1 class="titulo-footer">Odessey and Oracle</h1>
	<div class="redes">
		<h2 class="anuncio">¡Mantenete al día con todas las noticias del arte psicodélico!<br>
		<a class="link-inicio" href="form_login.php">Iniciar sesión / Registrarse</a>
		</h2>
	</div>
	<h3 class="formulario">Dejanos tu opinión <a  class="aca" href="formulario.html">acá</a></h3>
</footer>

</html>