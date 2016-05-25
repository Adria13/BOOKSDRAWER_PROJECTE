<?php
$con = mysql_connect("localhost","root","root");
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
	<meta http-equiv="Content-type" content="text/html charset=utf-8" />
	<link rel="stylesheet" href="styleLibros.css">
	<title>Subir libro</title>
</head>
<body>
	<div id="registro">
		<form action="../../controller/uploadlibro.php" method="post" enctype= "multipart/form-data">
		<label for="titulo">Título: </label><br>
		<input type="text" name="titulo" required/><br>
		<label for="autor">Autor: </label><br>
		<input type="text" name="autor" required/><br>
		<label for="fecha">Fecha: </label>
		<input type="date" name="fecha"><br>
		<label for="generos">Género: </label>
		<select name="generos">
			<option><?php echo $option; ?></option>
		</select>
		<label for="desc">Descripción: </label>
		<textarea name="desc" rows="6" required></textarea><br>
		<label for="portada">Portada: </label>
		<input type="file" name="portada"><br>
		<input type="submit" value="Subir libro">
		</form>
	</div>
	
</body>
</html>