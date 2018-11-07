
<?php 

//models/Clientes

Class Clientes extends model{

	public function datosUsuario($usuario, $clave){		
		
		if(!isset($usuario)) throw new Exception;
		if(strlen($usuario)<6) throw new Exception;		
		$usuario = substr($usuario,0,30);	
		//$usuario = $this->db->escapeString($usuario);

		if(!isset($clave)) throw new Exception;
		if(strlen($clave)<3) throw new Exception;
		$clave = substr($clave,0,20);
		//$clave = $this->db->escapeString($clave);		
		
		$this->db->query("SELECT * FROM usuario WHERE Email = '$usuario' AND Password = '$clave' limit 1 ");
		$numfila = $this->db->numRows();
		
		if($numfila == 0) {
			return false;
		}
		else{
			$datos = mysqli_fetch_assoc($res);
		
			if($_POST['passwd'] == sha1($datos['passwd'].$_SESSION['salt']) ){
				//login ok
				$_SESSION['logueado'] = true;
		
				header("Location: Home");
				exit;
		}
		else $error = true;
		}
		
		$salt = mt_rand(11111111,9999999999);
		$_SESSION['salt'] = $salt;
		
		return $this->db->fetch();
		/*try{	
		} catch (Exception $e) {
		echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		}*/
		
	}
	
	public function listaUsuarios() {
		
		$this->db->query("SELECT * FROM clientes");
		return $this->db->fetchAll();
	}
	
}
	