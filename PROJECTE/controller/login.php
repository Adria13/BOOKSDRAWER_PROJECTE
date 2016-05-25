<?php

session_start();

require_once '../model/db.class.php';
require_once '../model/usuario.class.php';
//include './conexion_AD.php';


$user = $_POST["user"];
$password = $_POST["password"];


$usu=new Usuario();

$valor = $usu->entrar($user,$password);

if ($valor){
	header('Location: ../index.php');
	$_SESSION["username"] = $user;
}else{
	
}

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../views/Fomularis/styleLogin.css">
	<link rel="stylesheet" type="text/css" href="../views/css/menu.css">
	<title>Login</title>
</head>
<body>
	<section id="fondo">
		
	</section>
	<div class="alerta">
  		<span class="cerrar" onclick="this.parentElement.style.opacity='0';">×</span> 
  		<strong>Error !</strong> Usuario o contraseña incorrectos.
	</div>
	<div id="login">
		<h1>BooksDrawer</h1>
			<p id="eslogan">Tu página de libros</p>
		<form action="login.php" method="post">
		<label for="user">Usuario: </label><br>
		<input type="text" name="user" required/><br>
		<label for="password">Contraseña: </label><br>
		<input type="password" name="password"/ required><br>
		<input type="submit" value="Login">
		</form>
	</div>
	
</body>
</html>

