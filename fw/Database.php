<?php

class Database {

	private $cn;//conexion
	private $res;//respuesta

	private static $instance;

	private function __construct() {}

	public static function getInstance() {
		if(!self::$instance) {
			self::$instance = new Database;
		}
		return self::$instance;
	}

	public function query($q) {
		if(!$this->cn) {
			$this->cn = mysqli_connect("localhost", "root", "", "serviciotecnico");
		}

		$this->res = mysqli_query($this->cn, $q);
		if(mysqli_error($this->cn)!="") {
			echo 'ERROR CONSULTA: ' . mysqli_error($this->cn);
		} 

	}

	public function fetchAll() {
		$aux = array();
		while($fila = $this->fetch() ) 
			$aux[] = $fila;

		return $aux;
	}

	public function fetch() {
		return mysqli_fetch_assoc($this->res);
	}

	public function numRows() {
		return mysqli_num_rows($this->res);
	}

	public function escape($str) {
		if(!$this->cn) {
			$this->cn = mysqli_connect("localhost", "root", "", "serviciotecnico");
		}
		return mysqli_escape_string($this->cn, $str);
	}

}