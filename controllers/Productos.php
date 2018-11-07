<?php 

// controllers / Productos.php

require '../fw/fw.php';//siempre para hacer consultas
require '../models/Lista.php';
require '../view/ListaProductos.php';

$p = new Lista; //el nombre del modelo
$Lista = $p->getLista($_GET['id']);

$v = new ListaProductos; //objeto tipo vista
$v->List = $Lista;
//var_dump($Lista);
$v->render();
exit;