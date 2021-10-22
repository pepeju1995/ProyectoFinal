<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/all.min.css">
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
                        <div class="formulario-input">
                            <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre de empresa">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                    </div>

                    <div class="col-8 mb-3">
                        <label for="contraseña">Contraseña</label>
                        <div class="formulario-input">
                            <input class="form-control" type="password" id="contraseña" name="contraseña" placeholder="Contraseña">
                        </div>
                    </div>

                    <div class="col-8 mb-3">
                        <label for="contraseña-rep">Repite la contraseña</label>
                        <div class="formulario-input">
                            <input class="form-control" type="password" id="contraseña-rep" name="contraseña-rep" placeholder="Contraseña">
                        </div>
                    </div>

                    <div class="col-8 mb-3">
                        <label for="cif">CIF</label>
                        <div class="formulario-input">
                            <input class="form-control" type="text" id="cif" name="cif" placeholder="CIF">
                        </div>
                    </div>

                    <div class="col-8 mb-3">
                        <label for="direccion">Direccion</label>
                        <div class="formulario-input">
                            <input class="form-control" type="text" id="direccion" name="direccion" placeholder="Direccion">
                        </div>
                    </div>

                    <div class="col-8 mb-3">
                        <label for="localidad">Localidad</label>
                        <div class="formulario-input">
                            <input class="form-control" type="text" id="localidad" name="localidad" placeholder="Localidad">
                        </div>
                    </div>

                    <div class="col-8 mb-3">
                        <label for="cp">Codigo Postal</label>
                        <div class="formulario-input">
                            <input class="form-control" type="text" id="cp" name="codigopostal" placeholder="CP">
                        </div>
                    </div>

                    <div class="col-8 mb-3">
                        <label for="telefono">Telefono</label>
                        <div class="formulario-input">
                            <input class="form-control" type="tel" id="telefono" name="telefono" placeholder="Telefono">
                        </div>
                    </div>

                    <div class="col-8 mb-3">
                        <label for="email">Email</label>
                        <div class="formulario-input">
                            <input class="form-control" type="email" id="email" name="email" placeholder="test@test.com">
                        </div>
                    </div>

                    <div class="col-8 mb-3">
                        <label for="contacto">Persona de contacto</label>
                        <div class="formulario-input">
                            <input class="form-control" type="text" id="contacto" name="contacto" placeholder="Persona de contacto">
                        </div>
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