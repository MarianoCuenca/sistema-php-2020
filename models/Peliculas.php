<?php

	class Peliculas {

		private $db;
		private $peliculas;

		public function __construct(){
			$this->db = Conectar::conexion();
			$this->peliculas = array();
		}

		public function get_peliculas()
		{
			$sql = "SELECT * FROM peliculas";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->peliculas[] = $row;
			}
			return $this->peliculas;
		}

		public function insertar($name, $description, $year, $categoria_id){
			$resultado = $this->db->query("INSERT INTO peliculas (name, description, year, categoria_id) VALUES ('$name', '$description', '$year', '$categoria_id')");
		}

		public function modificar($id, $name, $description, $year, $categoria_id){
			$resultado = $this->db->query("UPDATE peliculas SET name='$name', description='$description', year='$year', categoria_id='$categoria_id' WHERE id = '$id'");			
		}

		public function eliminar($id){
			$resultado = $this->db->query("DELETE FROM peliculas WHERE id = '$id'");
		}

		public function get_pelicula($id)
		{
			$sql = "SELECT * FROM peliculas WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	}
?>