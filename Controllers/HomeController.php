<?php 
	namespace Controllers;

	use Models\Propiedad as Propiedad;

	class HomeController {
		private $propiedad;

		public function __construct() {
			$this->propiedad = new Propiedad();
		}


		public function index() {
			$datos = $this->propiedad->getPropiedades();
			return $datos;
		}
	}

?>