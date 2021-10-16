<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
        
        <title>Document</title>
    </head>
    
    <body>
        <div class=".container">
            <?php require 'views/header.php'?>
            
            <?php if($this->mensaje != ""){ ?>
            <div>
                <p id="respuesta" class="mensaje"><?php echo $this->mensaje; ?></p>
            </div>
            <?php } ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">CIF</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Localidad</th>
                            <th scope="col">CP</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contacto</th>
                        </tr>
                    </thead>

                    <tbody id="tbody-aseguradoras">
                        <?php 
                            include_once 'models/aseguradora.php';
                            foreach($this->aseguradoras as $row){
                                $aseguradora = new Aseguradora();
                                $aseguradora = $row;
                        ?>
                            <tr id="fila-<?php echo $aseguradora->cif; ?>" class="filas">
                                <td><?php echo $aseguradora->nombre; ?></td>
                                <td><?php echo $aseguradora->cif; ?></td>
                                <td><?php echo $aseguradora->direccion; ?></td>
                                <td><?php echo $aseguradora->localidad; ?></td>
                                <td><?php echo $aseguradora->cp; ?></td>
                                <td><?php echo $aseguradora->telefono; ?></td>
                                <td><?php echo $aseguradora->email; ?></td>
                                <td><?php echo $aseguradora->contacto; ?></td>
                                <?php if($_SESSION['user'] == $aseguradora->cif || $_SESSION['user'] == 'admin'){?>
                                <td> <a href="<?php echo constant('URL') . 'aseguradoras/verAseguradora/'. $aseguradora->cif; ?> ">Editar</a> </td>
                                <td><button class="bEliminar" data-cif="<?php echo $aseguradora->cif ?>">Eliminar</button></td>
                                <?php }?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php if($_SESSION['user'] == 'admin'){?>
                <button class="btn"><a href="<?php echo constant('URL'); ?>aseguradoras/nuevaAseguradora">Nueva Aseguradora</a></button>
                <?php } ?>

            <?php require 'views/footer.php'?>
        </div>

        <script src="<?php echo constant('URL'); ?>public/js/aseguradoras.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/jquery-3.6.0.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/popper.min.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap.min.js"></script>
    </body>
</html>