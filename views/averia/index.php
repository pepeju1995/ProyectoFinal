<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/estilos.css">

        <title>Nueva Averia</title>
    </head>

    <body>
        <div class="container-fluid px-0">
            <?php require_once 'views/header.php'?>
        
            <div class="row justify-content-center">
                <div class="col-8 text-center" id="respuesta">

                </div>
            </div>

            <div class="card mb-5">
                <div class="card-header text-center mb-3">
                    <h4>Nueva Averia</h4>
                </div>
                <form action="<?php echo constant('URL'); ?>averias/crearAveria" method="post" id="formulario">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="asegurado">Asegurado</label>
                                <input class="form-control" type="text" readonly id="asegurado" name="asegurado" value="<?php echo $this->asegurado; ?>">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="descripcion">Descripcion de la averia</label>
                                <textarea class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion de la averia" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-3">
                            <div class="col-5 text-center">
                                <button class="btn btn-primary" type="submit">Registrar averia</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        
            <?php require_once 'views/footer.php'?>
        </div>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/jquery-3.6.0.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/popper.min.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/bootstrap.min.js"></script>
    </body>
</html>