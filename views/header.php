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
    <h1>Soluciones Integrales S.L.</h1>
    <div class="menu">
        <ul class="nav">
            <li> <a href="<?php echo constant('URL'); ?>inicio">Inicio</a></li>

            <li><a href="<?php echo constant('URL'); ?>aseguradora">Aseguradora</a>
                <ul>
                    <li><a href="">Nueva Aseguradora</a></li>
                    <li><a href="">Mostrar Aseguradoras</a></li>
                </ul>
            </li>

            <li><a href="<?php echo constant('URL'); ?>asegurado">Asegurado</a>
                <ul>
                    <li><a href="">Nuevo Asegurado</a></li>
                    <li><a href="">Mostrar Asegurados</a></li>
                </ul>
            </li>

            <li><a href="">Averias</a>
                <ul>
                    <li><a href="">Nueva Averia</a></li>
                    <li><a href="">Mostrar Averias</a></li>
                </ul>
            </li>
        </ul>
    </div>
</header>
        <!--<div id="header">
            <ul>
                <li><a href="inicio">Inicio</a></li>
                <li><a href="aseguradora">Aseguradora</a></li>
                <li><a href="asegurado">Asegurado</a></li>
                <li><a href="averias">Averias</a></li>
            </ul>
        </div>-->
    </body>
</html>