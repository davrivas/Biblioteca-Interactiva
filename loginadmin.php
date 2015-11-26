<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" type="image/x-icon" href="Imagen/favicon.ico" />
</head>
<body>
	<?php
		@session_start();

		include ("conexion.php");

		$sel = @mysql_query ("SELECT * FROM admin WHERE admin='".$_POST['admin']."'");

		$session = @mysql_fetch_array($sel);

		if ($_POST['clave'] == $session['clave'])
		{
			$_SESSION['admin'] = $_POST['admin'];			

			echo "<meta http-equiv='Refresh' content='0;index.php'>";
		}
		else
		{
			echo "<meta http-equiv='Refresh' content='0;admin.php'>";
		}
	?>
</body>
</html>