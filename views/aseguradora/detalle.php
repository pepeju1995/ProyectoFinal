<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Editar Aseguradora</title>
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/img/icono.ico" type="image/x-icon">

        <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/estilos.css">
    </head>

    <body>
        <div class="container-fluid px-0">
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
                    <form id="editarAseguradora" method="post">
                        <div class="container">
                            <div class="row">
                                <h6 class="card-subtitle mb-2 text-muted">Datos de la aseguradora</h6>
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="nombre">Nombre</label>
                                    <input class="form-control" type="text" id="nombre" name="nombre" value="<?php echo $this->aseguradora->nombre; ?>" >
                                    <p id="nombre-valido" class="form-text ocultar-requisitos">El nombre de empresa debe contener entre 4 y 40 caracteres alfanumericos</p>
                                </div>
                                <div class="col-12 col-md-6 mb-3">                    
                                    <label for="nif">NIF</label>
                                    <input class="form-control" type="text" name="nif" disabled value="<?php echo $this->aseguradora->nif; ?>" >
                                </div>
                            </div>

                            <div class="row">
                                <h6 class="card-subtitle mb-2 text-muted">Direccion</h6>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="direccion">Direccion</label>
                                    <input class="form-control" type="text" id="direccion" name="direccion" value="<?php echo $this->aseguradora->direccion; ?>" >
                                    <p id="direccion-valido" class="form-text ocultar-requisitos">Indicar la calle y el numero separado por una coma (Calle  mayor, 74)</p>
                                </div>
                                <div class="col-12 col-md-4 mb-3">                    
                                    <label for="localidad">Localidad</label>
                                    <input class="form-control" type="text" id="localidad" name="localidad" value="<?php echo $this->aseguradora->localidad; ?>" >
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="cp">Codigo Postal</label>
                                    <input class="form-control" type="text" id="cp" name="cp" value="<?php echo $this->aseguradora->cp; ?>" >
                                    <p id="cp-valido" class="form-text ocultar-requisitos">Codigo postal de 5 digitos</p>
                                </div>
                            </div>
                            
                            <div class="row">
                                <h6 class="card-subtitle mb-2 text-muted">Contacto</h6>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="telefono">Telefono</label>
                                    <input class="form-control" type="tel" id="telefono" name="telefono" value="<?php echo $this->aseguradora->telefono; ?>" >
                                    <p id="telefono-valido" class="form-text ocultar-requisitos">Introduzca un telefono valido (698654789)</p>
                                </div>
                                <div class="col-12 col-md-4 mb-3">                        
                                    <label for="email">Email</label>
                                    <input class="form-control" type="email" id="email" name="email" value="<?php echo $this->aseguradora->email; ?>" >
                                    <p id="email-valido" class="form-text ocultar-requisitos">Introduzca un email valido (test@test.com)</p>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="contacto">Contacto</label>
                                    <input class="form-control" type="text" id="contacto" name="contacto" value="<?php echo $this->aseguradora->contacto; ?>" >
                                    <p id="contacto-valido" class="form-text ocultar-requisitos">Introduzca un nombre valido (Antonio Gonzalez)</p>
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

        <script src="<?php echo constant('URL'); ?>public/js/aseguradoras.js" type="module"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/jquery-3.6.0.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/popper.min.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/bootstrap.min.js"></script>
    </body>
</html>