
            <?php require_once 'views/header.php'?>
            
            <section class="container">
                <div class="row justify-content-center">
                    <div class="col-8 text-center" id="respuesta">

                    </div>
                </div>

                <div class="card">
                    <div class="card-header text-center">
                        <h4>Nuevo Asegurado</h4>
                    </div>
                    <div class="card-body">
                        <form id="crearAsegurado" method="post">
                            <div class="container">
                                <div class="row">
                                    <h6 class="card-subtitle mb-2 text-muted">Datos personales</h6>
                                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                                        <label for="nif">NIF</label>
                                        <input class="form-control" id="nif" type="text" name="nif" placeholder="NIF">
                                        <p id="nif-valido" class="form-text ocultar-requisitos">Introduzca un NIF valido (12345678X - A79854390)</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                                        <label for="nombre">Nombre</label>
                                        <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre" >
                                        <p id="nombre-valido" class="form-text ocultar-requisitos">Introduzca entre 4 y 30 caracteres alfabeticos</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                                        <label>Apellidos</label>
                                        <input class="form-control" type="text" id="apellido" name="apellido" placeholder="Apellidos"> 
                                        <p id="apellido-valido" class="form-text ocultar-requisitos">Introduzca entre 4 y 30 caracteres alfabeticos</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <h6 class="card-subtitle mb-2 text-muted">Direccion</h6>
                                    <div class="col-12 col-md-4 col-lg-3 mb-3">
                                        <label for="direccion">Direccion</label>
                                        <input class="form-control" type="text" id="direccion" name="direccion" placeholder="Direccion" >
                                        <p id="direccion-valido" class="form-text ocultar-requisitos">Indicar la calle y el numero separado por una coma (Calle  mayor, 74)</p>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3 mb-3">      
                                        <label for="localidad">Localidad</label>                                  
                                        <input class="form-control" type="text" id="localidad" name="localidad" placeholder="Localidad" >
                                        <p id="localidad-valido" class="form-text ocultar-requisitos">Indicar un localidad valida de entre 3 y 30 caracteres</p>
                                    </div>                
                                    <div class="col-12 col-md-4 col-lg-3 mb-3">
                                        <label for="cp">Codigo postal</label>
                                        <input class="form-control" type="text" id="cp" name="cp" placeholder="Codigo Postal" >
                                        <p id="cp-valido" class="form-text ocultar-requisitos">Codigo postal de 5 digitos</p>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <h6 class="card-subtitle mb-2 text-muted">Contacto</h6>
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="telefono">Telefono</label>
                                        <input class="form-control" type="text" id="telefono" name="telefono" placeholder="Telefono" >
                                        <p id="telefono-valido" class="form-text ocultar-requisitos">Introduzca un telefono valido (698654789)</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <h6 class="card-subtitle mb-2 text-muted">Direccion de reparaciones</h6>
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="direccion_rep">Direccion</label>
                                        <input class="form-control" type="tel" id="direccion_rep" name="direccion_rep" placeholder="Direccion" >
                                        <p id="direccion_rep-valido" class="form-text ocultar-requisitos">Indicar la calle y el numero separado por una coma (Calle  mayor, 74)</p>
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="localidad_rep">Localidad</label>
                                        <input class="form-control" type="text" id="localidad_rep" name="localidad_rep" placeholder="Loclidad" >
                                        <p id="localidad_rep-valido" class="form-text ocultar-requisitos">Indicar un localidad valida de entre 3 y 30 caracteres</p>
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <label  for="cp_rep">Codigo postal</label>
                                        <input class="form-control" type="text" id="cp_rep" name="cp_rep" placeholder="Codigo Postal" >
                                        <p id="cp_rep-valido" class="form-text ocultar-requisitos">Codigo postal de 5 digitos</p>
                                    </div>                                        
                                </div>
                                
                                <div class="row justify-content-center">
                                    <div class="col-5 text-center">
                                        <button type="submit" class="btn btn-primary">Crear Asegurado</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>  
                </div>
            </section>
            
            <script src="<?=constant('URL')?>public/js/asegurado.js" type="module"></script>
            <?php require_once 'views/footer.php'?>
        