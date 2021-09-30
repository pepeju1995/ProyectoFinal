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
            <h1>Informacion de <?php echo $this->asegurado->nombre; ?></h1>
            
            <?php if($this->mensaje != ""){ ?>
            <div>
                <p class="mensaje"><?php echo $this->mensaje; ?></p>
            </div>
            <?php } ?>

            <div class="centrar formulario">
                <form action="<?php echo constant('URL'); ?>aseguradoras/actualizarAseguradora" method="post">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" value="<?php echo $this->asegurado->nombre; ?>" >
                        
                        <label for="cif">CIF</label>
                        <input type="text" name="cif" disabled value="<?php echo $this->asegurado->direccion; ?>" >
                        
                        <label for="direccion">Direccion</label>
                        <input type="text" name="direccion" value="<?php echo $this->asegurado->localidad; ?>" >
                        
                        <label for="localidad">Localidad</label>
                        <input type="text" name="localidad" value="<?php echo $this->asegurado->cp; ?>" >
                        
                        <label for="codigopostal">Codigo Postal</label>
                        <input type="text" name="codigopostal" value="<?php echo $this->asegurado->telefono; ?>" >
                        
                        <label for="telefono">Telefono</label>
                        <input type="tel" name="telefono" value="<?php echo $this->asegurado->direccion_rep; ?>" >
                            
                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?php echo $this->asegurado->localidad_rep; ?>" >
                            
                        <label for="contacto">Contacto</label>
                        <input type="text" name="contacto" value="<?php echo $this->asegurado->cp_rep; ?>" >
                            
                        <input type="submit" value="Actualizar" class="btn">
                </form>
            </div>
        </div>
        <?php require_once 'views/footer.php'?>
    </body>
</html>