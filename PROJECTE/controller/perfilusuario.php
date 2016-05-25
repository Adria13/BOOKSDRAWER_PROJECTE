<?php
session_start();
require_once "../model/db.class.php";
require_once "../model/usuario.class.php";
require_once '../model/generador.php';





	$usu=new Usuario();

	$valor = $usu->usuarios($_SESSION["username"]);


  $nombre=$valor[0]["Nombre"];
  $apellido=$valor[0]["Apellido"];
  $usuar=$valor[0]["Usuario"];
  $email=$valor[0]["Email"];
  $img=$valor[0]["Fotoperfil"];
  $pagina=cargarPlantillaPerfil("../views/PerfilUser/index.php");
  $pagina=cambiar('/\#Nombre\#/ms',$nombre,$pagina);
  $pagina=cambiar('/\#Apellidos\#/ms',$apellido,$pagina);
  $pagina=cambiar('/\#nickname\#/ms',$usuar,$pagina);
  $pagina=cambiar('/\#Email\#/ms',$email,$pagina);
  if ($valor[0]["Fotoperfil"] == NULL) {
    $pagina=cambiar('/\#Ruta\#/ms',"../controller/perfilusuario.php.jpg",$pagina);
  }else{
    $pagina=cambiar('/\#Ruta\#/ms',$img,$pagina);
  }


  	$pagina=cambiar('/\#session\#/ms',"<li><a href='cerrarSesion.php'>Desconectar</a></li>",$pagina);
  
  
    $con = mysql_connect("localhost","root","root");
 $db = mysql_select_db("booksdrawer",$con);
 $get=mysql_query("SELECT genero FROM generos ORDER BY id_genero ASC");
$option = '';
 while($row = mysql_fetch_assoc($get))
{
  $option .= '<option value = "'.$row['genero'].'">'.$row['genero'].'</option>';
}

  echo verPagina($pagina);
?>