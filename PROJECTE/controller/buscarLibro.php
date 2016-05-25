<?php
session_start();
require_once "../model/db.class.php";
require_once "../model/libro.class.php";
require_once '../model/generador.php';





	$lib=new Libro();

	


  if (empty($_POST)) {
    $valor = $lib->buscarLibrosTitulo($_GET["Titulo"]);
  }else{

      $valor = $lib->buscarLibrosTitulo($_POST["titulo"]);
  }
  $titulo=$valor[0]["Titulo"];
  $autor=$valor[0]["Autor"];
  $fecha=$valor[0]["Fecha"];
  $desc=$valor[0]["Descripcion"];
  $img=$valor[0]["Portada"];
  $pagina=cargarPlantillaLibro("../views/PagLlibre/index.php");
  $pagina=cambiar('/\#Titulo\#/ms',$titulo,$pagina);
  $pagina=cambiar('/\#Autor\#/ms',$autor,$pagina);
  $pagina=cambiar('/\#Fecha\#/ms',$fecha,$pagina);
  $pagina=cambiar('/\#Descripcion\#/ms',$desc,$pagina);
  $pagina=cambiar('/\#Ruta\#/ms',$img,$pagina);

  if(isset($_SESSION["username"])){
  	$pagina=cambiar('/\#session\#/ms',"<li><a href='../controller/perfilusuario.php'>Perfil</a></li>",$pagina);
  }else {
  	$pagina=cambiar('/\#session\#/ms',"<li><a href='../index.php'>Conectarse</a></li>",$pagina);
  
  }

  echo verPagina($pagina);

?>