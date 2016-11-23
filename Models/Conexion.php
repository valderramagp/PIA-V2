<?php 
	namespace Models;

	class Conexion {
		private $datos = array(
			"host" => "localhost",
			"user" => "root",
			"pass" => "",
			"db" => "piav2"
		);

		private $con;

		public function __construct()
		{
			$this->con = new \mysqli($this->datos["host"], $this->datos["user"], $this->datos["pass"], $this->datos["db"]);
		}

		public function consulta($sql) {
			$this->con->query($sql);
		}

		public function consultaRetorno($sql) {
			return $datos->con->query($sql);
		}
	}
 ?>