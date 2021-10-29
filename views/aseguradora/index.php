<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
        
        <title>Aseguradoras</title>
    </head>
    
    <body>
        <div class="container">
            <?php require 'views/header.php'?>
            
            <div class="row justify-content-center">
                <div class="col-8 text-center" id="respuesta">

                </div>
            </div>
            
            <div class="row justify-content-around align-content-around">
                <?php 
                    include_once 'models/aseguradora.php';
                    foreach($this->aseguradoras as $row){
                        $aseguradora = new Aseguradora();
                        $aseguradora = $row;
                ?>
                    <div id="card-<?php echo $aseguradora->cif; ?>" class="card col-12 col-md-6 col-lg-3 p-0 align-content-stretch mb-3" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <div class="card-header">
                                Datos Aseguradora
                            </div>
                            <li class="list-group-item"><?php echo $aseguradora->nombre; ?></li>
                            <li class="list-group-item"><?php echo $aseguradora->cif; ?></li>
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
                            <li class="list-group-item">
                                <?php if($_SESSION['user'] == $aseguradora->cif || $_SESSION['user'] == 'admin'){?>
                                    <a id="bEditar" class="btn btn-primary me-3" data-cif = "<?php echo $aseguradora->cif; ?> ">Editar</a>
                                    <?php if($_SESSION['user'] == 'admin'){?>
                                        <button id="bEliminar" class="btn btn-danger" data-cif="<?php echo $aseguradora->cif ?>">Eliminar</button>
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