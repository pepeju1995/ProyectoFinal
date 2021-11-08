<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Averias</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/img/icono.ico" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/estilos.css">
    </head>
    
    <body>
        <div class="container-fluid px-0">
            <?php require 'views/header.php'?>
                   
            <div class="row mb-5 justify-content-center">
                <div class="col-11 col-md-4">
                    <input class="form-control text-center" id="busqueda" type="text" placeholder="Buscar Averia">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-8 text-center" id="respuesta">

                </div>
            </div>
            
            <div id="items" class="row justify-content-around"> 
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
                        <li class="list-group-item nif"><?php echo $averias->asegurado; ?></li>
                        <div class="card-header">
                            Fecha y descripcion
                        </div>
                        <li class="list-group-item"><?php echo $averias->fecha; ?></li>
                        <li class="list-group-item"><?php echo $averias->descripcion; ?></li>
                    </ul>
                </div>
                <?php } ?>
            </div>
        
            <?php require 'views/footer.php'?>
        </div>

        <script src="<?php echo constant('URL'); ?>public/js/averias.js" type="module"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/jquery-3.6.0.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/popper.min.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/bootstrap.min.js"></script>
    </body>
</html>