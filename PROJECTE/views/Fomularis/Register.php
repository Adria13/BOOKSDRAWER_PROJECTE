<?php

require_once "db.class.php";
require_once "usuario.class.php";

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$user = $_POST["user"];
$email = $_POST["email"];
$password = $_POST["password"];


$user=new Usuario()

$user->insertar($nombre,$apellidos,$user,$email,$password);

?>