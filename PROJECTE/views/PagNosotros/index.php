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
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nosotros</title>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="../css/footer.css">
	<link rel="stylesheet" href="../css/icomoon.css">
	<link rel="stylesheet" href="../css/barraMenu.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
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
						<form action="../../controller/buscarLibro.php" method="post">
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
	<div class="parrs" id="parr1">
		<p class="titls">¿Que es BooksDrawer?</p>
		<p>BooksDrawer fue creada para facilitar tu lectura del dia a dia, pudiendo compartir tus gustos con otra gente, descubrir nuevos generos que desconacías que te gustaban, tener tu biblioteca guardada y que otros la visiten, en definitiva, hacer que leer sea más divertido todavía.</p>	
	</div>

	<div class="parrs" id="parr2">
		<p class="titls">¿Quiénes Somos?</p>
		<p>Podeis vistar nuestras redes sociales personales para saber de cada uno de nosotros: </p>
		<p>Carlos Teruel:<a href="#">twitter</a></p>
		<p>Adrià Chafes:<a href="#">twitter</a></p>	
		<p>Alejandro Tarazona:<a href="#">twitter</a></p>
		<p>Juanma Ferrero:<a href="#">twitter</a></p>
	</div>

	<div class="parrs" id="parr3">
		<p class="titls">Orígenes</p>
		<p>En nuestra clase, reunieron grupos aleatorios para hacer un proyecto cada grupo. Se nos ocurrió hacer algo parecido a un red social de videojuegos, pero al haber tantas por internet nos planteamos otra idea. Investigando, nos dimos cuenta de que habían foros de libros y tiendas online, pero al contrario que los videojuegos, no había ninguna página de libros dónde pudieras guardarte los libros que te has leído ni nada parecido. Entonces se nos ocurrío crear BooksDrawer.</p>	
	</div>
	<footer>
				<div id="caja-redes">
				   <a href="#" class="icon-button linkedin"><i class="fa fa-linkedin"></i><span></span></a>
				   <a href="#" class="icon-button twitter"><i class="fa fa-twitter"></i><span></span></a>
				   <a href="#" class="icon-button facebook"><i class="fa fa-facebook"></i><span></span></a>
				   <a href="#" class="icon-button google-plus"><i class="fa fa-google-plus"></i><span></span></a>
				</div>
				<p id="copyright">@ Copyright BooksDrawer 2016</p>
			</div>

		</footer>
</div>

</body>
</html>