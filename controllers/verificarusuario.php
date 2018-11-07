<?php

//controller/verificarusuario.php

require '../fw/fw.php';
require '../models/Clientes.php';
require '../view/InicioSesion.php';
require '../view/Mensaje.php';
require '../view/Mensaje2.php';


if(isset($_SESSION['usuario'])){
	 $m = new mensaje;
	 $m->render();
	 exit;
}

if(!isset($_POST['usuario'])) die();


$usuario = new Clientes;
$datos = $usuario->datosUsuario($_POST['usuario'], $_POST['clave']);	
//var_dump($datos);die;

if($datos) 
{
	$_SESSION['usuario'] = $datos;
	$_SESSION['logueado'] = true;		
	//var_dump($_SESSION['usuario']);die;
	header("Location: Home");
	exit;
}
else 
{	
	$m = new mensaje2;
	$m->render();
	exit;
}