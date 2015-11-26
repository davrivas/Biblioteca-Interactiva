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
</head>
<body>

	<h1>Biblioteca Interactiva </h1> 
	<?php
		@session_start();

		if (isset($_SESSION['id']))
		{
			echo "<header>
			<nav>
			<ul> 
				<li> <a href='index.php'> <span class='primero'><i class='icon icon-home3'></i>  </span> Hola ".$_SESSION['nombre']." ".$_SESSION['apellidos']."</a> </li>
				<li> <a href='upload.php'> <span class='segundo'><i class='icon icon-credit-card'></i>  </span>Subir libros</a></li>
				<li> <a href='settings.php'> <span class='cuarto'><i class='icon icon-user-plus'> </i> </span>Configuraciones</a></li>
				<li> <a href='logout.php'> <span class='quinto'><i class='icon icon-unlocked'></i>  </span>Cerrar sesión</a></li>
			</ul>
			</nav>
	 		</header>";
		}
		else if (isset($_SESSION['admin']))
		{
			echo "<header>
			<nav>
			<ul> 
				<li> <a href='index.php'> <span class='primero'><i class='icon icon-home3'></i>  </span>Hola Administrador</a> </li>
				<li> <a href='upload.php'> <span class='segundo'><i class='icon icon-credit-card'></i>  </span>Subir libros</a></li>
				<li> <a href='logout.php'> <span class='quinto'><i class='icon icon-unlocked'></i>  </span>Cerrar sesión</a></li>
			</ul>
			</nav>
	 		</header>";
		}

	?>

	<form action='uploadbook.php' method='post' enctype='multipart/form-data' name='upbook'>
	<h2> Subir libro </h2>

	<input type='text' name='titulo' placeholder="Título" autofocus required="required">
	<label>*Deje el campo en blanco si no lo conoce el autor</label>
	<input type='text' name='autor' placeholder="Autor">	
	<input type="text"  name="genero" placeholder="Genero"  required="required">
	<label>*Deje el campo en blanco si no lo conoce el año</label>
	<input type='number' max='2015' min='0' name='year' placeholder="Año de publicación">
	<label>*Solo aceptamos archivos en formato pdf</label>
	<input type='file' name='libro' required='required' />
	<input type="submit" value="Subir libro" id="boton">

	</form>

	<br /><br/>	

	<footer>
	 		<b>  Juan Carlos Ruiz Garcia, David Santiago Rivas Agudelo<b>
	 	</footer>
</body>
</html>