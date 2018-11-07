<?php 

// controllers / Marcas.php

require '../fw/fw.php';
require '../models/Modelo.php';
require '../view/ListaModelo.php';

$p = new Modelo; //el nombre del modelo
$Modelo = $p->getModelo();

$v = new ListaModelo; //objeto tipo vista
$v->Marcas = $Modelo;
//var_dump($Modelo);
$v->render();
exit;