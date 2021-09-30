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
                <form action="<?php echo constant('URL'); ?>asegurados/crearAsegurado" method="post">
                    <fieldset>
                        <input type="text" name="nombre" placeholder="Nombre">
                    </fieldset>
                    <fieldset>
                        <input type="text" name="apellido" placeholder="Apellidos">
                    </fieldset>
                    <fieldset>
                        <input type="text" name="direccion" placeholder="Direccion">
                    </fieldset> 
                    <fieldset>
                        <input type="text" name="localidad" placeholder="Localidad">
                    </fieldset>   
                    <fieldset>
                        <input type="text" name="cp" placeholder="CP">
                    </fieldset>
                    <fieldset>
                        <input type="tel" name="telefono" placeholder="Telefono">
                    </fieldset>
                    <fieldset>
                        <input type="text" name="direccion_rep" placeholder="Direccion de la reparacion">
                        <input type="text" name="localidad_rep" placeholder="Localidad de la reparacion">
                        <input type="text" name="cp_rep" placeholder="CP de la reparacion">
                    </fieldset>
                    <fieldset>
                        <input type="submit" value="Crear asegurado">
                    </fieldset>                    
                </form>
            </div>
        </div>
        <?php require_once 'views/footer.php'?>
    </body>
</html>