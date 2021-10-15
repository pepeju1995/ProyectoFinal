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
            <h1>Nuevo Asegurado</h1>

            <?php if($this->mensaje != ""){ ?>
            <div>
                <p class="mensaje"><?php echo $this->mensaje; ?></p>
            </div>
            <?php } ?>
            <form action="<?php echo constant('URL'); ?>asegurados/crearAsegurado" method="post">
                <input type="text" name="dni" placeholder="DNI" required>
            
                <input type="text" name="nombre" placeholder="Nombre" required>
            
                <input type="text" name="apellido" placeholder="Apellidos" required>
            
                <input type="text" name="direccion" placeholder="Direccion" required>
            
                <input type="text" name="localidad" placeholder="Localidad" required>
            
                <input type="text" name="cp" placeholder="CP" required>
            
                <input type="tel" name="telefono" placeholder="Telefono" required>
            
                <input type="text" name="direccion_rep" placeholder="Direccion de la reparacion" required>

                <input type="text" name="localidad_rep" placeholder="Localidad de la reparacion" required>

                <input type="text" name="cp_rep" placeholder="CP de la reparacion" required>
            
                <input type="submit" value="Crear asegurado">
            </form>
        </div>
        <?php require_once 'views/footer.php'?>
    </body>
</html>