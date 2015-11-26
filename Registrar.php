<!doctype html>

<html>

<head>
	<title>Formulario de registro</title>
	<link rel="icon" type="image/x-icon" href="Imagen/favicon.ico" /> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet"  type="text/css"href="estilo2.css">
	
</head>
<body style="background-image:url(Imagen/Biblioteca.jpg)">
	<form action="register.php" method="post">
	<h2> Formulario de Registro </h2>

	<input type="number" min="0" name="id" maxlenght="15" placeholder="Identificacion" autofocus required="required">
	<input type="text"  name="nombre" placeholder="Nombre"  required="required">
	<input type="text"  name="apellidos" placeholder="Apellidos "  required="required">
	<input type="password" name="clave" placeholder="Clave" rquired="required">
	<input type="password" name="clave1" placeholder="Repetir la Clave" required="required">
	<input type="submit" value="Registrar" id="boton">

	</form>
</body>	
</html>