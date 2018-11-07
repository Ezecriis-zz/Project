<?php 
//models / Lista.php



//class Productos extends Model {

class Lista extends Model {

	public function getLista($Lista){
		
        if(!ctype_digit($Lista)) throw new Exception;
		if($Lista < 1) throw new Exception;

		$this->db->query("SELECT * FROM detalles where marca_id = '$Lista'");
		
		if( $this->db->numRows() < 1 ) throw new Exception;
		return $this->db->fetchAll();
	}


public function getPartes($id) {
		
		//if(!ctype_digit($id)) throw new Exception;
		//if($id < 1) throw new Exception;
		$this->db->query("SELECT * FROM detalles WHERE marca_id =".$id);
		if( $this->db->numRows() != 1 ) throw new Exception;
		return $this->db->fetch();
	  }
   

//public function getCarro($codigoParte){
//	    $this->db->query("SELECT * FROM detalles WHERE codigoParte =".$codigoParte);
///		if( $this->db->numRows() != 1 ) throw new Exception;
	//	return $this->db->fetch();
//}   
   } 