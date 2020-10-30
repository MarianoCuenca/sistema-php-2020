<?php
	
	class CategoriasController {

		public function __construct(){
			require_once "models/Categorias.php";
		}

		public function index(){

			$categorias = new Categorias();
			$data["titulo"] = "Categorias";
			$data["categorias"] = $categorias->get_categorias();

			require_once "views/categorias/categorias.php";	
		}

		public function nuevo(){
			$data["titulo"] = "Categorias";
			require_once "views/categorias/categorias_nuevo.php";
		}

		public function guarda(){
			$name 			= $_POST['name'];

			$categorias = new Categorias();
			$categorias->insertar($name);
			$data["titulo"] = "Categorias";
			$this->index();
		}

		public function modificar($id){

			$categorias = new Categorias();

			$data["id"] = $id;
			$data["categorias"] = $categorias->get_pelicula($id);
			$data["titulo"] = "Categorias";
			require_once "views/categorias/categorias_modifica.php";
		}

		public function actualizar(){

			$id 			= $_POST['id'];
			$name 			= $_POST['name'];

			$categorias = new Categorias();
			$categorias->modificar($id, $name);
			$data["titulo"] = "Categorias";
			$this->index();
		}

		public function eliminar($id){

			$categorias = new Categorias();
			$categorias->eliminar($id);
			$data["titulo"] = "Categorias";
			$this->index();
		}	
	}
?>