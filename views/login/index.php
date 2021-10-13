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
<<<<<<< HEAD
        <div class="header">
            Bienvenido a Soluciones Integrales.
=======
        <div class="cont-encabezado">
            <div class="encabezado">
                <img src="<?php echo constant('URL'); ?>public/img/logo.jpg" alt="logo" class="logo">
                <h1>Bienvenido a Soluciones Integrales</h1> 
            </div>
>>>>>>> parent of d01713e (debuggin login and style)
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