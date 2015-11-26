<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="icon" type="image/x-icon" href="Imagen/favicon.ico" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Administrador</title>
	<link rel="stylesheet" type="text/css" href="estilo2.css">
</head>
<body style="background-image:url(Imagen/Biblioteca.jpg)">

	<form action="loginadmin.php" method="POST" autocomplete="on">
		<h2> Iniciar Sesion (Admin)</h2>
		<input type="text" name='admin' maxlength="15" placeholder="Admin" required="required">
		<input type="password" name="clave" required="required" placeholder="Contraseña">

		<input id="boton" type="submit" value="Iniciar Sesion admin">

	</form>
</body>
</html>