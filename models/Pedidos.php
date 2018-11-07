<?php 

//models/Pedidos

class Pedidos extends model {
	
	public function crearPedido($carrito, $usuario){
	
		if($usuario == null) throw new Exception;
		$this->db->query("SELECT codigoCliente FROM clientes WHERE mail like '". $usuario['mail']. "'");
		if( $this->db->numRows() != 1 ) throw new Exception;
		// Verifica que hayaun solo cliente con ese mail. Si hay mas de 1 arroja exception
		
		
		$us = $usuario['cuil'];
		$this->db->query("INSERT INTO facturas( numeroFactura , fecha, cuil) VALUES ( '', now()," .$us. " )");
		

		// ingresa facturas con el cuil del cliente. Ingresa 1 factura		
		
		$pk = $this->db->getPk();	
		
		//foreach($carrito as $c){		
		foreach($carrito as $d){
		
		$this->db->query("INSERT INTO tiene ( codigoParte, numeroFactura, cantidad, precio) values (". $d['codigoParte']. ",". $pk. ",". $d['cantidad'].",". $d['precio']. " )");
		$this->ActualizarStock($d['codigoParte'],$d['cantidad']);
		
		} // recorre carrito inserta en tabla Tiene, y llama a la funcion privada Actualizar Stock
		
		return $pk; //retorna numero de factura para poner en resumen
			
	}
		
	public function ActualizarStock($CodigoParte, $cantidad){
		
		$this->db->query("SELECT * FROM partes WHERE codigoParte =".$CodigoParte);
		$aux = $this->db->fetch(); // ejecuta la query y retorna el conjunto de partes con el codigoParte requerido
		
		$stock = $aux['stock'];
		
		$stock_actual = ($stock - $cantidad);
		$this->db->query("UPDATE partes SET  stock = ". $stock_actual. " WHERE codigoParte =".$CodigoParte);
	}
		
	public function retornaFactura($factura){
		
		$retorno = $this->db->query("SELECT * FROM contenidofactura WHERE numeroFactura =".$factura);
		return $this->db->fetchAll();
	}
			
	public function Buscar($num){
	
		$this->db->query("SELECT * FROM facturas WHERE numeroFactura =".$num);
		$cantidad = $this->db->numRows();
		if($cantidad == 1){
			return $this->db->fetch();
		}
		else
		{
			 return false;
		}
	}
	
	public function cancelar($id){
	
		$this->db->query("UPDATE pedido
						  SET estado = 'cancelado'
					      WHERE id_pedido =".$id);
	
	
	}	
	
	public function Devolver($num){
	
		try { $this->db->query("INSERT INTO devoluciones VALUES( '',".$num. ")" );
				return 1;}
		catch (Exception $e) {
		echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		}
	}	
}