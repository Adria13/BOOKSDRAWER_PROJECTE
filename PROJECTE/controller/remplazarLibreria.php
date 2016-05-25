
<?php
	session_start();
	require_once "../model/db.class.php";
	require_once "../model/libro.class.php";
	require_once '../model/generador.php';


	$conn = mysqli_connect("localhost","root","","booksdrawer");
	
	$conPortada="";

	
		
		$sql = ('SELECT * FROM libros');
		$query = mysqli_query($conn,$sql);
		while ($libro = mysqli_fetch_object($query)) {
			$conPortada = $conPortada . '<div class="bookItem">' . '<a href="buscarLibro.php?Titulo=' . $libro->Titulo .
		'"><img src="' . $libro->Portada . '"></a></div>';
			
		}



		  $pagina=cargarPlantillaLibreria("../views/PagLibreria/index.php");
  		  $pagina=cambiar('/\#portadas\#/ms',$conPortada,$pagina);

  		  if(isset($_SESSION["username"])){
		  $pagina=cambiar('/\#session\#/ms',"<li><a href='../controller/perfilusuario.php'>Perfil</a></li>",$pagina);
		  }else {
		  	$pagina=cambiar('/\#session\#/ms',"<li><a href='../index.php'>Conectarse</a></li>",$pagina);
  
  }


  		  echo verPagina($pagina);
	
?>
