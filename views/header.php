<div class="row">
    <?php if(isset($_SESSION['user'])){?>
        <div class="col-12">
            <a href="<?php echo constant('URL'); ?>login/cerrarSesion">LogOut</a>
        </div>
    <?php }?>
</div>
<div class="row justify-content-center">
    <img class="col-4" src="<?php echo constant('URL'); ?>public/img/logo.jpg" alt="logotipo">
    <h1 class="col-6 align-self-center">Soluciones Integrales S.L.</h1>
</div>
<div class="row justify-content-center">
    <?php if(isset($_SESSION['user'])){?>
        <a class="col-3" href="<?php echo constant('URL'); ?>aseguradoras/verAseguradoras">Aseguradora</a>
        <a class="col-3" href="<?php echo constant('URL'); ?>asegurados/verAsegurados">Asegurado</a>
        <a class="col-3" href="<?php echo constant('URL'); ?>averias/verAverias">Averias</a>
    <?php }?>
</div>
