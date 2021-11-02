<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
        <title>Nuevo Asegurado</title>
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
                    <h4>Nuevo Asegurado</h4>
                </div>
                <div class="card-body">
                    <form id="crearAsegurado" method="post">
                        <div class="container">
                            <div class="row">
                                <h6 class="card-subtitle mb-2 text-muted">Datos personales</h6>
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <label for="nif">NIF</label>
                                    <input class="form-control" id="nif" type="text" name="nif" placeholder="NIF">
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <label for="nombre">Nombre</label>
                                    <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre" >
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <label>Apellidos</label>
                                    <input class="form-control" type="text" id="apellido" name="apellido" placeholder="Apellidos"> 
                                </div>
                            </div>

                            <div class="row">
                                <h6 class="card-subtitle mb-2 text-muted">Direccion</h6>
                                <div class="col-12 col-md-4 col-lg-3 mb-3">
                                    <label for="direccion">Direccion</label>
                                    <input class="form-control" type="text" id="direccion" name="direccion" placeholder="Direccion" >
                                </div>
                                <div class="col-12 col-md-4 col-lg-3 mb-3">      
                                    <label for="localidad">Localidad</label>                                  
                                    <input class="form-control" type="text" id="localidad" name="localidad" placeholder="Localidad" >
                                </div>                
                                <div class="col-12 col-md-4 col-lg-3 mb-3">
                                    <label for="cp">Codigo postal</label>
                                    <input class="form-control" type="text" id="cp" name="cp" placeholder="Codigo Postal" >
                                </div>
                            </div>
                            
                            <div class="row">
                                <h6 class="card-subtitle mb-2 text-muted">Contacto</h6>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="telefono">Telefono</label>
                                    <input class="form-control" type="text" id="telefono" name="telefono" placeholder="Telefono" >
                                </div>
                            </div>

                            <div class="row">
                                <h6 class="card-subtitle mb-2 text-muted">Direccion de reparaciones</h6>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="direccion_rep">Direccion</label>
                                    <input class="form-control" type="tel" id="direccion_rep" name="direccion_rep" placeholder="Direccion" >
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="localidad_rep">Localidad</label>
                                    <input class="form-control" type="text" id="localidad_rep" name="localidad_rep" placeholder="Loclidad" >
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label  for="cp_rep">Codigo postal</label>
                                    <input class="form-control" type="text" id="cp_rep" name="cp_rep" placeholder="Codigo Postal" >
                                </div>                                        
                            </div>
                            
                            <div class="row justify-content-center">
                                <div class="col-5 text-center">
                                    <button type="submit" class="btn btn-primary">Crear Asegurado</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>  
            </div>
            
            <?php require_once 'views/footer.php'?>
        </div>

        <script src="<?php echo constant('URL'); ?>public/js/asegurados.js" type="module"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/jquery-3.6.0.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/popper.min.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/bootstrap.min.js"></script>
    </body>
</html>