<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" type="image/x-icon" href="Imagen/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="estilo2.css">
	<title>Dar de baja</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body style="background-image:url(Imagen/Biblioteca.jpg)">
	<?php
		@session_start();

		include("conexion.php");

		if (isset($_SESSION['id']))
		{
			@mysql_query("DELETE FROM usuarios WHERE id='".$_SESSION['id']."'");						
		}

		@session_destroy();
		
		echo "<center>";
		echo "<form><h2 style='font-size:14pt'>Gracias por pertenecer a esta comunidad.</h2></form>";
		echo "<center>";

		echo "<meta http-equiv='Refresh' content='3;index.php'>";
	?>
</body>
</html>