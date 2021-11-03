<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/estilos.css">
        
        <title>Aseguradoras</title>
    </head>
    
    <body>
        <div class="container-fluid px-0">
            <?php require 'views/header.php'?>
            
            <div class="row mb-5 justify-content-center">
                <div class="col-11 col-md-4">
                    <input class="form-control text-center" id="busqueda" type="text" placeholder="Buscar Aseguradora">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-8 text-center" id="respuesta">

                </div>
            </div>
            
            <div id="items" class="row justify-content-around align-content-around">
                <?php 
                    include_once 'models/aseguradora.php';
                    foreach($this->aseguradoras as $row){
                        $aseguradora = new Aseguradora();
                        $aseguradora = $row;
                ?>
                    <div id="card-<?php echo $aseguradora->nif; ?>" class="card col-12 col-md-6 col-lg-3 p-0 align-content-stretch mb-3" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <div class="card-header">
                                Datos Aseguradora
                            </div>
                            <li class="list-group-item"><?php echo $aseguradora->nombre; ?></li>
                            <li class="list-group-item nif"><?php echo $aseguradora->nif; ?></li>
                            <div class="card-header">
                                Direccion
                            </div>
                            <li class="list-group-item"><?php echo $aseguradora->direccion; ?></li>
                            <li class="list-group-item"><?php echo $aseguradora->localidad; ?></li>
                            <li class="list-group-item"><?php echo $aseguradora->cp; ?></li>
                            <div class="card-header">
                                Contacto
                            </div>
                            <li class="list-group-item"><?php echo $aseguradora->telefono; ?></li>
                            <li class="list-group-item"><?php echo $aseguradora->email; ?></li>
                            <li class="list-group-item"><?php echo $aseguradora->contacto; ?></li>
                            <li class="list-group-item text-center">
                                <?php if($_SESSION['user'] == $aseguradora->nif || $_SESSION['user'] == 'admin'){?>
                                    <a id="bEditar" class="btn btn-secondary me-3" href="<?php echo constant('URL')?>aseguradoras/verAseguradora/<?php echo $aseguradora->nif; ?>">Editar</a>
                                    <?php if($_SESSION['user'] == 'admin'){?>
                                        <button id="bEliminar" class="btn btn-danger" data-nif="<?php echo $aseguradora->nif ?>">Eliminar</button>
                                    <?php } ?>
                                <?php }?>
                            </li>
                        </ul>
                    </div>
                <?php } ?>  
            </div>

            <?php if($_SESSION['user'] == 'admin'){?>
                <div class="row justify-content-center">
                    <a class="col-4 btn btn-secondary" href="<?php echo constant('URL'); ?>aseguradoras/nuevaAseguradora">Nueva Aseguradora</a>
                </div>
            <?php } ?>

            <?php require 'views/footer.php'?>
        </div>

        <script src="<?php echo constant('URL'); ?>public/js/aseguradoras.js" type="module"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/jquery-3.6.0.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/popper.min.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/bootstrap.min.js"></script>
    </body>
</html>