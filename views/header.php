<header class="row">
    <?php if(isset($_SESSION['user'])){?>
        <div class="col-12">
            <a href="<?php echo constant('URL'); ?>login/cerrarSesion">LogOut</a>
        </div>
    <?php }?>
    <div class="col-12">
        <div class="row justify-content-center">
            <img class="col-4" src="<?php echo constant('URL'); ?>public/img/logo.jpg" alt="logotipo">
            <h1 class="col-6 align-self-center">Soluciones Integrales S.L.</h1>
        </div>
    </div>

    <?php if(isset($_SESSION['user'])){?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="<?php echo constant('URL'); ?>aseguradoras/verAseguradoras">Aseguradora</a>
                    <a class="nav-link" href="<?php echo constant('URL'); ?>asegurados/verAsegurados">Asegurado</a>
                    <a class="nav-link" href="<?php echo constant('URL'); ?>averias/verAverias">Averias</a>
                </div>
            </div>
        </div>
    </nav>
        
    <?php }?>
</header>
