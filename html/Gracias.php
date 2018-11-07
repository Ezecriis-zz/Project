<!-- html/Gracias.php -->
<?php 
	$hoy = getdate();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Gracias</title>
		<meta charset="utf-8" />
		<link href="static\css\mensaje.css" rel = "stylesheet" type="text/css"/>
		<link type="text/css" rel="stylesheet" href="\autopartes\static\css\mensaje.css" />
	</head>
	
	<body>
	<div id="caja">
		<h3>GRACIAS POR SU COMPRA</h3>
		<p class="detalle">DETALEE DE COMPRA:</br>
		N° DE PEDIDO: <?=$this->gracias?></br>
		FECHA: <?=$hoy['mday']?>-<?=$hoy['mon']?>-<?=$hoy['year']?></br>
		ESTADO: "PENDIENTE"
		</p>
		<p class="volver"><a href="index.php">Home</a></p>	
	</div>	
	</body>
</html>