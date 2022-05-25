
            <?php require 'views/header.php'?>

            <div class="row mb-5 justify-content-center">
                <div class="col-11 col-md-4">
                    <input class="form-control text-center" id="busqueda" type="text" placeholder="Buscar Asegurado">
                </div>
            </div>
        
            <div class="row justify-content-center">
                <div class="col-8 text-center" id="respuesta">

                </div>
            </div>

            <div id="items" class="row justify-content-around align-content-around">
                <?php 
                    include_once 'models/asegurado.php';
                    foreach($this->asegurados as $row){
                        $asegurado = new Asegurado();
                        $asegurado = $row;
                ?>
                    <div id="card-<?php echo $asegurado->id; ?>" class="card col-12 col-md-6 col-lg-3 p-0 mb-3" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <div class="card-header">
                                Datos Personales
                            </div>
                            <li class="list-group-item"><?php echo $asegurado->nombre; ?></li>
                            <li class="list-group-item"><?php echo $asegurado->apellido; ?></li>
                            <li class="list-group-item nif"><?php echo $asegurado->id; ?></li>
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
                            
                            <?php if($_SESSION['user'] == $asegurado->aseguradora || $_SESSION['user'] == 'admin'){?>
                                <li class="list-group-item text-center">
                                    <a class="btn btn-secondary mb-2 me-2" href="<?php echo constant('URL')?>asegurados/verAsegurado/<?php echo $asegurado->id?>">Editar</a>
                                    <button id="bEliminar" class="btn btn-danger mb-2" data-nif="<?php echo $asegurado->id?>">Eliminar</button>
                                    <?php if($_SESSION['user'] == $asegurado->aseguradora){?>
                                        <a style="width: 148.79px;" class="btn btn-primary mb-2" href="<?php echo constant('URL'); ?>averias/nuevaAveria/<?php echo $asegurado->id; ?>">Nueva Averia</a>
                                    <?php } ?>
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
        
            <script src="<?=constant('URL')?>public/js/asegurado.js" type="module"></script>
            <?php require 'views/footer.php'?>
        