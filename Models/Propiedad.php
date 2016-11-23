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
		private $db;

		public function __construct()
		{
			$this->db = Conexion::getInstance();
			$this->con = $this->db->getConnection();
		}

		public function set($atributo, $valor) {
			$this->$atributo = $valor;
		}

		public function get($atributo) {
			return $this->$atributo;
		}

		public function getPropiedades(){
			$sql = "SELECT * FROM propiedades";
			$datos = $this->db->consultaRetorno($sql);
			return $datos;
		}
	}
?>