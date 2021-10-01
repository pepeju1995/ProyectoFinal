<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/styles.css">
        
        <title>Document</title>
    </head>
    
    <body>
        <?php require 'views/header.php'?>
        
        <div class="contenedor">
            
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
        </div>

        <?php require 'views/footer.php'?>

        <script src="<?php echo constant('URL'); ?>public/js/aseguradoras.js"></script>
    </body>
</html>