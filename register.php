<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Registro de usuarios</title>
	<link rel="icon" type="image/x-icon" href="Imagen/favicon.ico" />
	<link rel="stylesheet"  type="text/css"href="estilo2.css">
</head>
<body style="background-image:url(Imagen/Biblioteca.jpg)">
	<?php
		include ("conexion.php");
		

		if ($_POST['clave'] == $_POST['clave1'])
		{
			@mysql_query ("INSERT INTO usuarios 
				VALUES ('".$_POST['id']."', 
				'".$_POST['nombre']."', 
				'".$_POST['apellidos']."', 
				'".$_POST['clave']."')");

			echo "<form>";
			echo "<h2 style='font-size:14pt'>¡".$_POST['nombre']." ".$_POST['apellidos']." ingresó satifactoriamente a nuestra base de datos!</h2>";
			echo "</form>";

			echo "<meta http-equiv='Refresh' content='3;index.php'>";
		}
		else
		{
			echo "<form>";
			echo "<h2 style='font-size:14pt'>¡Verifica que las contraseñas coincidan!</h2>";
			echo "</form>";
			include ("Registrar.php");			
		}

		
	?>
</body>
</html>