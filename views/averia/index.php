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
        <?php require_once 'views/header.php'?>
        <div class="contenedor">
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
        </div>
        <?php require_once 'views/footer.php'?>
    </body>
</html>