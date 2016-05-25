<?php
session_start();
require_once "../model/db.class.php";
require_once "../model/usuario.class.php";
require_once '../model/generador.php';





	$usu=new Usuario();

	$valor = $usu->buscarUsuarios($_POST["usuario"]);



  $nombre=$valor[0]["Nombre"];
  $apellido=$valor[0]["Apellido"];
  $usuar=$valor[0]["Usuario"];
  $email=$valor[0]["Email"];
  $img=$valor[0]["Fotoperfil"];
  $pagina=cargarPlantillaPerfil("../controller/perfilusuario.php");
  $pagina=cambiar('/\#Nombre\#/ms',$titulo,$pagina);
  $pagina=cambiar('/\#Apellido\#/ms',$autor,$pagina);
  $pagina=cambiar('/\#Fecha\#/ms',$fecha,$pagina);
  $pagina=cambiar('/\#Descripcion\#/ms',$desc,$pagina);
  $pagina=cambiar('/\#Ruta\#/ms',$img,$pagina);


  	$pagina=cambiar('/\#session\#/ms',"<li><a href='../controller/perfilusuario.php'>Perfil</a></li>",$pagina);
  
  

  echo verPagina($pagina);
?>