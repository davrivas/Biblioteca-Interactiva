<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="icon" type="image/x-icon" href="Imagen/favicon.ico" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Iniciar Sesión</title>
	<link rel="stylesheet" type="text/css" href="estilo2.css">
</head>
<body>
	<?php
		@session_start();

		include ("conexion.php");

		$sel = @mysql_query ("SELECT * FROM usuarios WHERE id='".$_POST['id']."'");

		$session = @mysql_fetch_array($sel);

		if ($_POST['clave'] == $session['clave'])
		{
			$_SESSION['id'] = $_POST['id'];

			if ($campo = $session)
			{
				$_SESSION['nombre'] = $campo['nombre'];
				$_SESSION['apellidos'] = $campo['apellidos'];
				$_SESSION['clave'] = $campo['clave'];
			}

			echo "<meta http-equiv='Refresh' content='0;index.php'>";
		}
		else
		{
			include("Logueo.php");
			echo "<form><h2 style='font-size:14pt'>¡El usuario no existe o la contraseña es incorrecta!</h2></form>";			
		}
	?>
</body>
</html>