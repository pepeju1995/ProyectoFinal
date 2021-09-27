<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/formularios.css">
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
                <form action="<?php echo constant('URL'); ?>aseguradoras/crearAseguradora" method="post">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" placeholder="Nombre de empresa"  required>
                        
                        <label for="cif">CIF</label>
                        <input type="text" name="cif" placeholder="CIF" required>
                        
                        <label for="direccion">Direccion</label>
                        <input type="text" name="direccion" placeholder="Direccion" required>
                        
                        <label for="localidad">Localidad</label>
                        <input type="text" name="localidad" placeholder="Localidad" required>
                        
                        <label for="codigopostal">Codigo Postal</label>
                        <input type="text" name="codigopostal" placeholder="CP" required>
                        
                        <label for="telefono">Telefono</label>
                        <input type="tel" name="telefono" placeholder="Telefono" required>
                            
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="test@test.com" required>
                            
                        <label for="contacto">Contacto</label>
                        <input type="text" name="contacto" placeholder="Persona de contacto" required>
                            
                        <input type="submit" value="Registrar aseguradora" class="btn">
                </form>
            </div>
        </div>
        <?php require_once 'views/footer.php'?>
    </body>
</html>