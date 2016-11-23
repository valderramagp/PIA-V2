<?php 
	namespace Models;

	class Conexion {
		
		private static $instance;

		private $datos = array(
			"host" => "localhost",
			"user" => "root",
			"pass" => "",
			"db" => "piav2"
		);

		private $con;

		private function __construct()
		{
			$this->con = new \mysqli($this->datos["host"], $this->datos["user"], $this->datos["pass"], $this->datos["db"]);
		}

		public static function getInstance() {
			if(!self::$instance) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		private function __clone() {}

		public function getConnection() {
			return $this->con;
		}

		public function consulta($sql) {
			$this->con->query($sql);
		}

		public function consultaRetorno($sql) {
			return $this->con->query($sql);
		}
	}
 ?>