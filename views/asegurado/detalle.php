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
                <form action="<?php echo constant('URL'); ?>asegurados/actualizarAsegurado" method="post">
                    <input type="text" name="dni" disabled value="<?php echo $this->asegurado->id; ?>">
                    
                    <input type="text" name="nombre" disabled value="<?php echo $this->asegurado->nombre; ?>" >
                    
                    <input type="text" name="apellido" disabled value="<?php echo $this->asegurado->apellido; ?>">                        

                    <input type="text" name="direccion" value="<?php echo $this->asegurado->direccion; ?>" >
                    
                    
                    <input type="text" name="localidad" value="<?php echo $this->asegurado->localidad; ?>" >
                    
                    
                    <input type="text" name="cp" value="<?php echo $this->asegurado->cp; ?>" >
                    
                    
                    <input type="text" name="telefono" value="<?php echo $this->asegurado->telefono; ?>" >
                    
                    
                    <input type="tel" name="direccion_rep" value="<?php echo $this->asegurado->direccion_rep; ?>" >
                        
                    
                    <input type="text" name="localidad_rep" value="<?php echo $this->asegurado->localidad_rep; ?>" >
                        
                    
                    <input type="text" name="cp_rep" value="<?php echo $this->asegurado->cp_rep; ?>" >
                        
                    <input type="submit" value="Actualizar" class="btn">
                </form>
            </div>
        </div>
        <?php require_once 'views/footer.php'?>
    </body>
</html>