<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/estilos.css">
        <title>Document</title>
    </head>

    <body>
        <div class="container">
            <?php require_once 'views/header.php'?>

            <h1>Aseguradoras</h1>

            <?php if($this->mensaje != ""){ ?>
                <div>
                    <p class="mensaje"><?php echo $this->mensaje; ?></p>
                </div>
            <?php } ?>

            <form action="<?php echo constant('URL'); ?>aseguradoras/crearAseguradora" method="post" id="formulario">
                <div class="row justify-content-center">  
                    <div class="col-8 mb-3">
                        <label for="nombre">Nombre</label>
                        <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre de empresa">
                        <p id="nombre-valido" class="form-text ocultar-requisitos">El nombre de empresa debe contener entre 4 y 40 caracteres alfanumericos</p>
                    </div>

                    <div class="col-8 mb-3">
                        <label for="contraseña">Contraseña</label>
                        <input class="form-control" type="password" id="contraseña" name="contraseña" placeholder="Contraseña">
                        <p class="form-text ocultar-requisitos"></p>
                    </div>

                    <div class="col-8 mb-3">
                        <label for="contraseña-rep">Repite la contraseña</label>
                        <input class="form-control" type="password" id="contraseña-rep" name="contraseña-rep" placeholder="Contraseña">
                        <p class="form-text ocultar-requisitos"></p>
                    </div>

                    <div class="col-8 mb-3">
                        <label for="cif">CIF</label>
                        <input class="form-control" type="text" id="cif" name="cif" placeholder="CIF">
                        <p id="cif-valido" class="form-text ocultar-requisitos">Introducir 8 digitos y una letra</p>
                    </div>

                    <div class="col-8 mb-3">
                        <label for="direccion">Direccion</label>
                        <input class="form-control" type="text" id="direccion" name="direccion" placeholder="Direccion">
                        <p class="form-text ocultar-requisitos"></p>
                    </div>

                    <div class="col-8 mb-3">
                        <label for="localidad">Localidad</label>
                        <input class="form-control" type="text" id="localidad" name="localidad" placeholder="Localidad">
                        <p class="form-text ocultar-requisitos"></p>
                    </div>

                    <div class="col-8 mb-3">
                        <label for="cp">Codigo Postal</label>
                        <input class="form-control" type="text" id="cp" name="codigopostal" placeholder="CP">
                        <p class="form-text ocultar-requisitos"></p>
                    </div>

                    <div class="col-8 mb-3">
                        <label for="telefono">Telefono</label>
                        <input class="form-control" type="tel" id="telefono" name="telefono" placeholder="Telefono">
                        <p class="form-text ocultar-requisitos"></p>
                    </div>

                    <div class="col-8 mb-3">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="test@test.com">
                        <p class="form-text ocultar-requisitos"></p>
                    </div>

                    <div class="col-8 mb-3">
                        <label for="contacto">Persona de contacto</label>
                        <input class="form-control" type="text" id="contacto" name="contacto" placeholder="Persona de contacto">
                        <p class="form-text ocultar-requisitos"></p>
                    </div>

                    <div class="col-5 text-center">
                        <button class="btn btn-primary" type="submit">Regisrar aseguradora</button>
                    </div>
                </div>
            </form>

            <?php require_once 'views/footer.php'?>
        </div>
        
        <script src="<?php echo constant('URL'); ?>public/js/validacion.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/jquery-3.6.0.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/popper.min.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap.min.js"></script>
    </body>
</html>