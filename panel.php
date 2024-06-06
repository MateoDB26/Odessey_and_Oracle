<?php session_start();?>
<!doctype html>
<html lang="Español">
<head>
<meta charset="utf-8">
<title>Panel de usuario</title>
<meta name="descripción" content="">
<meta name="palabras clave" content="">
<meta name="autor" content="Mateo Di Blasio">
<link href="css/FruitsDelight.otf" rel="font" type="font">
<link href="css/odessey&oracle-panel.css" rel="stylesheet" type="text/css">
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
<?php

if(isset($_SESSION['nombre']) and isset($_SESSION['apellido']) ){
	
echo "<h4>Últimas noticias:</h4>";
echo "<p><img class='noticia' src='images/Noticia.png' /></p>";
echo "<a href='salir.php' class='link'><h6>Cerrar sesión</h6></a>";

	
}else{
	echo "<h4>Solo usuarios registrados...</h4>";
	echo "<a href='form_registro.php' class='link'><h6>Registrarse</h6></a>";
	echo "<p><img class='logo' src='images/zombies.png' /></p>";
}
?>
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