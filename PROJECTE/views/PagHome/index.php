<?php 
	session_start();

$con = mysql_connect("localhost","root","");
 $db = mysql_select_db("booksdrawer",$con);
 $get=mysql_query("SELECT genero FROM generos ORDER BY id_genero ASC");
$option = '';
 while($row = mysql_fetch_assoc($get))
{
  $option .= '<option value = "'.$row['genero'].'">'.$row['genero'].'</option>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="../css/icomoon.css">
	<link rel="stylesheet" href="../css/barraMenu.css">
	<link href="themes/8/js-image-slider.css" rel="stylesheet" type="text/css" />
	<link href="themes/8/tooltip.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="themes/8/js-image-slider.js" type="text/javascript"></script>
	<script src="themes/8/tooltip.js" type="text/javascript"></script>
	<script src="js/slider.js"></script>
	<script src="js/cargarMas.js"></script>
	<script src="../js/buscar.js"></script>
</head>
<body>
	<header>
		<a href="../../index.php"><div id="image"></div></a>
		<nav>
			
			<ul>
				<li><a href="../PagHome">Home<span class="icon-book"></span></a></li>
				<li><a href="../../controller/remplazarLibreria.php">Librería<span class="icon-books"></span></a></li>
				<?php if(isset($_SESSION["username"])) {echo "<li><a href='../../controller/perfilusuario.php'>Perfil</a></li>";} else {echo "<li><a href='../../index.php'>Conectarse</a></li>";} ?>
				<li><a href="../PagContacto">Contacto</a></li>
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
						<form action="../../controller/buscarLibro.php" method="post">
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
							<select>
								<option><?php echo $option; ?></option>
							</select>
							<input type="submit" value="Buscar"/>
						</form>
					</li>
				</ul>
				</li>
			</ul>
		</nav>
		<div id="barlarge">
        	<div class="contenido">
				<div class="backgroundSlider">
    				<img src="../images/foto1.jpg">
    				<img src="../images/libros.jpg">
    				<img src="../images/redes.jpg">
				</div>
			</div>
			<h1>Top 10 libros</h1>
			<div id="content">
			<div class="bookItem">
				<img src="../images/portada/ANAKARENINA.jpg">
			</div>
			<div class="bookItem">
				<img src="../images/portada/CRIMENYCASTIGO.png">
			</div>
			<div class="bookItem">
				<img src="../images/portada/MOBYDICK.jpg">
			</div>
			<div class="bookItem">
				<img src="../images/portada/DONQUIJOTEDELAMANCHA.jpg">
			</div>
			<div class="bookItem">
				<img src="../images/portada/ELRUIDOYLAFURIA.jpg">
			</div>
			<div class="bookItem">
				<img src="../images/portada/GUERRAYPAZ.jpg">
			</div>
			<div class="bookItem">
				<img src="../images/portada/LAMETAMORFOSIS.jpg">
			</div>
			<div class="bookItem">
				<img src="../images/portada/LASMILYUNANOCHES.jpg">
			</div>
			<div class="bookItem">
				<img src="../images/portada/ANAKARENINA.jpg">
			</div>
			<div class="bookItem">
				<img src="../images/portada/CRIMENYCASTIGO.png">
			</div>
		</div>
		<h1>Novedades</h1>
			<div id="content">
			<div class="bookItem">
				<img src="../images/portada/ANAKARENINA.jpg">
			</div>
			<div class="bookItem">
				<img src="../images/portada/CRIMENYCASTIGO.png">
			</div>
			<div class="bookItem">
				<img src="../images/portada/MOBYDICK.jpg">
			</div>
			<div class="bookItem">
				<img src="../images/portada/DONQUIJOTEDELAMANCHA.jpg">
			</div>
			<div class="bookItem">
				<img src="../images/portada/ELRUIDOYLAFURIA.jpg">
			</div>
			<div class="bookItem">
				<img src="../images/portada/GUERRAYPAZ.jpg">
			</div>
			<div class="bookItem">
				<img src="../images/portada/LAMETAMORFOSIS.jpg">
			</div>
			<div class="bookItem">
				<img src="../images/portada/LASMILYUNANOCHES.jpg">
			</div>
			<div class="bookItem">
				<img src="../images/portada/ANAKARENINA.jpg">
			</div>
			<div class="bookItem">
				<img src="../images/portada/CRIMENYCASTIGO.png">
			</div>
		</div>
		<h1>Recomendados para ti</h1>
			<div id="content">
			<div class="bookItem">
				<img src="../images/portada/ANAKARENINA.jpg">
			</div>
			<div class="bookItem">
				<img src="../images/portada/CRIMENYCASTIGO.png">
			</div>
			<div class="bookItem">
				<img src="../images/portada/MOBYDICK.jpg">
			</div>
			<div class="bookItem">
				<img src="../images/portada/DONQUIJOTEDELAMANCHA.jpg">
			</div>
			<div class="bookItem">
				<img src="../images/portada/ELRUIDOYLAFURIA.jpg">
			</div>
			<div class="bookItem">
				<img src="../images/portada/GUERRAYPAZ.jpg">
			</div>
			<div class="bookItem">
				<img src="../images/portada/LAMETAMORFOSIS.jpg">
			</div>
			<div class="bookItem">
				<img src="../images/portada/LASMILYUNANOCHES.jpg">
			</div>
			<div class="bookItem">
				<img src="../images/portada/ANAKARENINA.jpg">
			</div>
			<div class="bookItem">
				<img src="../images/portada/CRIMENYCASTIGO.png">
			</div>
		</div>

</body>
</html>