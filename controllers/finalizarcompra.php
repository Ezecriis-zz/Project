<?php

//controller/finalizarcompra.php

require '../fw/fw.php';
require '../models/Pedidos.php';
require '../view/VerFactura.php';



if(!isset($_SESSION['usuario'])) {
	header("Location: ../login");
	exit;
}
if($_SESSION['carrito'] == NULL){
	$m = new mensaje3;
	$m->render();
	exit;		
}else{

$p = new Pedidos;
$pedido = $p->crearPedido($_SESSION['carrito'], $_SESSION['usuario']);
$retornaFactura = $p->retornaFactura($pedido);

unset($_SESSION['carrito']);

$v = new VerFactura;
$v->factura = $pedido;
$v->items = $retornaFactura;
$v->render();
}




