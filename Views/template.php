<?php 
	namespace Views;
	
	$template = new Template();

	class Template {
		public function __construct() {
?>
	<!DOCTYPE html>
	<html lang="es">
	<head>
	    <meta charset="UTF-8">
	    <title>PIA: Propiedades Inmobiliarias y Administración</title>
	    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	    <!-- jQuery -->
	    <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
	    
	    <!-- Bootstrap -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	    
	    <!-- Estílos de esta página -->
	    <link rel="stylesheet" href="<?php echo URL; ?>/Views/Template/Css/index.css">

	    <link href="https://fonts.googleapis.com/css?family=Amiko" rel="stylesheet">
	</head>
	<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	    <div class="container-fluid">
	        <a class="navbar-brand" href="#">
	            <img src="<?php echo URL; ?>/Views/Template/Imagenes/logo-houses.png" alt="">
	        </a>
	        <ul class="nav navbar-nav navbar-right">
	            <li><a href="">Inicio</a></li>
	            <li><a href="">Propiedades</a></li>
	            <li><a href="">Contacto</a></li>
	        </ul>
	    </div>
	</nav>
<?php
		}

		public function __destruct() {
?>
	</body>
	</html>
<?php
		}
	}
?>