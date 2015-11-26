<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="icon" type="image/x-icon" href="Imagen/favicon.ico" /> 
	<title>Cambiar contraseña</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="fonts.css">
	<meta http-equiv='Refresh' content='3;settings.php'>
	<style type="text/css">
		form 
		{
			width: 450px;
			margin: auto;
			background: rgba(0,0,0,0.4);
			padding: 10px 20px;
			box-sizing: border-box;
			margin-top: 50px;
			border-radius: 15px;
			font-family: monospace;
		}
		h2 
		{
			text-align: center;
			color: white;
			margin: 0;
			font-size: 30px;
			margin-bottom: 20px;
			font-family: monospace;
		}

		input 
		{
			width: 100%;
			margin-bottom: 20px;
			padding: 7px;
			box-sizing: border-box;
			font-size: 17px;
			font-family: monospace;
		}

		label
		{
			font-family: monospace;
			padding: 7px;
			color: white;
			text-align: center;
		}

		#boton 
		{
			padding: 20px;
			color: white;
			background-color: black;
		}

		#boton:hover
		{
			cursor: pointer;
		}

		@media (max-width: 480px;)
		{
			form 
			{
				width: 100%;
			}
		}
	</style>
</head>
<body>
	<?php
		@session_start();

		include("conexion.php");

		if (isset($_SESSION['id']))
		{
			if ($_POST['clave'] == $_SESSION['clave'])
			{
				if ($_POST['nvclave'] == $_POST['nvclave1'])
				{
					@mysql_query("UPDATE usuarios SET clave='".$_POST['nvclave']."' WHERE id='".$_SESSION['id']."'");
					
				echo "<body style='background-image:url(Imagen/Biblioteca.jpg)'>";
				echo "<form>";
				echo "<h2 style='font-size: 14px'>¡Constraseña cambiada exitosamente!</h2>";
				echo "</form>";
				echo "</body>";
				}
				else
				{
					
					echo "<body style='background-image:url(Imagen/Biblioteca.jpg)'>";
					echo "<form>";
					echo "<h2 style='font-size: 14px'>¡Error al cambiar contraseña!</h2>";
					echo "</form>";
					echo "</body>";
				}
			}
			else
			{
				echo "<body style='background-image:url(Imagen/Biblioteca.jpg)'>";
				echo "<form>";
				echo "<h2 style='font-size: 14px'>¡Error al cambiar contraseña!</h2>";
				echo "</form>";
				echo "</body>";
			}
		}			
	?>
</body>
</html>