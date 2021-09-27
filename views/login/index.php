<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
        <title>Document</title>
    </head>

    <body>
        <?php require 'views/header.php'?>

        <div class="login">
            <form action="<?php echo constant('URL'); ?>login/iniciarSesion" method="post">
                <input type="text" name="usuario" placeholder="Usuario (CIF)">
                                
                <input type="text" name="contraseña" placeholder="Contraseña">
                                
                <button type="submit">Enviar</button>
            </form>
        </div>

        <?php require 'views/footer.php'?>
    </body>
</html>