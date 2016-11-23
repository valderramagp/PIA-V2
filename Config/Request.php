<?php 
	namespace Config;
	
	class Request {
		private $controlador;
		private $accion;
		private $argumento;

		public function __construct() {
			if(isset($_GET['url'])) {
				$ruta = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
				$ruta = explode("/", $ruta);
				$ruta = array_filter($ruta);

				if($ruta[0] == "index.php") {
					$this->controlador = "Home";
				} else {
					$this->controlador  = strtolower(array_shift($ruta));
				}
				
				$this->accion  = strtolower(array_shift($ruta));
				if(!$this->accion) {
					$this->accion = "index";
				}
				$this->argumento = $ruta;
			} else {
				$this->controlador = "Home";
				$this->accion = "index";
			}
		}

		public function getControlador() {
			return $this->controlador;
		}

		public function getAccion() {
			return $this->accion;
		}

		public function getArgumento() {
			return $this->argumento;
		}
	}
?>