<?php
/*
 CLASE PARA LA GESTION DE LOS UNIVERSITARIOS
*/
require_once "db.class.php";

class Usuario extends Database {

	/* REALIZA UNA CONSULTA A LA BASE DE DATOS EN BUSCA DE  REGISTROS UNIVERSITARIOS DADOS COMO
	     PARAMETROS LA "CARRERA" Y LA "CANTIDAD" DE REGISTROS A MOSTRAR
		 INPUT:
		 $carrera | nombre de la carrera a buscar
		 $limit | cantidad de registros a mostrar
		 OUTPUT:
		 $data | Array con los registros obtenidos, si no existen datos, su valor es una cadena vacia
	 */
	function usuarios($usuario=NULL){
		//conexion a la base de datos
		$this->conectar();		
		$query = $this->consulta("SELECT * FROM usuarios WHERE Usuario='$usuario'");
 	    $this->disconnect();					
		if($this->numero_de_filas($query) > 0) // existe -> datos correctos
		{		
				//se llenan los datos en un array
				while ( $tsArray = $this->fetch_assoc($query) ) 
					$data[] = $tsArray;			
		
				return $data;
		}else
		{	
			return '';
		}			
	}

	


	function insertar($nombre, $apellido, $usuario, $email, $password){
		//conexion a la base de datos
		$this->conectar();	
			echo "Conectado <br>";
		$sentencia = "INSERT INTO usuarios(Nombre,Apellido,Usuario,Email,Password) VALUES ('$nombre', '$apellido', '$usuario', '$email', '$password')";	
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
 	
 	function entrar($usuario, $password){

 		$this->conectar();

 		$query = $this->consulta("SELECT Usuario,Password FROM usuarios WHERE Usuario='$usuario' AND Password='$password'");
 	    
 	    $this->disconnect();					
		if($this->numero_de_filas($query) > 0) // existe -> datos correctos
		{		
				return true;
		}else
		{	
			return false;
		}		

 	}    
 	    				
		
					
	

	function actualizar($usuario, $email, $password){
		//conexion a la base de datos
		$this->conectar();	
		$sentencia = "UPDATE usuarios SET Usuario='$usuario', Email='$email', Password='$password' WHERE Password='$password'";
		echo $sentencia;	
	$query = $this->consulta("UPDATE usuarios SET Usuario='$usuario', Email='$email', Password='$password' WHERE Password='$password'");
 	    $this->disconnect();					
		if($query) // existe -> datos correctos
		{		
				return true;
		}else
		{	
			return false;
		}			
	}

		function actualizarFoto($foto,$user){
		//conexion a la base de datos
		$this->conectar();	
		$sentencia = "UPDATE usuarios SET Fotoperfil='$foto' WHERE Usuario='$user'";
		echo $sentencia;	
	    $query = $this->consulta("UPDATE usuarios SET Fotoperfil='$foto' WHERE Usuario='$user'");
 	    $this->disconnect();					
		if($query) // existe -> datos correctos
		{		
				return true;
		}else
		{	
			return false;
		}			
	}
	
}

?>