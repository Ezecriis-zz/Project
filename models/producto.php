<?php 


class producto{
	private $idProducto;
	private $detalleProducto;
	private $precioProducto;
	private $cantidadProducto;


	public function __construct($idProd, $detalle, $precioProd, $cantidad){
		$this->idProducto = $idProd;
		$this->detalleProducto = $detalle;
		$this->precioProducto = $precioProd;
		$this->cantidadProducto = $cantidad;
	}

	public function getIdProducto(){
		return $this->idProducto;
	}

	public function getDetalleProd(){
		return $this->detalleProducto;
	}

	public function getCantidadProd(){
		return $this->cantidadProducto;
	}

	public function getPrecioProd(){
		return $this->precioProducto;
	}

	public function sumarCantidad($cant){
		$this->cantidadProducto = $cant;
	}
}



 ?>