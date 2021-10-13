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
        <div class="header">
            Bienvenido a Soluciones Integrales.
        </div>

        <div class="contenedor">
            <form action="<?php echo constant('URL'); ?>login/iniciarSesion" method="post">
                <fieldset>
                    <input type="text" name="usuario" placeholder="Usuario (CIF)">
                </fieldset>
                <fieldset>            
                    <input type="password" name="contraseña" placeholder="Contraseña">
                </fieldset>   
                <fieldset>
                    <button type="submit">Enviar</button>
                </fieldset>
            </form>
        </div>

        <?php require 'views/footer.php'?>
    </body>
</html>