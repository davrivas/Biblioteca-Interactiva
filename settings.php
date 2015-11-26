<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="icon" type="image/x-icon" href="Imagen/favicon.ico" /> 
	<title>Configuraciones</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="estilo2.css">
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
		
			echo "<form action='update.php' method='POST' autocomplete='on'>
			<h2> Actualizar datos de usuario</h2>
			<label>Nombre actual: ".$_SESSION['nombre']."</label>
			<input type='text' name='nvnombre' placeholder='Cambiar a' >
			<label>Apellidos actuales: ".$_SESSION['apellidos']."</label>
			<input type='text' name='nvapellidos' placeholder='Cambiar a'>

			<input id='boton' type='submit' value='Actualizar datos'>

			</form>

			<form action='pass.php' method='POST' autocomplete='on'>
				<h2> Cambiar contraseña </h2>
				<input type='password' name='clave' placeholder='Ingrese contraseña antigua' required='required'>
				<input type='password' name='nvclave' placeholder='Ingrese contraseña nueva' required='required'>
				<input type='password' name='nvclave1' placeholder='Confirme contraseña nueva' required='required'>

				<input id='boton' type='submit' value='Cambiar clave'>

			</form>

			<form action='delete.php' method='POST' autocomplete='on'>
				<h2> Dar de baja </h2>
				<label><strong>Advertencia:</strong> Esta seguro/a de hacerlo? Esta accion no requiere confirmación.</label>
				<input type='submit' value='Darse de baja' id='boton'>

			</form>	";
		}
	?>

	<br /><br/>	

	<footer>
	 		<b>  Juan Carlos Ruiz Garcia, David Santiago Rivas Agudelo<b>
	 	</footer>

</body>
</html>