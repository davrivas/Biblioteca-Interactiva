<!DOCTYPE- html>

<html lang="es">
<head>
	<meta charset="utf-8"/> 

	<title> Biblioteca interactiva </title>

	<link rel="icon" type="image/x-icon" href="Imagen/favicon.ico" /> 

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="fonts.css">
</head>	

<body>


	  <h1>	Biblioteca Interactiva </h1> 

	<?php	
		@session_start();

		if (isset($_SESSION['id']))
		{
			echo "<header>
			<nav>
			<ul> 
				<li> <a href='index.html'> <span class='primero'><i class='icon icon-home3'></i>  </span> Hola ".$_SESSION['nombre']." ".$_SESSION['apellidos']."</a> </li>
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
				<li> <a href='index.html'> <span class='primero'><i class='icon icon-home3'></i>  </span>Hola Administrador</a> </li>
				<li> <a href='upload.php'> <span class='segundo'><i class='icon icon-credit-card'></i>  </span>Subir libros</a></li>
				<li> <a href='logout.php'> <span class='quinto'><i class='icon icon-unlocked'></i>  </span>Cerrar sesión</a></li>
			</ul>
			</nav>
	 		</header>";
		}
		else
		{
			echo "<header>
			<nav>
			<ul> 
				<li> <a href='index.html'> <span class='primero'><i class='icon icon-home3'></i>  </span> Inicio</a> </li>				
				<li> <a href='Registrar.php'> <span class='cuarto'><i class='icon icon-user-plus'> </i> </span> Registrarse </a></li>
				<li> <a href='Logueo.php'> <span class='quinto'><i class='icon icon-unlocked'></i>  </span>Iniciar sesión</a></li>
			</ul>
			</nav>
	 		</header>";
		}
		?>
		
	 
	 	<div id='contenedor'>
	 		<div id='imagen'> 
	 			<img src='Imagen/fondo3.jpg' width='900' height='562'/>
	 			<img src='Imagen/fondo1.jpg' width='900' height='562'/>
	 			<img src='Imagen/fondo3.jpg' width='900' height='562'>
	 			
	 		</div>	

	 	</div>";

	 	


	 	<?php 
	 		@session_start();

			if (isset($_SESSION['id']) || isset($_SESSION['admin']))
			{
				include("libros.php");
			}
	 	 ?>




	 	<footer>
	 		<b>  Juan Carlos Ruiz Garcia, David Santiago Rivas Agudelo<b>
	 	</footer>





</body>	

</html>