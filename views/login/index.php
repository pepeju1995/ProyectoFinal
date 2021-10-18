<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
        <title>Document</title>
    </head>

    <body>
        <div class="container">
            <?php require_once 'views/header.php'?>
            
            <form class="form" action="<?php echo constant('URL'); ?>login/iniciarSesion" method="post">
                <div class="row  justify-content-center">
                    <div class="col-8 mb-3">
                        <input class="form-control" type="text" name="usuario" placeholder="Usuario">
                    </div>                    
                    <div class="col-8 mb-3">
                        <input class="form-control" type="password" name="contraseña" placeholder="Contraseña">
                    </div>          
                    <div class="col-5 mb-3 text-center">
                        <button class="btn btn-primary" type="submit">Iniciar Sesion</button>
                    </div>
                    
                </div>
                
            </form>
            
            <?php require 'views/footer.php'?>
        </div>

        <script src="<?php echo constant('URL'); ?>public/js/jquery-3.6.0.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/popper.min.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap.min.js"></script>
    </body>
</html>