<?php
	
	class LoginController {

		public function __construct(){
			require_once "models/Login.php";
			require_once "controllers/Peliculas.php";
		}

		public function index(){
			require_once "views/login/index.php";
        }

        public function verificar()
        {
            $email 			    = $_POST['email'];
			$password 			= $_POST['password'];
			
			$crl 				= new PeliculasController();
			$login				= new Login();

			$user = $login->verify($email, $password);
			if($user){
				return $crl->index();
			}

			return $this->index();
        }

	}
?>