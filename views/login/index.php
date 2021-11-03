<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/all.min.css">
        <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/estilos.css">
        <title>Soluciones Integrales</title>
    </head>

    <body>
        <div class="container">
            <?php require_once 'views/header.php'?>

            <div class="row justify-content-center">
                <div class="col-8 text-center" id="respuesta">

                </div>
            </div>
           
            <form class="form" id="formulario" method="post">
                <div class="row  justify-content-center">
                    <div class="col-8 mb-3">
                        <input class="form-control" type="text" name="usuario" placeholder="Usuario">
                    </div>                    
                    <div class="col-8 mb-3">
                        <input class="form-control" type="password" name="contraseña" placeholder="Contraseña">
                    </div>          
                    <div class="col-5 mb-3 text-center">
                        <input class="btn btn-primary" type="submit" value="Iniciar Sesion"/>
                    </div>
                    
                </div>
                
            </form>
            
            <?php require 'views/footer.php'?>
        </div>

        <script src="<?php echo constant('URL'); ?>public/js/login.js" type="module"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/jquery-3.6.0.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/popper.min.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/bootstrap.min.js"></script>
    </body>
</html>