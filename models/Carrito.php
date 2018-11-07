<?php 

	class Carrito{
		private static $instance;
		private $listaProd;
		private $db;

		private function __construct(){
			if (!isset($_SESSION['carrito'])) $_SESSION['carrito'] = array();
			$this->db = Database::getinstance();
		}

		public static function getInstance(){
			if (!self::$instance) self::$instance = new Carrito();
				return self::$instance;
		}

		public function getCarrito(){
			return unserialize(serialize($_SESSION['carrito']));
		}

		public function addToCarrito($item){
			$_SESSION['carrito'][] = $item;
		}

		public function matarCarrito(){
			//unset($_SESSION['carrito']);
			$_SESSION['carrito'] = array();
		}

		public function eliminarProd($id){
			foreach ($this->getCarrito() as $key => $carrito) {
				unset($_SESSION['carrito'][$key]);
				return;
			}
		}

		public function sumarCantidad($item){
			foreach ($this->getCarrito() as $key => $carrito) {
				if ($carrito->getIdProducto() == $item->getIdProducto()) {
					$aux = unserialize(serialize($_SESSION['carrito'][$key]));
					$aux->sumarCantidad((unserialize(serialize($_SESSION['carrito'][$key]))->getCantidadProd())+($item->getCantidadProd()));
					$_SESSION['carrito'][$key]=$aux;
					return;
				}
			}
		}

		public function buscarProductoCarrito($item){
			foreach ($this->getCarrito() as $key => $carrito) {
				if ($carrito->getIdProducto() == $item->getIdProducto()) {
					return true;
				}
			}
			return false;
		}

		public function calcularTotal(){
			$total = 0;
			foreach ($this->getCarrito() as $carrito) {
				$total += $carrito->getCantidadProd() * $carrito->getPrecioProd();
			}
			return $total;
		}

		public function carritoIsNotEmpty(){
			if ($this->getCarrito() != null) {
				return true;
			}
			else return false;
		}

	}

?>