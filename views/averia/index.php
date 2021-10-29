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
        <div class="container">
            <?php require_once 'views/header.php'?>
        
            <h1>Aseguradoras</h1>

            <?php if($this->mensaje != ""){ ?>
            <div>
                <p class="mensaje"><?php echo $this->mensaje; ?></p>
            </div>
            <?php } ?>

            <div class="centrar formulario">
                <form action="<?php echo constant('URL'); ?>averias/crearAveria" method="post">       
                    <input type="text" disbled name="asegurado" value="<?php echo $this->asegurado; ?>">
            
                    <textarea name="descripcion" placeholder="Descripcion de la averia" cols="30" rows="10"></textarea>
            
                    <input type="submit" value="Crear asegurado">
                </form>
            </div>
        
            <?php require_once 'views/footer.php'?>
        </div>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/jquery-3.6.0.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/popper.min.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/bootstrap.min.js"></script>
    </body>
</html>