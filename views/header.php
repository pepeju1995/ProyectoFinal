<header>
    <?php if(isset($_SESSION['user'])){?>
    <div>
        <h1 style="position:absolute;"><a href="<?php echo constant('URL'); ?>login/cerrarSesion">LogOut</a><h1>
    </div>
    <?php }?>
    <div class="titulo">
        <img src="<?php echo constant('URL'); ?>public/img/logo.jpg" alt="logotipo" class="logo">
        <h1>Soluciones Integrales S.L.</h1>
    </div>

    <div class="menu">
        <ul class="nav">
            <li> <a href="<?php echo constant('URL'); ?>login">Inicio</a></li>

            <li><a href="<?php echo constant('URL'); ?>aseguradoras/verAseguradoras">Aseguradora</a></li>

            <li><a href="<?php echo constant('URL'); ?>asegurados/verAsegurados">Asegurado</a></li>

            <li><a href="<?php echo constant('URL'); ?>averias/verAverias">Averias</a></li>
        </ul>
    </div>
</header>