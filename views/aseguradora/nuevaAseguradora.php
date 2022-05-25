
            <?php require_once 'views/header.php'?>
            <section class="container">
                <div class="row justify-content-center">
                    <div class="col-8 text-center" id="respuesta">

                    </div>
                </div>

                <div class="card mb-5">
                    <div class="card-header text-center">
                        <h4>Nueva Aseguradora</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" id="crearAseguradora">
                            <div class="container">
                                <div class="row">
                                    <h6 class="card-subtitle mb-2 text-muted">Datos de la aseguradora</h6>
                                    <div class="col-12 col-md-6 col-lg-3 mb-3">
                                        <label for="nombre">Nombre</label>
                                        <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre de empresa">
                                        <p id="nombre-valido" class="form-text ocultar-requisitos">El nombre de empresa debe contener entre 4 y 40 caracteres alfanumericos</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3 mb-3">
                                        <label for="nif">NIF</label>
                                        <input class="form-control" type="text" id="nif" name="nif" placeholder="NIF">
                                        <p id="nif-valido" class="form-text ocultar-requisitos">Introduzca un NIF valido (12345678X - A79854390)</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3 mb-3">
                                        <label for="contraseña">Contraseña</label>
                                        <input class="form-control" type="password" id="contraseña" name="contraseña" placeholder="Contraseña">
                                        <p id="contraseña-valido" class="form-text ocultar-requisitos">La contraseña debe tener entre 4 y 16 caracteres.</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3 mb-3">
                                        <label for="contraseña2">Repite la contraseña</label>
                                        <input class="form-control" type="password" id="contraseña2" name="contraseña2" placeholder="Contraseña">
                                        <p id="contraseña2-valido" class="form-text ocultar-requisitos">La contraseña no coincide.</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <h6 class="card-subtitle mb-2 text-muted">Direccion</h6>
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="direccion">Direccion</label>
                                        <input class="form-control" type="text" id="direccion" name="direccion" placeholder="Direccion">
                                        <p id="direccion-valido" class="form-text ocultar-requisitos">Indicar la calle y el numero separado por una coma (Calle  mayor, 74)</p>
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="localidad">Localidad</label>
                                        <input class="form-control" type="text" id="localidad" name="localidad" placeholder="Localidad">
                                        <p id="localidad-valido" class="form-text ocultar-requisitos">Indicar un localidad valida de entre 3 y 30 caracteres</p>
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="cp">Codigo Postal</label>
                                        <input class="form-control" type="text" id="cp" name="cp" placeholder="CP">
                                        <p id="cp-valido" class="form-text ocultar-requisitos">Codigo postal de 5 digitos</p>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <h6 class="card-subtitle mb-2 text-muted">Contacto</h6>
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="telefono">Telefono</label>
                                        <input class="form-control" type="tel" id="telefono" name="telefono" placeholder="Telefono">
                                        <p id="telefono-valido" class="form-text ocultar-requisitos">Introduzca un telefono valido (698654789)</p>
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="email">Email</label>
                                        <input class="form-control" type="email" id="email" name="email" placeholder="test@test.com">
                                        <p id="email-valido" class="form-text ocultar-requisitos">Introduzca un email valido (test@test.com)</p>
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="contacto">Persona de contacto</label>
                                        <input class="form-control" type="text" id="contacto" name="contacto" placeholder="Persona de contacto">
                                        <p id="contacto-valido" class="form-text ocultar-requisitos">Introduzca un nombre valido (Antonio Gonzalez)</p>
                                    </div>  
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-5 text-center">
                                        <button class="btn btn-primary" type="submit">Registrar aseguradora</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>  
                </div>
            </section>

            <script src="<?=constant('URL')?>public/js/aseguradoras.js" type="module"></script>
            <?php require_once 'views/footer.php'?>
        