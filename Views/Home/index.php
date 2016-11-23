
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
<div class="jumbotron">
    <div class="container">
        <h2>Propiedes Inmobiliarias y Administración</h2>        
    </div>
    <div class="container">
        <div class="search">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3 search-filter">
                        <h4>UBICACIÓN <span class="glyphicon glyphicon-chevron-down"></span></h4>
                    </div>
                    <div class="col-md-3 search-filter">
                        <h4>OPERACIÓN <span class="glyphicon glyphicon-chevron-down"></span></h4>
                    </div>
                    <div class="col-md-3 search-filter">
                        <h4>INMUEBLE <span class="glyphicon glyphicon-chevron-down"></span></h4>
                    </div>
                    <div class="col-md-3 search-button">                            
                        <h4>BUSCAR <span class="glyphicon glyphicon-search"></span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $datos = Controllers\Home(); ?>