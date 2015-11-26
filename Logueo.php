<!doctype html>
<html lang="es">
	
	<head>
	<link rel="icon" type="image/x-icon" href="Imagen/favicon.ico" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Iniciar Sesión</title>
	<link rel="stylesheet" type="text/css" href="estilo2.css">
	</head>

<body style="background-image:url(Imagen/Biblioteca.jpg)">

	<form action="login.php" method="POST" autocomplete="on">
		<h2> Iniciar Sesion </h2>
		<input type="NUMBER" min="0" name='id' maxlength="15" placeholder="Ingrese su Identificacion" required="required" autofocus>
		<input type="password" name="clave" placeholder="Ingrese contraseña">

		<input id="boton" type="submit" value="Iniciar Sesion">

	</form>	

</body>

<html>