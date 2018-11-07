<?php 

//models/Compras.php

Class Compras extends model{

	public function VerificarCompra($codigoCompra, $codigoParte, $cantidad) {
	
		if(!isset($codigoCompra)) throw new Exception;
		if(!ctype_digit($codigoCompra)) throw new Exception;
		
		if(!isset($codigoParte)) throw new Exception;
		if(!ctype_digit($codigoParte)) throw new Exception;
		if(strlen($codigoParte) != 4) throw new Exception;
		
		if(!isset($cantidad)) throw new Exception;
		if(!ctype_digit($cantidad)) throw new Exception;
		if($cantidad < 1) throw new Exception;
		
		$this->db->query("SELECT * FROM compras WHERE codigoCompra = '$codigoCompra' " );
		$numFila = $this->db->numRows();
		if($numFila == 0){
			return $numFila;
			exit;
		}
		return $this->db->fetchAll();
	}
	
	public function GenerarCompra($dni,$numeroFactura){
		
		if(!isset($dni)) throw new Exception;
		if(!ctype_digit($dni)) throw new Exception;
		if(strlen($dni) != 11) throw new Exception;
		
		if(!isset($numeroFactura)) throw new Exception;
		if(!ctype_digit($numeroFactura)) throw new Exception;
		if($numeroFactura < 1) throw new Exception;
		
		$this->db->query("SELECT * FROM compras" );
		$numFila = $this->db->numRows();
		$this->db->query("INSERT INTO `compras`(`codigoCompra`, `dni`, `numeroFactura`) VALUES ("",'$dni','$numeroFactura')");
		$this->db->query("SELECT * FROM compras");
		$numFilas2 = $this->db->numRows();
		IF($numFila == $numFilas2){
			
		$message = "error al ingresar datos";
		echo "<script type='text/javascript'>alert('$message');</script>";
		exit;
		}
	}
}