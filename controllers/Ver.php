<?php 

// controllers / Ver.php

require '../fw/fw.php';
require '../models/vista.php';
require '../view/Home.php';

$p = new ver; //el nombre del modelo
$ver = $p->getver();

$v = new ver; //objeto tipo vista
$v->verUs = $ver;
//var_dump($Modelo);
$v->render();
exit;