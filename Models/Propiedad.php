<?php 
	namespace Models;

	class Propiedad {
		private $idProp;
		private $claveProp;
		private $tipoInmueble;
		private $latitud;
		private $longitud;
		private $fechaCreada;
		private $fechaActualizada;
		private $con;

		public function __construct()
		{
			$this->con = new Conexion();
		}

		public function set($atributo, $valor) {
			$this->$atributo = $valor;
		}

		public function get($atributo) {
			return $this->$atributo;
		}

		public function getPropiedades(){
			$sql = "SELECT * FROM propiedades prop INNER JOIN publicaciones pub ON prop.idProp = pub.idProp";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}
	}
?>