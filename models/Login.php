<?php

	class login {

		private $db;
		private $users;

		public function __construct(){
			$this->db = Conectar::conexion();
			$this->categorias = array();
		}

		public function verify($email, $password)
		{
			$sql = "SELECT * FROM usuarios where email = '$email' and password = '$password'";
			$resultado = $this->db->query($sql);
			if($resultado->num_rows){
				return true;
			}else{
				return false;
			}
		}

	}
?>