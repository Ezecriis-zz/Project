<?php 

//controllers / carro.php

require '../fw/fw.php';
require '../models/Lista.php';
require '../views/carrito.php';

if(!isset($_POST['cantidad'])) die();

$d = new Carro;
//$datos = $d->getCarro($_POST['id']);

//$agregar=array(	   'detalle'=>$datos['detalle'],
	                'precio'=>$datos['precio'], 
			      'cantidad'=> $_POST['cantidad'] );


//$_SESSION['carrito'][] = $agregar;
	
	
$v = new Carrito;
$v->render();