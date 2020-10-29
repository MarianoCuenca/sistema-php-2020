<?php
	
	class PeliculasController {

		public function __construct(){
			require_once "models/Peliculas.php";
		}

		public function index(){

			$peliculas = new Peliculas();
			$data["titulo"] = "Peliculas";
			$data["peliculas"] = $peliculas->get_peliculas();

			require_once "views/peliculas/peliculas.php";	
		}

		public function nuevo(){
			$data["titulo"] = "Peliculas";
			require_once "views/peliculas/peliculas_nuevo.php";
		}

		public function guarda(){
			$name 			= $_POST['name'];
			$description 	= $_POST['description'];
			$year 			= $_POST['year'];
			$categoria_id 	= $_POST['categoria_id'];

			$peliculas = new Peliculas();
			$peliculas->insertar($name, $description, $year, $categoria_id);
			$data["titulo"] = "Peliculas";
			$this->index();
		}

		public function modificar($id){

			$peliculas = new Peliculas();

			$data["id"] = $id;
			$data["peliculas"] = $peliculas->get_pelicula($id);
			$data["titulo"] = "Peliculas";
			require_once "views/peliculas/peliculas_modifica.php";
		}

		public function actualizar(){

			$id 			= $_POST['id'];
			$name 			= $_POST['name'];
			$description 	= $_POST['description'];
			$year 			= $_POST['year'];
			$categoria_id 	= $_POST['categoria_id'];

			$peliculas = new Peliculas();
			$peliculas->modificar($id, $name, $description, $year, $categoria_id);
			$data["titulo"] = "Peliculas";
			$this->index();
		}

		public function eliminar($id){

			$peliculas = new Peliculas();
			$peliculas->eliminar($id);
			$data["titulo"] = "Peliculas";
			$this->index();
		}	
	}
?>