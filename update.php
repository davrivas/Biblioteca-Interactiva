<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" type="image/x-icon" href="Imagen/favicon.ico" />
	<meta http-equiv='Refresh' content='0;settings.php'>
</head>
<body>
	<?php
		@session_start();

		include("conexion.php");

		if (isset($_SESSION['id']))
		{
			if (isset($_POST['nvnombre']) || isset($_POST['nvapellidos']))
			{
				if (isset($_POST['nvnombre']))
				{
					@mysql_query("UPDATE usuarios SET nombre='".$_POST['nvnombre']."' WHERE id='".$_SESSION['id']."'");

					$_SESSION['nombre'] = $_POST['nvnombre'];
				}
				
				if (isset($_POST['nvapellidos']))
				{
					@mysql_query("UPDATE usuarios SET apellidos='".$_POST['nvapellidos']."' WHERE id='".$_SESSION['id']."'");

					$_SESSION['apellidos'] = $_POST['nvapellidos'];
				}

				@mysql_query("UPDATE libros SET subido='".$_SESSION['nombre']." ".$_SESSION['apellidos']."' WHERE idsubido='".$_SESSION['id']."'");				
			}
		}			
	?>
</body>
</html>