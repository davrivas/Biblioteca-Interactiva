<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="icon" type="image/x-icon" href="Imagen/favicon.ico" /> 
	<title>Subir libros</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="fonts.css">
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
<body>
	<?php
		@session_start();
		include("conexion.php");

		if (isset($_SESSION['id']))
		{
			$tipo = $_FILES['libro']['type'];

			if ($tipo == "application/pdf")
			{
				//Se genera un código alfanumérico aleratorio
				function getRandomCode()
				{
					$an = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
					$su = strlen($an) - 1;
					return substr($an, rand(0, $su), 1) .
				           substr($an, rand(0, $su), 1) .
				           substr($an, rand(0, $su), 1) .
				           substr($an, rand(0, $su), 1) .
				           substr($an, rand(0, $su), 1);
				}

				$codigo = getRandomCode();//Se le asigna el valor aleratorio al campo codigo
				$titulo = $_POST['titulo'];
				$autor = $_POST['autor'];

				// Si deja en blanco es anonimo
				if ($autor == "")
				{
					$autor = "Anonimo";
				}

				$genero = $_POST['genero'];
				$year = $_POST['year'];

				//Si no conoce el año es desconocido
				if($year == "")
				{
					$year = "Desconocido";
				}

				$temp = $_FILES['libro']['tmp_name'];
				$archivo = $codigo." ".$titulo.".pdf";

				$carautor = "Libros/".$autor;

				if (!file_exists($carautor))
				{
					mkdir($carautor, 077, true);
				}

				$ruta = $carautor."/".$archivo;

				move_uploaded_file($temp, $ruta);

				//Id, nombre y apellido de usuario
				$subido = $_SESSION['nombre']." ".$_SESSION['apellidos'];
				$idsubido = $_SESSION['id'];

				//Se saca la fecha exacta de subida
				$h = "5";
				$hm = $h * 60; 
				$ms = $hm * 60;
				$fecha = gmdate("Y-m-d H:i:s", time()-($ms));

				$aprobado = 0; // No esta aprobado por el admin

				@mysql_query ("INSERT INTO libros 
					VALUES ('".$codigo."', 
						'".$titulo."', 
						'".$autor."', 
						'".$genero."', 
						'".$year."', 
						'".$ruta."', 
						'".$subido."',
						'".$idsubido."',
						'".$fecha."', 
						'".$aprobado."')");

				echo "<body style='background-image:url(Imagen/Biblioteca.jpg)'>";
				echo "<form>";
				echo "<h2 style='font-size: 14px'>El libro &quot;".$titulo."&quot; fue subido correctamente.<br><i>Fecha:</i>".$fecha."</h2>";
				echo "<a href='index.php'><input type='button'  value='Volver a inicio' id='boton' /></a>";
				echo "<a href='upload.php'><input type='button' value='Subir otro libro' id='boton' /></a>";
				echo "</form>";
				echo "</body>";
			}
			else
			{
				include ("upload.php");
				echo "<form><h2 style='font-size:14pt'>¡Intente de nuevo!<h2/></form>";
			}			
		}
		else if (isset($_SESSION['admin']))
		{
			//Se genera un código alfanumérico aleratorio
			$tipo = $_FILES['libro']['type'];

			if ($tipo == "application/pdf")
			{
				function getRandomCode()
				{
					$an = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
					$su = strlen($an) - 1;
					return substr($an, rand(0, $su), 1) .
				           substr($an, rand(0, $su), 1) .
				           substr($an, rand(0, $su), 1) .
				           substr($an, rand(0, $su), 1) .
				           substr($an, rand(0, $su), 1);
				}

				$codigo = getRandomCode();//Se le asigna el valor aleratorio al campo codigo
				$titulo = $_POST['titulo'];
				$autor = $_POST['autor'];

				// Si deja en blanco es anonimo
				if ($autor == "")
				{
					$autor = "Anonimo";
				}

				$genero = $_POST['genero'];
				$year = $_POST['year'];

				//Si no conoce el año es desconocido
				if($year == "")
				{
					$year = "Desconocido";
				}

				$temp = $_FILES['libro']['tmp_name'];
				$archivo = $codigo." ".$titulo.".pdf";

				$carautor = "Libros/".$autor;

				if (!file_exists($carautor))
				{
					mkdir($carautor, 077, true);
				}

				$ruta = $carautor."/".$archivo;

				move_uploaded_file($temp, $ruta);

				$subido = "Administrador";
				$idsubido = "admin";

				//Se saca la fecha exacta de subida
				$h = "5";
				$hm = $h * 60; 
				$ms = $hm * 60;
				$fecha = gmdate("Y-m-d H:i:s", time()-($ms));

				$aprobado = 1; // Esta subido por el admin

				@mysql_query ("INSERT INTO libros 
					VALUES ('".$codigo."', 
						'".$titulo."', 
						'".$autor."', 
						'".$genero."', 
						'".$year."', 
						'".$ruta."', 
						'".$subido."',
						'".$idsubido."',
						'".$fecha."', 
						'".$aprobado."')");

				echo "<body style='background-image:url(Imagen/Biblioteca.jpg)'>";
				echo "<form>";
				echo "<h2 style='font-size: 14px'>El libro &quot;".$titulo."&quot; fue subido correctamente.<br><i>Fecha:</i>".$fecha."</h2>";
				echo "<a href='index.php'><input type='button'  value='Volver a inicio' id='boton' /></a>";
				echo "<a href='upload.php'><input type='button' value='Subir otro libro' id='boton' /></a>";
				echo "</form>";
				echo "</body>";
			}
			else
			{
				include ("upload.php");
				echo "<form><h2 style='font-size:14pt'>¡Intente de nuevo!<h2/></form>";
			}
		}
	?>
</body>
</html>