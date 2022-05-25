
            <?php require_once 'views/header.php'?>
                    
            <section class="container">
                <div class="row justify-content-center">
                    <div class="col-8 text-center" id="respuesta">

                    </div>
                </div>

                <div class="card">
                    <div class="card-header text-center">
                        <h4>Detalle de <?php echo $this->asegurado->nombre . " " . $this->asegurado->apellido; ?></h4>
                    </div>
                    <div class="card-body">
                        <form id="editarAsegurado" method="post">
                            <div class="container">
                                <div class="row">
                                    <h6 class="card-subtitle mb-2 text-muted">Datos de la aseguradora</h6>
                                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                                        <label>NIF</label>
                                        <input class="form-control" type="text" name="nif" readonly value="<?php echo $this->asegurado->id; ?>">
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                                        <label>Nombre</label>
                                        <input class="form-control" type="text" name="nombre" disabled value="<?php echo $this->asegurado->nombre; ?>" >
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                                        <label>Apellidos</label>
                                        <input class="form-control" type="text" name="apellido" disabled value="<?php echo $this->asegurado->apellido; ?>"> 
                                    </div>
                                </div>

                                <div class="row">
                                    <h6 class="card-subtitle mb-2 text-muted">Direccion</h6>
                                    <div class="col-12 col-md-4 col-lg-3 mb-3">
                                        <label for="direccion">Direccion</label>
                                        <input class="form-control" type="text" id="direccion" name="direccion" value="<?php echo $this->asegurado->direccion; ?>" >
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3 mb-3">      
                                        <label for="localidad">Localidad</label>                                  
                                        <input class="form-control" type="text" id="localidad" name="localidad" value="<?php echo $this->asegurado->localidad; ?>" >
                                    </div>                
                                    <div class="col-12 col-md-4 col-lg-3 mb-3">
                                        <label for="cp">Codigo postal</label>
                                        <input class="form-control" type="text" id="cp" name="cp" value="<?php echo $this->asegurado->cp; ?>" >
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <h6 class="card-subtitle mb-2 text-muted">Contacto</h6>
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="telefono">Telefono</label>
                                        <input class="form-control" type="text" id="telefono" name="telefono" value="<?php echo $this->asegurado->telefono; ?>" >
                                    </div>
                                </div>

                                <div class="row">
                                    <h6 class="card-subtitle mb-2 text-muted">Direccion de reparaciones</h6>
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="direccion_rep">Direccion</label>
                                        <input class="form-control" type="tel" id="direccion_rep" name="direccion_rep" value="<?php echo $this->asegurado->direccion_rep; ?>" >
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="localidad_rep">Localidad</label>
                                        <input class="form-control" type="text" id="localidad_rep" name="localidad_rep" value="<?php echo $this->asegurado->localidad_rep; ?>" >
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <label  for="cp_rep">Codigo postal</label>
                                        <input class="form-control" type="text" id="cp_rep" name="cp_rep" value="<?php echo $this->asegurado->cp_rep; ?>" >
                                    </div>                                        
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-5 text-center">
                                        <button type="submit" class="btn btn-primary">Actualizar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>  
                </div>
            </section>
        
            <script src="<?=constant('URL')?>public/js/asegurado.js" type="module"></script>
            <?php require_once 'views/footer.php'?>
       