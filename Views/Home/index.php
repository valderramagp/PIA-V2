

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

<div class="container text-center">
    <h3>Propiedades Destacadas</h3>
</div>

<div class="container-fluid text-center" id="latestProp">
    <h3 class="section-title">Agregadas Recientemente</h3>
    <div class="separator"></div>
    <div class="latestPropContainer">
        <div class="latestPropList">
            <?php 
                $props = $home->index(); 
                while ($row = mysqli_fetch_array($props)) {
            ?>
            <div class="lateProperty">
                <div class="thumbnail">
                    <div class="image-container" style="background: url(<?php echo URL; ?>/Views/Template/Imagenes/banner-1.jpg)"></div>
                    <div class="caption text-left">
                        <h4>Propiedad</h4>
                        <div class="label label-warning">VENTA</div>
                        <div class="label label-default">CASA</div>
                        <div class="detail-list">
                            <ul class="left-list">
                                <li>Cuartos: 5</li>
                                <li>Estacionamientos: 2</li>
                                <li>Baños: 3.5</li>
                            </ul>
                            <ul class="right-list">
                                <li>Cuartos: 5</li>
                                <li>Estacionamientos: 2</li>
                                <li>Baños: 3.5</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>        
            <?php
                }
            ?>
            

        </div>
    </div>
</div>