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

		public function getRecentProps() {
			$sql = "SELECT pub.*, ti.descripcion as tipoInmueble FROM publicaciones as pub INNER JOIN propiedades prop on pub.idProp = prop.idProp INNER JOIN tiposinmueble ti ON prop.tipoInmueble = ti.idTipoInmueble ORDER BY prop.fechaCreada LIMIT 3";
			$datos = $this->db->consultaRetorno($sql);
			return $this->sqlToObject($datos);
		}

		public function getCaracteristicasDestacadasByProp($idProp) {
			$sql = "SELECT cc.descripcion, pc.valor FROM `propiedad-caracteristica` pc INNER JOIN catcaracteristicas cc on pc.idCatCaracteristica = cc.idCatCaracteristica WHERE cc.destacado = 1 && pc.idProp = ". $idProp."";
			$datos = $this->db->consultaRetorno($sql);
			return $datos;
		}

		private function sqlToObject($datos) {
			while ($row = mysqli_fetch_array($datos)) {
				$this->set("idProp", $row["idProp"]);
				$this->set("claveProp", $row["claveProp"]);
				$this->set("tipoInmueble", $row["tipoInmueble"]);
			}

			return $this;
		}

		public function iterador() {
			return new IteradorPropiedad($this);
		}
	}

	class IteradorPropiedad {
		private $lista;
		private $index;

		public function __construct($propiedades) {
			$this->lista = $propiedades;
			$this->index = 0;
		}

		public function hasNext() {
			return $this->index < $lista.length() ? true : false;
		}

		public function next() {
			$valor = $lista[$index];
			$index++;
			return $valor;
		}

		public function current() {
			return $lista[$index];
		}
	}
?>