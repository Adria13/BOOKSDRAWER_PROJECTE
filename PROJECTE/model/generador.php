<?php
  
  function cargarPlantillaLibro($titulo){
  	 $pagina=cargarPagina("../views/PagLlibre/index.php");
  	

  	 return $pagina;
  }

  function cargarPlantillaLibreria($titulo){
     $pagina=cargarPagina("../views/PagLibreria/index.php");
    

     return $pagina;
  }   

    function cargarPlantillaPerfil($titulo){
     $pagina=cargarPagina("../views/PerfilUser/index.php");
    

     return $pagina;
  } 

  function cargarPagina($pagina){
  	 return file_get_contents($pagina);
  }  

   function cambiar($in='/\#Titulo\#/ms',$out,$pagina){
   	  return preg_replace($in,$out,$pagina);
   }

   function verPagina($html){
   	return $html;
   }
?>