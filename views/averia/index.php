
            <?php require_once 'views/header.php'?>
        
            <section class="container">
                <div class="row justify-content-center">
                    <div class="col-8 text-center" id="respuesta">

                    </div>
                </div>

                <div class="card mb-5">
                    <div class="card-header text-center mb-3">
                        <h4>Nueva Averia</h4>
                    </div>
                    <form id="crearAveria" method="post">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="asegurado">Asegurado</label>
                                    <input class="form-control" type="text" readonly id="asegurado" name="asegurado" value="<?php echo $this->asegurado; ?>">
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="descripcion">Descripcion de la reparacion</label>
                                    <textarea class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion de la reparacion" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row justify-content-center mb-3">
                                <div class="col-5 text-center">
                                    <button class="btn btn-primary" type="submit">Registrar averia</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        
            <?php require_once 'views/footer.php'?>
       