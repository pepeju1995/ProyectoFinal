<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
    </head>

    <body>
    <header>
        <div class="titulo">
            <img src="<?php echo constant('URL'); ?>public/img/logo.jpg" alt="logotipo" class="logo">
            <h1>Soluciones Integrales S.L.</h1>
        </div>

        <div class="menu">
            <ul class="nav">
                <li> <a href="<?php echo constant('URL'); ?>inicio">Inicio</a></li>

                <li><a href="<?php echo constant('URL'); ?>aseguradoras/verAseguradoras">Aseguradora</a>
                    <ul>
                        <li><a href="<?php echo constant('URL'); ?>aseguradoras">Nueva Aseguradora</a></li>
                    </ul>
                </li>

                <li><a href="<?php echo constant('URL'); ?>asegurado">Asegurado</a>
                    <ul>
                        <li><a href="">Nuevo Asegurado</a></li>
                    </ul>
                </li>

                <li><a href="">Averias</a>
                    <ul>
                        <li><a href="">Nueva Averia</a></li>
                    </ul>
                </li>
            </ul>
        </div>
</header>
    </body>
</html>