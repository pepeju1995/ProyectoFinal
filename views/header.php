<header>
    <?php if(isset($_SESSION['user'])){?>
    <div class="logout">
        <a href="<?php echo constant('URL'); ?>login/cerrarSesion">LogOut</a>
    </div>
    <?php }?>
    <div class="titulo">
        <img align="middle" class="logo" src="<?php echo constant('URL'); ?>public/img/logo.jpg" alt="logotipo" class="logo">
        <h1>Soluciones Integrales S.L.</h1>
    </div>
    <?php if(isset($_SESSION['user'])){?>
        <ul class="nav">
            <li><a href="<?php echo constant('URL'); ?>aseguradoras/verAseguradoras">Aseguradora</a></li>

            <li><a href="<?php echo constant('URL'); ?>asegurados/verAsegurados">Asegurado</a></li>

            <li><a href="<?php echo constant('URL'); ?>averias/verAverias">Averias</a></li>
        </ul>
    <?php }?>
</header>