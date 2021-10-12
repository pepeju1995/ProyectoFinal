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
        <div class="cont-encabezado">
            <div class="encabezado">
                <img src="<?php echo constant('URL'); ?>public/img/logo.jpg" alt="logo" class="logo">
                <h1>Bienvenido a Soluciones Integrales</h1> 
            </div>
        </div>

        <div class="contenedor">
            <form action="<?php echo constant('URL'); ?>login/iniciarSesion" method="post">
                <input type="text" name="usuario" placeholder="Usuario">
                                
                <input type="password" name="contraseña" placeholder="Contraseña">
                                
                <button type="submit">Iniciar Sesion</button>
            </form>
        </div>

        <?php require 'views/footer.php'?>
    </body>
</html>