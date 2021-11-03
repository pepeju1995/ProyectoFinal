<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/estilos.css">
        
        <title>Averias</title>
    </head>
    
    <body>
        <div class="container">
            <?php require 'views/header.php'?>
                   
            <div class="row justify-content-center">
                <div class="col-8 text-center" id="respuesta">

                </div>
            </div>
            
            <div class="row justify-content-around"> 
                <?php 
                    include_once 'models/asegurado.php';
                    foreach($this->averias as $row){
                        $averias = new Averias();
                        $averias = $row;
                ?>
                <div id="card-<?php echo $averias->id; ?>" class="card col-12 col-md-6 col-lg-3 p-0 mb-3" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <div class="card-header">
                            Aseguradora
                        </div>
                        <li class="list-group-item"><?php echo $averias->aseguradora; ?></li>
                        <div class="card-header">
                            Asegurado
                        </div>
                        <li class="list-group-item"><?php echo $averias->asegurado; ?></li>
                        <div class="card-header">
                            Fecha y descripcion
                        </div>
                        <li class="list-group-item"><?php echo $averias->fecha; ?></li>
                        <li class="list-group-item"><?php echo $averias->descripcion; ?></li>
                        <?php if($_SESSION['user'] == $averias->aseguradora || $_SESSION['user'] == 'admin'){?>
                            <li class="list-group-item text-center">
                                <a id="bEditar" class="btn btn-primary me-3" href="<?php echo constant('URL')?>aseguradoras/verAseguradora/<?php echo $aseguradora->nif; ?>">Editar</a>
                                <?php if($_SESSION['user'] == 'admin'){?>
                                    <button id="bEliminar" class="btn btn-danger" data-nif="<?php echo $aseguradora->nif ?>">Eliminar</button>
                                <?php } ?>
                            </li>
                        <?php }?>
                    </ul>
                </div>
                <?php } ?>
            </div>
        
            <?php require 'views/footer.php'?>
        </div>

        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/jquery-3.6.0.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/popper.min.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/bootstrap.min.js"></script>
    </body>
</html>