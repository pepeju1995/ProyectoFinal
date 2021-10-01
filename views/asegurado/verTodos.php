<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/styles.css">
        
        <title>Document</title>
    </head>
    
    <body>
        <?php require 'views/header.php'?>
        
        <div class="contenedor">
            
            <?php if($this->mensaje != ""){ ?>
            <div>
                <p id="respuesta" class="mensaje"><?php echo $this->mensaje; ?></p>
            </div>
            <?php } ?>

            <table class="centrar tabla">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Direccion</th>
                        <th>Localidad</th>
                        <th>CP</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Localidad</th>
                        <th>CP</th>
                        <th>Aseguradora</th>
                    </tr>
                </thead>

                <tbody id="tbody-aseguradoras">
                    <?php 
                        include_once 'models/asegurado.php';
                        foreach($this->asegurados as $row){
                            $asegurado = new Asegurado();
                            $asegurado = $row;
                    ?>
                    <tr class="filas">
                        <td><?php echo $asegurado->nombre; ?></td>
                        <td><?php echo $asegurado->apellido; ?></td>
                        <td><?php echo $asegurado->direccion; ?></td>
                        <td><?php echo $asegurado->localidad; ?></td>
                        <td><?php echo $asegurado->cp; ?></td>
                        <td><?php echo $asegurado->telefono; ?></td>
                        <td><?php echo $asegurado->direccion_rep; ?></td>
                        <td><?php echo $asegurado->localidad_rep; ?></td>
                        <td><?php echo $asegurado->cp_rep; ?></td>
                        <td><?php echo $asegurado->aseguradora; ?></td>
                        <?php if($_SESSION['user'] == $asegurado->aseguradora){?>
                        <td><a href="<?php echo constant('URL')?>asegurados/verAsegurado/<?php echo $asegurado->id?>"><?php $_SESSION['id_asegurado'] = $asegurado->id; ?>Editar</a></td>
                        <td><a href="<?php echo constant('URL'); ?>averias/"><?php $_SESSION['id_asegurado'] = $asegurado->id; ?>Nueva Averia</a></td>
                        <td><a href="<?php echo constant('URL')?>asegurados/eliminarAsegurado/<?php echo $asegurado->id?>">Eliminar</a></td>
                        <?php } ?>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php if($_SESSION['user'] != 'admin'){?>
            <button><a href="<?php echo constant('URL')?>asegurados">Nuevo Asegurado</a></button>
            <?php } ?>
        </div>

        <?php require 'views/footer.php'?>

        <script src="<?php echo constant('URL'); ?>public/js/aseguradoras.js"></script>
    </body>
</html>