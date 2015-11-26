<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" type="image/x-icon" href="Imagen/favicon.ico" />
	<style type="text/css">
		th
		{
			color: white;
			background-color: green;
			height: 50px;
		}

		td
		{
			height: 30px;
		}
	</style>
</head>
<body>
	<?php
		include ("conexion.php");

		echo "<h2 align='center' style='font-family: sans-serif'>Ultimos libros <img type='image/x-icon' src='Imagen/favicon.ico'></h2><br>";

		echo "<center>";

		$consultar = @mysql_query("SELECT * FROM libros WHERE aprobado='1' ORDER BY fecha DESC");
		
		echo "<table border='5' bordercolor='green' style='font-family: sans-serif; border-radius: 7.5px'>
				<tr>
					<th>&nbsp;Código&nbsp;</th>
					<th>&nbsp;Título&nbsp;</th>
					<th>&nbsp;Autor&nbsp;</th>
					<th>&nbsp;Genero&nbsp;</th>
					<th>Año de<br />&nbsp;publicación&nbsp;</th>
					<th>&nbsp;Subido por&nbsp;</th>
					<th>&nbsp;Fecha de subida&nbsp;</th>
					<th><img type='image/x-icon' src='Imagen/favicon.ico'></th>
				<tr>";

		while ($libros = @mysql_fetch_array($consultar))
		{
			$codigo=$libros['codigo'];
			$titulo=$libros['titulo'];
			$autor=$libros['autor'];
			$genero=$libros['genero'];
			$year=$libros['year'];
			$archivo=$libros['archivo'];
			$subido=$libros['subido'];
			$fecha=$libros['fecha'];

			echo "<tr>
					<td align='center'>&nbsp;<strong>".$codigo."</strong>&nbsp;</td>
					<td align='center'>&nbsp;".$titulo."&nbsp;</td>
					<td align='center'>&nbsp;".$autor."&nbsp;</td>
					<td align='center'>&nbsp;".$genero."&nbsp;</td>
					<td align='center'>&nbsp;".$year."&nbsp;</td>";
			if ($subido == "Administrador")
			{
				echo "<td align='center'>&nbsp;<i>".$subido."</i>&nbsp;</td>";
			}
			else
			{
				echo "<td align='center'>&nbsp;".$subido."&nbsp;</td>";
			}	

			echo	"<td align='justify'>&nbsp;".$fecha."&nbsp;</td>
					<td>&nbsp;<a href='$archivo' style='color: green' target='_blank'>Leer</a>&nbsp;</td>
				</tr>";
		}

		echo "</table>";
		echo "<br><br>";
		echo "</center>";
	?>
</body>
</html>