<?php 

//models/Partes

Class Partes extends model{

	public function AgregaParte($detalle, $precio, $stock, $puntoReposicion, $categoriaID) {
	
		if(!isset($detalle)) throw new Exception;
		if(strlen($detalle) < 3) throw new Exception;		
		if(strlen($detalle) > 250) throw new Exception;		
		$detalle = substr($detalle, 0, 250);	
		$detalle = $this->db->escapeString($detalle);
	
		if(!isset($precio)) throw new Exception;
		if(!ctype_digit($precio)) throw new Exception;
		if($precio < 1) throw new Exception;
		
		if(!isset($stock)) throw new Exception;
		if(!ctype_digit($stock)) throw new Exception;
		if(strlen($stock) < 1) throw new Exception;
		
		if(!isset($puntoReposicion)) throw new Exception;
		if(!ctype_digit($puntoReposicion)) throw new Exception;
		if(strlen($puntoReposicion) < 1) throw new Exception;
		
		if(!isset($puntoReposicion)) throw new Exception;
		if(!ctype_digit($puntoReposicion)) throw new Exception;
		

		$this->db->query("INSERT INTO partes(detalle, precio, stock, puntoReposicion, categoriaID) 
						  values('$detalle', $precio, $stock, $puntoReposicion, $categoriaID)" );
	
	
	}
	
	public function ModificaParte($codigoParte, $detalle, $precio, $stock, $puntoReposicion, $categoriaID){
		
		if(!isset($detalle)) throw new Exception;
		if(strlen($detalle) < 3) throw new Exception;		
		if(strlen($detalle) > 250) throw new Exception;		
		$detalle = substr($detalle, 0, 250);	
		$detalle = $this->db->escapeString($detalle);
	
		if(!isset($codigoParte)) throw new Exception;
		if(!ctype_digit($codigoParte)) throw new Exception;
		if(strlen($codigoParte) != 4) throw new Exception;
		
		if(!isset($precio)) throw new Exception;
		if(!ctype_digit($precio)) throw new Exception;
		if($precio < 1) throw new Exception;
		
		if(!isset($stock)) throw new Exception;
		if(!ctype_digit($stock)) throw new Exception;
		if(strlen($stock) < 1) throw new Exception;
		
		if(!isset($puntoReposicion)) throw new Exception;
		if(!ctype_digit($puntoReposicion)) throw new Exception;
		if(strlen($puntoReposicion) < 1) throw new Exception;
				
		$this->db->query("UPDATE partes SET codigoParte = '$codigoParte, detalle = '$detalle', precio = '$precio', stock = '$stock', puntoReposicion = '$puntoReposicion', 
						  categoriaID = '$categoriaID'
						  WHERE codigoParte = '$codigoParte' ");
	}
	
	public function EliminarParte($codigoParte) {
	
		if(!isset($codigoParte)) throw new Exception;
		if(!ctype_digit($codigoParte)) throw new Exception;
		if(strlen($codigoParte) != 4) throw new Exception;
		
		$this->db->query("DELETE FROM partes where codigoParte = $codigoParte" );
	}
	
	public function altaStock($codigoParte, $cantidad){
		
		
		
		$this->db->query("UPDATE partes SET stock = stock + '$cantidad'  
						  WHERE codigoParte = '$codigoParte' ");
	}
	public function verPartes() {
		
		$this->db->query("SELECT * FROM partes");
		return $this->db->fetchAll();
	}
	
	public function listaPorCategorias($categoriaID) {
		
		$this->db->query("SELECT * FROM partes WHERE categoriaID = '$categoriaID' ");
		return $this->db->fetchAll();
	}
	
	public function mostrarParte($codigoParte) {
			
		//validar codigo parte
		if(!isset($codigoParte)) throw new Exception;
		if(!ctype_digit($codigoParte)) throw new Exception;
		if(strlen($codigoParte) != 4) throw new Exception;
		
		$this->db->query("SELECT * FROM partes WHERE codigoParte = '$codigoParte' limit 1 ");
		$numFila = $this->db->numRows();
		
		if($numFila == 0){
			return false;
		
		}
		return $this->db->fetchAll();
	}
	
	public function getPartes($id) {
		
		if(!ctype_digit($id)) throw new Exception;
		if($id < 1) throw new Exception;
		$this->db->query("SELECT * FROM partes WHERE codigoParte =".$id);
		if( $this->db->numRows() != 1 ) throw new Exception;
		return $this->db->fetch();
	}
	
	public function agregastock($cantidad) {
		
		if(!isset($cantidad)) throw new Exception;
		if(strlen($cantidad) < 1) throw new Exception;
		
		$this->db->query("UPDATE partes SET stock = '$stock' WHERE codigoParte = '$codigoParte' ");
	}
	public function buscarParte($buscar) {
		
		if(!isset($buscar)) throw new Exception;
		if(strlen($buscar) < 1) throw new Exception;
		
		$this->db->query("SELECT * FROM partes WHERE detalle LIKE '%$buscar%'; ");
		return $this->db->fetchAll();
	}

	public function verFrenos() {
		
		$this->db->query("SELECT * FROM partes WHERE categoriaID = 1");
		return $this->db->fetchAll();
	}
	
	public function verMotor() {
		
		$this->db->query("SELECT * FROM partes WHERE categoriaID = 2");
		return $this->db->fetchAll();
	}
	public function verTransmicion() {
		
		$this->db->query("SELECT * FROM partes WHERE categoriaID = 3");
		return $this->db->fetchAll();
	}
	public function verRefrigeracion() {
		
		$this->db->query("SELECT * FROM partes WHERE categoriaID = 4");
		return $this->db->fetchAll();
	}
	public function verArranque() {
		
		$this->db->query("SELECT * FROM partes WHERE categoriaID = 5");
		return $this->db->fetchAll();
	}
	public function verSuspencion() {
		
		$this->db->query("SELECT * FROM partes WHERE categoriaID = 6");
		return $this->db->fetchAll();
	}
	public function verLubricacion() {
		
		$this->db->query("SELECT * FROM partes WHERE categoriaID = 7");
		return $this->db->fetchAll();
	}
	public function verDistribucion() {
		
		$this->db->query("SELECT * FROM partes WHERE categoriaID = 8");
		return $this->db->fetchAll();
	}
	public function verificarStock() {
		
		$this->db->query("SELECT * FROM partes WHERE stock<=puntoReposicion");
		return $this->db->fetchAll();
	}
}