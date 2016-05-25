<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>BooksDrawer</title>
	<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="views/css/menu.css">
	<link rel="stylesheet" href="views/css/styleRegistro.css">
	<link rel="stylesheet" href="views/css/icomoon.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="views/js/scroll_menu.js"></script>
	<script src="views/js/login_registro.js"></script>
	
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href='views/PagHome'>Home</a></li>
				<li><a href="controller/remplazarLibreria.php">Librería</a></li>
			</ul>
			<img id="logo" src="views/images/logoprojecte.png" alt="LOGO">
			<ul>
				<li><a href="views/PagNosotros">Nosotros</a></li>
				<li><a href="views/PagContacto">Contacto</a></li>
			</ul>
		</nav>
	</header>
	<section id="fondo">
		
	</section>
	<section id="body">
		<section id="scroll">
			
			<div id="botonBajar">
				<p id="bajar">CONECTATE</p>
			</div>
			<p id="flecha"><</p>
		</section>
		<section id="cuadros">

			<h1>BooksDrawer</h1>
			<p id="eslogan">Tu página de libros</p>

			<div id="login">
				<form action="controller/login.php" method="post">
				<label for="user">Usuario: </label><br>
				<input type="text" name="user" required/><br>
				<label for="password">Contraseña: </label><br>
				<input type="password" name="password"/ required><br>
				<input type="submit" value="Login">
				</form>
			</div>
			
			<div id="registro">
				<form action="controller/register.php" method="post">
				<label for="nombre">Nombre: </label><br>
				<input type="text" name="nombre" placeholder="Tu nombre real" required/><br>
				<label for="apellidos">Apellidos: </label><br>
				<input type="text" name="apellidos" required/><br>
				<label for="user">Usuario: </label><br>
				<input type="text" name="user" placeholder="Nombre que verá la gente" required/><br>
				<label for="email">E-mail: </label><br>
				<input type="email" name="email" placeholder="ejemplo@dominio.com" required/><br>
				<label for="password">Contraseña: </label><br>
				<input type="password" name="password" minlength="6" maxlength="16" required/><br>
				<input type="submit" value="Registrarse">
				</form>
			</div>

			<div id="registrarse">
				<p>¿No estás registrado?</p>
				<button id="btn-registro">REGISTRARSE</button>
			</div>


		</section>
	</section>
</body>
</html>