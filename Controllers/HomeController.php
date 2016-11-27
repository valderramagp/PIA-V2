<?php 
	namespace Controllers;

	use Models\Propiedad as Propiedad;

	class HomeController {
		private $propiedad;

		public function __construct() {
			$this->propiedad = new Propiedad();
		}


		public function index() {
			return $this->propiedad->getRecentProps();
		}

		public function charDestacados($idProp) {
			$datos = $this->propiedad->getCaracteristicasDestacadasByProp($idProp);
			return $datos;
		}
	}

	$home = new HomeController();

?>