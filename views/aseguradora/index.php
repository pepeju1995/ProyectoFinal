<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="public/css/formularios.css">
        <title>Document</title>
    </head>

    <body>
        <?php require_once 'views/header.php'?>

        <h1>Aseguradoras</h1>
        <div class="formulario">
            <form action="<?php echo constant('URL'); ?>aseguradora/nuevaAseguradora" method="post">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre"  required>
                    
                    <label for="cif">CIF</label>
                    <input type="text" name="cif" required>
                    
                    <label for="direccion">Direccion</label>
                    <input type="text" name="direccion" required>
                    
                    <label for="localidad">Localidad</label>
                    <input type="text" name="localidad" required>
                    
                    <label for="codigopostal">Codigo Postal</label>
                    <input type="text" name="codigopostal" required>
                    
                    <label for="telefono">Telefono</label>
                    <input type="tel" name="telefono" required>
                           
                    <label for="email">Email</label>
                    <input type="email" name="email" required>
                           
                    <label for="contacto">Contacto</label>
                    <input type="text" name="contacto" required>
                        
                    <input type="submit" value="Registrar aseguradora">
            </form>
        </div>

        <?php require_once 'views/footer.php'?>
    </body>
</html>