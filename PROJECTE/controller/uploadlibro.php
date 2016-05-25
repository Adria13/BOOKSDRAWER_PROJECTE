<?php

require_once "../model/db.class.php";
require_once "../model/libro.class.php";



var_dump($_POST);

$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$fecha = $_POST["fecha"];
$generos = $_POST["generos"];
$desc = $_POST["desc"];

var_dump($_FILES);

//subir portada libros
$mi_usuario='root';
$mi_password='';
$dir_destino = '../views/images/portada/';
$name = basename($_FILES['portada']['name']);
$extension = substr($name, -4);
$nonSpaceTit=str_replace(" ", "", $titulo);
$imagen_subida = $dir_destino . basename($_FILES['portada']['name']);



echo $imagen_subida;
//Variables del metodo POST
//$codigo=$_POST['codigo'];
//$descripcion=$_POST['descripcion'];


$newName=$dir_destino.$nonSpaceTit.$extension;
if(!is_writable($dir_destino)){
	echo "no tiene permisos";
}else{
		
		if (move_uploaded_file($_FILES['portada']['tmp_name'], $newName)) {
			
			
			$book=new Libro();
			$idgenero=$book->getIdGeneros($generos);
			

			$book->insertar($titulo,$autor,$fecha,$idgenero,$desc,$newName);
			
			
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





?>