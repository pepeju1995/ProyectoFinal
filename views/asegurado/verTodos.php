<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
        
        <title>Asegurados </title>
    </head>
    
    <body>
        <div class="container">    
            <?php require 'views/header.php'?>
        
            <?php if($this->mensaje != ""){ ?>
            <div>
                <p id="respuesta" class="mensaje"><?php echo $this->mensaje; ?></p>
            </div>
            <?php } ?>

            <div class="row justify-content-around align-content-around">
                <?php 
                    include_once 'models/asegurado.php';
                    foreach($this->asegurados as $row){
                        $asegurado = new Asegurado();
                        $asegurado = $row;
                ?>
                    <div id="card-<?php echo $asegurado->id; ?>" class="card col-12 col-md-6 col-lg-3 p-0 align-content-stretch mb-3" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <div class="card-header">
                                Datos Personales
                            </div>
                            <li class="list-group-item"><?php echo $asegurado->nombre; ?></li>
                            <li class="list-group-item"><?php echo $asegurado->apellido; ?></li>

                            <div class="card-header">
                                Direccion
                            </div>
                            <li class="list-group-item"><?php echo $asegurado->direccion; ?></li>
                            <li class="list-group-item"><?php echo $asegurado->localidad; ?></li>
                            <li class="list-group-item"><?php echo $asegurado->cp; ?></li>

                            <div class="card-header">
                                Direccion de Reparaciones
                            </div>
                            <li class="list-group-item"><?php echo $asegurado->direccion_rep; ?></li>
                            <li class="list-group-item"><?php echo $asegurado->localidad_rep; ?></li>
                            <li class="list-group-item"><?php echo $asegurado->cp_rep; ?></li> 

                            <div class="card-header">
                                Contacto
                            </div>
                            <li class="list-group-item"><?php echo $asegurado->telefono; ?></li>

                            <div class="card-header">
                                Aseguradora
                            </div>
                            <div class="list-group-item"><?php echo $asegurado->aseguradora; ?></div>
                            
                            <?php if($_SESSION['user'] == $asegurado->aseguradora){?>
                                <li class="list-group-item text-center">
                                    <a class="btn btn-secondary mb-2 me-2" href="<?php echo constant('URL')?>asegurados/verAsegurado/<?php echo $asegurado->id?>">Editar</a>
                                    <a class="btn btn-danger mb-2" href="<?php echo constant('URL')?>asegurados/eliminarAsegurado/<?php echo $asegurado->id?>">Eliminar</a>
                                    <a style="width: 148.79px;" class="btn btn-primary mb-2" href="<?php echo constant('URL'); ?>averias/nuevaAveria/<?php echo $asegurado->id; ?>">Nueva Averia</a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>  
            </div>

            <?php if($_SESSION['user'] != 'admin'){?>
                <div class="row justify-content-center">
                    <a class="col-4 btn btn-secondary" href="<?php echo constant('URL')?>asegurados/">Nuevo Asegurado</a>
                </div>                
            <?php } ?>
        
            <?php require 'views/footer.php'?>
        </div>

        <script src="<?php echo constant('URL'); ?>public/js/aseguradoras.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/jquery-3.6.0.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/popper.min.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/bootstrap.min.js"></script>
    </body>
</html>