<?php

//controller/carrito

require '../fw/fw.php';
require '../models/Lista.php';
require '../view/Carrito.php';

if(!isset($_POST['cantidad'])) die();

$d = new Lista;
$datos = $d->getPartes($_POST['id']);

//$agregar=array('codigoParte'=>$datos['codigoParte'],'detalle'=>$datos['detalle'], 'precio'=> $datos['precio'],'cantidad'=> $//_POST['cantidad'] );

//$_SESSION['carrito'][] = $agregar;	
	
$v = new Carrito;
$v->render();	

?>