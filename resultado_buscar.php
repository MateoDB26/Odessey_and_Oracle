<!doctype html>
<html lang="Español">
<head>
<meta charset="utf-8">
<title>Resultado</title>
<meta name="descripción" content="">
<meta name="palabras clave" content="">
<meta name="autor" content="Mateo Di Blasio">
<link href="font/FruitsDelight.otf" rel="font" type="font">
<link href="css/odessey&oracle-resultado.css" rel="stylesheet" type="text/css">
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
	<h1 class="titulo-resultado">Resultado de tu búsqueda:</h1>
	<div class="container">
	<div class="consulta">
		<?php
	include('conexion.php');

	$buscar = $_POST['buscar'];
	echo "<h2>Su consulta: <em>".$buscar."</em></h2><br>";

	$consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%' OR bio LIKE '%$buscar%' ");
		?>
		</div>
<article style="width:85%;margin:0 auto;">
	<p class="cantidad">Cantidad de Resultados: 
	<?php
		$nros=mysqli_num_rows($consulta);
		echo $nros;
	?>
	</p>
    
	<?php
		while($resultados=mysqli_fetch_array($consulta)) {
	?>
    <p class="resultado">
    <?php	
			echo $resultados['nombre'];
			echo $resultados['bio'];
	?>
    </p>
    <?php
		}

		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>
	</div>
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
