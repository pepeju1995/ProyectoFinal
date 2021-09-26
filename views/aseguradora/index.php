<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/formularios.css">
        <title>Document</title>
    </head>
    
    <body>
        <?php require 'views/header.php'?>
        
        <div class="contenedor">
            <table class="centrar tabla">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>CIF</th>
                        <th>Direccion</th>
                        <th>Localidad</th>
                        <th>CP</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Contacto</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                        include_once 'models/aseguradora.php';
                        foreach($this->aseguradoras as $row){
                            $aseguradora = new Aseguradora();
                            $aseguradora = $row;
                    ?>
                    <tr class="filas">
                        <td><?php echo $aseguradora->nombre; ?></td>
                        <td><?php echo $aseguradora->cif; ?></td>
                        <td><?php echo $aseguradora->direccion; ?></td>
                        <td><?php echo $aseguradora->localidad; ?></td>
                        <td><?php echo $aseguradora->cp; ?></td>
                        <td><?php echo $aseguradora->telefono; ?></td>
                        <td><?php echo $aseguradora->email; ?></td>
                        <td><?php echo $aseguradora->contacto; ?></td>
                        <td> <a href="<?php echo constant('URL') . 'aseguradoras/verAseguradora/'. $aseguradora->cif; ?> ">Editar</a> </td>
                        <td> <a href="<?php echo constant('URL') . 'aseguradoras/eliminarAseguradora/'. $aseguradora->cif; ?>">Eliminar</a> </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <?php require 'views/footer.php'?>
    </body>
</html>