<?php 
//models / vista.php


class ver extends Model {
	public function getver(){
		$this->db->query("SELECT * FROM detalles ");
		return $this->db->fetchAll();
	}
}