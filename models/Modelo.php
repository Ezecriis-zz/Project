<?php 
//models / Modelo.php


class Modelo extends Model {
	public function getModelo(){
		$this->db->query("SELECT * FROM marcas ");
		return $this->db->fetchAll();
	}
}