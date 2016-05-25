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
	<title>Contacto</title>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="../css/footer.css">
	<link rel="stylesheet" href="../css/icomoon.css">
	<link rel="stylesheet" href="../css/barraMenu.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="js/buscar.js"></script>
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
			CONTACTO
		</div>
		<div id="content1">
			<p class="parrt">Correo electrónico:</p>
			<p class="parr">contact.booksdrawer@gmail.com</p>
			<p class="parrt">Atención al Cliente:</p>
			<p class="parr">902 198 397</p>
			<p class="parrt">Facebook:</p>
			<p class="parr"><a href="https://facebook.com/booksdrawer">booksdrawer</a></p>
			<p class="parrt">Twitter:</p>
			<p class="parr"><a href="https://twitter.com/books_drawer">@books_drawer</a></p>
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
</body>
</html>