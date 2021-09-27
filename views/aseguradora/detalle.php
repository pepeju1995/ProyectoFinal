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
            <h1>Informacion de <?php echo $this->aseguradora->nombre; ?></h1>
            
            <?php if($this->mensaje != ""){ ?>
            <div>
                <p class="mensaje"><?php echo $this->mensaje; ?></p>
            </div>
            <?php } ?>

            <div class="centrar formulario">
                <form action="<?php echo constant('URL'); ?>aseguradoras/actualizarAseguradora" method="post">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" value="<?php echo $this->aseguradora->nombre; ?>" >
                        
                        <label for="cif">CIF</label>
                        <input type="text" name="cif" disabled value="<?php echo $this->aseguradora->cif; ?>" >
                        
                        <label for="direccion">Direccion</label>
                        <input type="text" name="direccion" value="<?php echo $this->aseguradora->direccion; ?>" >
                        
                        <label for="localidad">Localidad</label>
                        <input type="text" name="localidad" value="<?php echo $this->aseguradora->localidad; ?>" >
                        
                        <label for="codigopostal">Codigo Postal</label>
                        <input type="text" name="codigopostal" value="<?php echo $this->aseguradora->cp; ?>" >
                        
                        <label for="telefono">Telefono</label>
                        <input type="tel" name="telefono" value="<?php echo $this->aseguradora->telefono; ?>" >
                            
                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?php echo $this->aseguradora->email; ?>" >
                            
                        <label for="contacto">Contacto</label>
                        <input type="text" name="contacto" value="<?php echo $this->aseguradora->contacto; ?>" >
                            
                        <input type="submit" value="Actualizar" class="btn">
                </form>
            </div>
        </div>
        <?php require_once 'views/footer.php'?>
    </body>
</html>