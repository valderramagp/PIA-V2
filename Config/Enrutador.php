<?php 
	namespace Config;

	class Enrutador {
		public static function run(Request $request) {
			$controlador = $request->getControlador() . "Controller";
			$ruta = ROOT . "Controllers" . DS . $controlador . ".php";
			$accion = $request->getAccion();

			if($accion == "index.php") {
				$accion = "index";
			}

			$argumento = $request->getArgumento();
			if(is_readable($ruta)) {
				require_once $ruta;
				$mostrar = "Controllers\\" . $controlador;
				$controlador = new $mostrar;
				if (!isset($argumento)) {
					$model = call_user_func(array($controlador, $accion));
				} else {
					$model = call_user_func_array(array($controlador, $accion), $argumento);
				}
			}

			//cargar vista
			$ruta = ROOT . "Views" . DS . $request->getControlador() . DS . $request->getAccion() . ".php";
			if(is_readable($ruta)) {
				require_once $ruta;
			} else {
				print("No se encontró la ruta: " . $ruta);
			}
		}
	}
 ?>