<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<?php
		$conexion = @mysql_connect("localhost", "root", "") or die("No hay conexion al servidor.");

		$conectBD = @mysql_select_db("biblioteca", $conexion) or die("No existe Base de datos.");

		@mysql_set_charset('utf8');
	?>
</body>
</html>