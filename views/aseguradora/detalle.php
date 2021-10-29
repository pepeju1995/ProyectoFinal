<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
        <title>Document</title>
    </head>

    <body>
        <div class="container">
            <?php require_once 'views/header.php'?>
        
            <div class="row justify-content-center">
                <div class="col-8 text-center" id="respuesta">

                </div>
            </div>

            <div class="card">
                <div class="card-header text-center">
                    <h4>Informacion de <?php echo $this->aseguradora->nombre; ?></h4>
                </div>
                <div class="card-body">
                    <form id="formulario" method="post">
                        <div class="container">
                            <div class="row">
                                <h6 class="card-subtitle mb-2 text-muted">Datos de la aseguradora</h6>
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="nombre">Nombre</label>
                                    <input class="form-control" type="text" name="nombre" value="<?php echo $this->aseguradora->nombre; ?>" >
                                </div>
                                <div class="col-12 col-md-6 mb-3">                    
                                    <label for="cif">CIF</label>
                                    <input class="form-control" type="text" name="cif" disabled value="<?php echo $this->aseguradora->cif; ?>" >
                                </div>
                            </div>

                            <div class="row">
                                <h6 class="card-subtitle mb-2 text-muted">Direccion</h6>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="direccion">Direccion</label>
                                    <input class="form-control" type="text" name="direccion" value="<?php echo $this->aseguradora->direccion; ?>" >
                                </div>
                                <div class="col-12 col-md-4 mb-3">                    
                                    <label for="localidad">Localidad</label>
                                    <input class="form-control" type="text" name="localidad" value="<?php echo $this->aseguradora->localidad; ?>" >
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="cp">Codigo Postal</label>
                                    <input class="form-control" type="text" name="cp" value="<?php echo $this->aseguradora->cp; ?>" >
                                </div>
                            </div>
                            
                            <div class="row">
                                <h6 class="card-subtitle mb-2 text-muted">Contacto</h6>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="telefono">Telefono</label>
                                    <input class="form-control" type="tel" name="telefono" value="<?php echo $this->aseguradora->telefono; ?>" >
                                </div>
                                <div class="col-12 col-md-4 mb-3">                        
                                    <label for="email">Email</label>
                                    <input class="form-control" type="email" name="email" value="<?php echo $this->aseguradora->email; ?>" >
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="contacto">Contacto</label>
                                    <input class="form-control" type="text" name="contacto" value="<?php echo $this->aseguradora->contacto; ?>" >
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-5 text-center">
                                    <input id="bActualizar" type="submit" value="Actualizar" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>  
            </div>
        
            <?php require_once 'views/footer.php'?>
        </div>

        <script src="<?php echo constant('URL'); ?>public/js/editarAseguradora.js" type="module"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/jquery-3.6.0.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/popper.min.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/bootstrap.min.js"></script>
    </body>
</html>