<?php

	class Categorias {

		private $db;
		private $categorias;

		public function __construct(){
			$this->db = Conectar::conexion();
			$this->categorias = array();
		}

		public function get_categorias()
		{
			$sql = "SELECT * FROM categorias";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->categorias[] = $row;
			}
			return $this->categorias;
		}

		public function insertar($name){
			$resultado = $this->db->query("INSERT INTO categorias (name) VALUES ('$name')");
		}

		public function modificar($id, $name){
			$resultado = $this->db->query("UPDATE categorias SET name='$name' WHERE id = '$id'");			
		}

		public function eliminar($id){
			$resultado = $this->db->query("DELETE FROM categorias WHERE id = '$id'");
		}

		public function get_pelicula($id)
		{
			$sql = "SELECT * FROM categorias WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	}
?>