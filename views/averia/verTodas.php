<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/estilos.css">
        
        <title>Averias</title>
    </head>
    
    <body>
        <div class="container">
            <?php require 'views/header.php'?>
                   
            <?php if($this->mensaje != ""){ ?>
            <div>
                <p id="respuesta" class="mensaje"><?php echo $this->mensaje; ?></p>
            </div>
            <?php } ?>

            <table class="centrar tabla">
                <thead>
                    <tr>
                        <th>Aseguradora</th>
                        <th>Asegurado</th>
                        <th>Fecha</th>
                        <th>Descripcion</th>                        
                    </tr>
                </thead>

                <tbody id="tbody-aseguradoras">
                    <?php 
                        include_once 'models/asegurado.php';
                        foreach($this->averias as $row){
                            $averias = new Averias();
                            $averias = $row;
                    ?>
                    <tr class="filas">
                        <td><?php echo $averias->aseguradora; ?></td>
                        <td><?php echo $averias->asegurado; ?></td>
                        <td><?php echo $averias->fecha; ?></td>
                        <td><?php echo $averias->descripcion; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        
            <?php require 'views/footer.php'?>
        </div>

        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/jquery-3.6.0.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/popper.min.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap/bootstrap.min.js"></script>
    </body>
</html>