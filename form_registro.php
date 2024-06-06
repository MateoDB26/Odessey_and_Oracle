<!doctype html>
<html lang="Español">
<head>
<meta charset="utf-8">
<title>Formulario de registro</title>
<meta name="descripción" content="">
<meta name="palabras clave" content="">
<meta name="autor" content="Mateo Di Blasio">
<link href="css/FruitsDelight.otf" rel="font" type="font">
<link href="css/odessey&oracle-formularioregistro.css" rel="stylesheet" type="text/css">
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
	<h2 class="titulo">Registrate en el sitio</h2>
	
	<div class="todo">
    <form class="container" action="registro.php" method="post" >
    	<label class="form-label">Nombre<br>
        	<input class="form-control" type="text" name="nombre" required />
        </label><br />
		<label class="form-label">Apellido<br>
        	<input class="form-control" type="text" name="apellido" required />
        </label><br />
        <label class="form-label">Email<br>
        	<input class="form-control" type="email" name="email" required />
        </label><br />
        <label class="form-label">Nombre de usuario<br>
        	<input class="form-control" name="usuario" type="text" maxlength="12" />
        </label><br />
        <label class="form-label">Contraseña<br>
        	<input class="form-control" type="password" name="password" maxlength="12" />
        </label><br />

        <input class="boton" type="submit" value="Registrarse"/>
	    </form>

		<img alt="vinilo"  class="vinilo" src="https://media3.giphy.com/media/LNOZoHMI16ydtQ8bGG/giphy.gif?cid=6c09b952j08qz59exfjpiondnlpc7sk7tm66oiceo7v8xw35&ep=v1_gifs_search&rid=giphy.gif&ct=s">
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