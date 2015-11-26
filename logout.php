<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" type="image/x-icon" href="Imagen/favicon.ico" />
</head>
<body>
	<?php
		@session_start();		

		if (isset($_SESSION['id']) || isset($_SESSION['admin']))
		{
			@session_destroy();
			echo "<meta http-equiv='Refresh' content='0;index.php'>";
		}
	?>
</body>
</html>