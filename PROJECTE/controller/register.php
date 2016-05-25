<?php

require_once '../model/db.class.php';
require_once '../model/usuario.class.php';

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$user = $_POST["user"];
$email = $_POST["email"];
$password = $_POST["password"];


$usu=new Usuario();

$usu->insertar($nombre,$apellidos,$user,$email,$password);

?>