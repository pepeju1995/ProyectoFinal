<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/styles.css">
        <script src="<?php echo constant('URL'); ?>public/js/validacion.js"></script>
        <title>Document</title>
    </head>

    <body>
        <?php require_once 'views/header.php'?>
        <div class="contenedor">
            <h1>Aseguradoras</h1>

            <?php if($this->mensaje != ""){ ?>
            <div>
                <p class="mensaje"><?php echo $this->mensaje; ?></p>
            </div>
            <?php } ?>

            <form action="<?php echo constant('URL'); ?>aseguradoras/crearAseguradora" method="post" id="formulario">
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre de empresa">
                    
                    <input type="password" id="contraseña" name="contraseña" placeholder="Contraseña">

                    <input type="password" id="contraseña-rep" name="contraseña-rep" placeholder="Contraseña">
                    
                    <input type="text" id="cif" name="cif" placeholder="CIF">
                    
                    <input type="text" id="direccion" name="direccion" placeholder="Direccion">
                    
                    <input type="text" id="localidad" name="localidad" placeholder="Localidad">
                    
                    <input type="text" id="codigopostal" name="codigopostal" placeholder="CP">
                    
                    <input type="tel" id="telefono" name="telefono" placeholder="Telefono">
                        
                    <input type="email" id="email" name="email" placeholder="test@test.com">
                        
                    <input type="text" id="contacto" name="contacto" placeholder="Persona de contacto">
                        
                    <button type="submit">Registrar aseguradora</button>
            </form>
        </div>
        <?php require_once 'views/footer.php'?>
    </body>
</html>