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

            <form action="<?php echo constant('URL'); ?>aseguradoras/crearAseguradora" method="post">
                    <input type="text" name="nombre" placeholder="Nombre de empresa"  required>
                    
                    <input type="password" name="contraseña" placeholder="Contraseña" required>
                    
                    <input type="text" name="cif" placeholder="CIF" required>
                    
                    <input type="text" name="direccion" placeholder="Direccion" required>
                    
                    <input type="text" name="localidad" placeholder="Localidad" required>
                    
                    <input type="text" name="codigopostal" placeholder="CP" required>
                    
                    <input type="tel" name="telefono" placeholder="Telefono" required>
                        
                    <input type="email" name="email" placeholder="test@test.com" required>
                        
                    <input type="text" name="contacto" placeholder="Persona de contacto" required>
                        
                    <button type="submit">Registrar aseguradora</button>
            </form>
        </div>
        <?php require_once 'views/footer.php'?>
    </body>
</html>