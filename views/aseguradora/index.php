<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php require_once 'views/header.php'?>

        <h1>Aseguradoras</h1>

        <form action="<?php echo constant('URL'); ?>aseguradora/nuevaAseguradora" method="post">
                <div>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre"  required>

                    <label for="cif">CIF</label>
                    <input type="text" name="cif" required>
                </div>
            
                <div>    
                    <label for="direccion">Direccion</label>
                    <input type="text" name="direccion" required>

                    <label for="localidad">Localidad</label>
                    <input type="text" name="localidad" required>
                    
                    <label for="codigopostal">Codigo Postal</label>
                    <input type="text" name="codigopostal" required>
                </div>
                
                <div>
                    <label for="telefono">Telefono</label>
                    <input type="tel" name="telefono" required>
                            
                    <label for="email">Email</label>
                    <input type="email" name="email" required>
                            
                    <label for="persContacto">Persona de Contacto</label>
                    <input type="text" name="persContacto" required>
                </div>
                        
                <input type="submit" value="Registrar nuevo alumno">
        </form>

        <?php require_once 'views/footer.php'?>
    </body>
</html>