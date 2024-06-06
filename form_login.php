<!doctype html>
<html lang="Español">
<head>
<meta charset="utf-8">
<title>Formulario de Log In</title>
<meta name="descripción" content="">
<meta name="palabras clave" content="">
<meta name="autor" content="Mateo Di Blasio">
<link href="css/FruitsDelight.otf" rel="font" type="font">
<link href="css/odessey&oracle-formulariologin.css" rel="stylesheet" type="text/css">
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
	<h2 class="titulo">Logueate</h2>
	<form class="container" action="login.php" method="post">
    	<label class="form-label">Nombre de usuario
        	<input class="form-control" name="usuario" type="text"/>
        </label>
        <label class="form-label">Contraseña
        	<input class="form-control" type="password" name="password"/>
        </label>
		<label>
        	<input class="boton" type="submit" value="Ingresar"/>
		</label>
    </form>
    <text class="mensaje"><a class="link-registro" href="form_registro.php">Registrate</a>, si no sos usuario.</text>

<img alt="logo"  class="logo" src="images/zombies.png">
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
