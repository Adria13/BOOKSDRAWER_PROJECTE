<?php
/*
 CLASE PARA LA GESTION DE LOS UNIVERSITARIOS
*/
header("Content-Type: text/html;charset=utf-8");
require_once "db.class.php";

class Libro extends Database {

	/* REALIZA UNA CONSULTA A LA BASE DE DATOS EN BUSCA DE  REGISTROS UNIVERSITARIOS DADOS COMO
	     PARAMETROS LA "CARRERA" Y LA "CANTIDAD" DE REGISTROS A MOSTRAR
		 INPUT:
		 $carrera | nombre de la carrera a buscar
		 $limit | cantidad de registros a mostrar
		 OUTPUT:
		 $data | Array con los registros obtenidos, si no existen datos, su valor es una cadena vacia
	 */
	function buscarLibrosTitulo($titulo){
		//conexion a la base de datos
		$this->conectar();		
		$query = $this->consulta("SELECT * FROM libros WHERE titulo='$titulo'");
 	    $this->disconnect();					
		if($this->numero_de_filas($query) > 0) // existe -> datos correctos
		{		
				//se llenan los datos en un array
				while ( $tsArray = $this->fetch_assoc($query) ) 
					$data[] = $tsArray;			
		
				return $data;
		}else
		{	
			header('Location: ../index.php');
		}			
	}

	function buscarLibrosAutor($autor){
		//conexion a la base de datos
		$this->conectar();		
		$query = $this->consulta("SELECT * FROM libros WHERE autor='$autor'");
 	    $this->disconnect();					
		if($this->numero_de_filas($query) > 0) // existe -> datos correctos
		{		
				//se llenan los datos en un array
				while ( $tsArray = $this->fetch_assoc($query) ) 
					$data[] = $tsArray;			
		
				return $data;
		}else
		{	
			return 'Este libro no existe';
		}			
	}


	function insertar($titulo, $autor, $fecha, $genero, $descripcion, $portada){
		//conexion a la base de datos
		$this->conectar();	
			echo "Conectado <br>";
		$sentencia = "INSERT INTO libros(Titulo,Autor,Fecha,Genero,Descripcion,Portada) VALUES ('$titulo', '$autor', '$fecha', $genero, '$descripcion', '$portada')";	
		echo $sentencia;
		if($this->consulta($sentencia)){
			$this->disconnect();	
			return true;
		}else{
			$this->disconnect();
			echo "No se ha podido realizar la consulta";
			
			return false;
		}
	}	
 	    
 	    				
		 function getIdGeneros($generos){
		 	$this->conectar();	
		 	//$sentencia = $this->consulta("SELECT id_genero FROM generos WHERE genero='$generos'");
		 	$mysqli = mysqli_connect("localhost","root","","booksdrawer");
		 	$sql = ("SELECT id_genero FROM generos WHERE genero='$generos'");
		 	$result = mysqli_query($mysqli, $sql);
		 	$resultarr = mysqli_fetch_assoc($result);
		 	$id = (int) $resultarr;
		 	var_dump($resultarr);
			return $resultarr["id_genero"];	
		 }


		 /*function buscarLibros($titulo){

		 	$this->conectar();
		 	$query = ("SELECT * FROM libros WHERE titulo='$titulo'");
		 	$this->disconnect();
		 	if($this->numero_de_filas($query) > 0) // existe -> datos correctos
		 	{		
				return true;
			}else
			{	
				return false;
			}

		 }*/
		} 
?>




