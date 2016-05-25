<?php 
	session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Perfil</title>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../views/PerfilUser/css/style.css">
	<link rel="stylesheet" href="../views/css/icomoon.css">
	<link rel="stylesheet" href="../views/css/barraMenu.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="../views/PerfilUser/js/buscar.js"></script>
	<script src="../views/PerfilUser/js/imgPerfil.js"></script>
</head>
<body>
	<header>
		<a href="../index.php"><div id="image"></div></a>
		<nav>
			
			<ul>
				<li><a href="../views/PagHome">Home<span class="icon-book"></span></a></li>
				<li><a href="remplazarLibreria.php">Librería<span class="icon-books"></span></a></li>
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
							<select name="generos">
								<option><?php echo $option; ?></option>
							</select>
							<input type="submit" value="Buscar"/>
						</form>
					</li>
				</ul>
				</li>
			</ul>
		</nav>
<div id="content">
		<div id="usu">
			<div id="box" align="center"></div>
 			<form id="joder" action="../controller/updateFotoperfil.php" method="post" enctype= "multipart/form-data">
 				<input type="file" name="imgPerfil">
		        <input type="submit" />
		        <button type="button" id="cancel">Cancelar</button>
    		</form>
			<div id="fotouser">
				<p id="cambiar">Cambiar imagen</p>
				<img id="perf" src="#Ruta#">
			</div>
			<p id="nick">#nickname#</p>
			<p class="datos"><span></span>#Nombre#</p>
			<p class="datos">#Apellidos#</p>
			<p class="datos">#Email#</p>
			<p class="title">Géneros preferidos:</p>
			<div id="preferencias"></div>
			
	</div>
	<div id="coses">		
   
	</div>	
</body>
</html>