<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Soluciones Integrales</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="<?=constant('URL'); ?>public/img/icono.ico" type="image/x-icon">
        
        <link rel="stylesheet" type="text/css" href="<?=constant('URL')?>public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=constant('URL')?>public/css/all.min.css">
        <link rel="stylesheet" href="<?=constant('URL')?>public/css/estilos.css">
        
    </head>

    <body>
        <div class="container-fluid px-0">
<nav id="cabecera" class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
    <?php if(isset($_SESSION['user'])){?>
        <div class="container">
            <a href="<?php echo constant('URL'); ?>" class="navbar-brand">
                <img src="<?php echo constant('URL'); ?>public/img/logo.jpg" alt="logotipo" width="30" class="d-inline-block align-text-top">
                Soluciones Integrales
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="<?php echo constant('URL'); ?>aseguradoras/verAseguradoras">Aseguradora</a>
                    <a class="nav-link" href="<?php echo constant('URL'); ?>asegurados/verAsegurados">Asegurado</a>
                    <a class="nav-link" href="<?php echo constant('URL'); ?>averias/verAverias">Averias</a>
                    <a class="nav-link" href="<?php echo constant('URL'); ?>login/cerrarSesion">LogOut</a>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="container-fluid justify-content-center">
            <a href="<?php echo constant('URL'); ?>" class="navbar-brand">
                    <img src="<?php echo constant('URL'); ?>public/img/logo.jpg" alt="logotipo" width="30" class="d-inline-block align-text-top">
                    Soluciones Integrales
            </a>
        </div>
    <?php } ?>    
</nav>
