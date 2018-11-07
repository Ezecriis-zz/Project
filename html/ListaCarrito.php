<!-- html/ListaCarrito.php -->
<!DOCTYPE html>
<html>
	<head>
		<title>Lista del Carrito</title>
		<meta charset="utf-8" />
		<style>
		table{
			border: 3px solid ;	
			font-family: Century Gothic;
			border-collapse:collapse;
		}
		
			h1{
			font-family: Century Gothic;
			font-weight:bold;
			text-align: center;
		}
	
		.uno{
			border: 1px solid;

			font-weight:bold;
			padding-left: 10px;
			padding-right: 10px;
			
		}
		.texto{
			text-align: center;
		}
		#total{
			font-size: 20px;
			height: 60px;
			border-top: 3px solid;
			font-weight:bolder;
		}
		a{
			font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
			 text-decoration:none; 
			 font-weight:bold;
			 color: #626966;
		}
		
		tr:nth-child(even) { background: #ddd }
		tr:nth-child(odd) { background: #fff }
		</style>
	</head>
	<body>
	
	

	<h1>MIS COMPRAS</h1>
		<?php $cant = 1;
			$total = 0; ?>
			

		<center><table>
			<tr>
				<td class="uno">DETALLE</td>
				<td class="uno">PRECIO</td>
				<td class="uno">CANTIDAD</td>
				<td class="uno">SUBTOTAL</td>
				<td class="uno"></td>
			</tr>
			<?php foreach($this->carrito->getCarrito() as $c){?>
			<tr>
				<td class="texto"><?php echo $c->getDetalleProd(); ?></td>
				<td class="texto"><?php echo $c->getPrecioProd(); ?></td>
				<td class="texto"><?php echo $c->getCantidadProd(); ?></td>
				<td class="texto"><?php echo $c->getCantidadProd() * $c->getPrecioProd(); ?></td>
				<form action="" method="post">
				<td><input class = "eliminar" type="submit" value="Eliminar" /></td>
					<input type="hidden" name="idEliminar" value="<?=$c->getIdProducto();?>" />
				</form>
			</tr>
			
			<?php } ?>
				<tr id="total">
					<td colspan="3" class="texto">TOTAL</td>
					<td class="texto">$<?=$this->carrito->calcularTotal()?></td>	
					<td></td>					
				</tr>
		</table>
		
			<br/>
			<a href="VerMarcas">Para seguir comprando haz click aquí</a>
			<br/>
			<br/>
		
			
			<form method="post" action="">		
			<input type="submit" value="Comprar"/>
			</form>		
			
			</center>
		
		
		
	
	
	</body>
</html>
	