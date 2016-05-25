<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>#Titulo#</title>
	<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../views/PagLlibre/css/style.css">
	<link rel="stylesheet" href="../views/css/icomoon.css">
	<link rel="stylesheet" href="../views/css/barraMenu.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="../views/PagLlibre/js/buscar.js"></script>
</head>
<body>
	<header>
		<a href="../index.php"><div id="image"></div></a>
		<nav>
			
			<ul>
				<li><a href="../views/PagHome">Home<span class="icon-book"></span></a></li>
				<li><a href="../controller/remplazarLibreria.php">Librería<span class="icon-books"></span></a></li>
				#session#
				<li><a href="../views/PagContacto">Contacto</a></li>
				<li><a href="#" class="busc">Buscar<span class="icon-search"></span></a></li>
			</ul>
		</nav>
	</header>
		<nav id="busquedas">
			<p>Buscar por:</p>
			<ul>
				<li class="openForm"><a href="#">Titulo<span class="icon-chevron-down"></span></a>
				<ul>
					<li class="formBuscar">
					<form action="../controller/buscarLibro.php" method="post">
						<input type="text" name="titulo"/>
						<input type="submit" value="Buscar"/>
						</form>
					</li>
				</ul>
				</li>
				<li class="openForm"><a href="#">Autor<span class="icon-chevron-down"></span></a>
				<ul>
					<li class="formBuscar">
						<form action="formBuscar.php">
						<input type="text" name="autor"/>
						<input type="submit" value="Buscar"/>
						</form>
					</li>
				</ul>
				</li>
				<li class="openForm"><a href="#">Genero<span class="icon-chevron-down"></span></a>
				<ul>
					<li class="formBuscar">
						<form action="formBuscar.php">
							<select name="genero" required>
								<option value="Aventura">Aventura</option>
								<option value="Bélicas">Bélicas</option>
								<option value="Biografía">Biografia</option>
								<option value="Ciencia Ficción">Ciencia Ficción</option>	
								<option value="Clásicos de la literatura">Clásicos de la literatura</option>
								<option value="Drama">Drama</option>
								<option value="Ensayo">Ensayo</option>
								<option value="Erótica">Erótica</option>
								<option value="Espionaje">Espionaje</option>
								<option value="Fantasía">Fantasía</option>
								<option value="Ficción literaria">Ficción literaria</option>
								<option value="Histórica">Histórica</option>
								<option value="Humor">Humor</option>
								<option value="Infantil">Infantil</option>
								<option value="Juvenil">Juvenil</option>
								<option value="Literatura contemporánea">Literatura contemporánea</option>
								<option value="Narrativa">Narrativa</option>
								<option value="Novela negra">Novela negra</option>
								<option value="Misterio">Misterio</option>
								<option value="Poesía">Poesía</option>
								<option value="Policíacas">Policíacas</option>
								<option value="Romántica">Romántica</option>
								<option value="Suspense">Suspense</option>
								<option value="Terror">Terror</option>
							</select>
							<input type="submit" value="Buscar"/>
						</form>
					</li>
				</ul>
				</li>
			</ul>
		</nav>
	<div id="content">	
		<div id="bookPortada">
			<img src="#Ruta#">
		</div>
		<div id="info">
			<p id="title">#Titulo#</p>
			<p>#Autor#</p>
			<p>#Fecha#</p>
		</div>
		<div id="desc">
			<p id"descrip">#Descripcion#</p>
		</div>
	</div>
</body>
</html>