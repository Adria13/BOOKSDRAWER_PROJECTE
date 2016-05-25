<?php

session_start();

require_once "../model/db.class.php";
require_once "../model/usuario.class.php";








//subir portada libros
$mi_usuario='root';
$mi_password='';
$dir_destino = '../views/images/perfil/';
$name = basename($_FILES['imgPerfil']['name']);
$extension = substr($name, -4);
$nonSpaceTit=str_replace(" ", "", $_SESSION["username"]);
$imagen_subida = $dir_destino . basename($_FILES['imgPerfil']['name']);


//Variables del metodo POST
//$codigo=$_POST['codigo'];
//$descripcion=$_POST['descripcion'];


$newName=$dir_destino.$nonSpaceTit.$extension;
if(!is_writable($dir_destino)){
	echo "no tiene permisos";
}else{
		
		if (move_uploaded_file($_FILES['imgPerfil']['tmp_name'], $newName)) {
			
			
			$user=new usuario();
			

			$user->actualizarFoto($newName,$_SESSION["username"]);
			
			
			//echo "<img src='http://localhost/miweb/uploads/". basename($imagen_subida) ."' />";
		} 
}
/*$rutaImagen = "app/view/img/recetas/";
	$nombreImagen = $_FILES["imagenReceta"]["name"];
	
	$newName = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20).$extension;
	$rutaFinal = $rutaImagen.$newName;
	if(move_uploaded_file($_FILES["imagenReceta"]["tmp_name"], $rutaFinal)) {
		$receta->insertReceta($_POST["nombreReceta"], $_POST["descripcion"], $rutaFinal, $_POST["pasos"], $_SESSION["id_username"]);	
	}
	else {
		//header('Location: ');
		echo "Error al subir la foto";
	}*/

header('Location: ./perfilusuario.php');



?>