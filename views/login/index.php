
            <?php require_once 'views/header.php'?>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-8 text-center" id="respuesta">

                    </div>
                </div>

                <div class="card mb-5">
                    <div class="card-header text-center text-light">
                        <h4>Credenciales de Acceso</h4>
                    </div>
                    <div class="card-body my-5">
                        <form id="login" method="post">
                            <div class="row  justify-content-center">
                                <div class="col-8 mb-5">
                                    <input class="form-control" type="text" name="usuario" placeholder="Usuario">
                                </div>                    
                                <div class="col-8 mb-5">
                                    <input class="form-control" type="password" name="contraseña" placeholder="Contraseña">
                                </div>          
                                <div class="col-5 mb-3 text-center">
                                    <button class="btn btn-primary" type="submit">Iniciar Sesion</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <script src="<?=constant('URL')?>public/js/login.js" type="module"></script>
            <?php require 'views/footer.php'?>
        