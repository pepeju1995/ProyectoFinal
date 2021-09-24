<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php require_once 'views/header.php'?>

        <h1>Aseguradoras</h1>

        <form action="<?php echo constant('URL'); ?>aseguradora/nuevaAseguradora" method="post">
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre"  required>
            </p>
            <p>
                <label for="domicilio">Domicilio</label>
                <input type="text" name="domicilio" required>
            </p>
            <p>
                <label for="cif">CIF</label>
                <input type="text" name="cif" required>
            </p>
            <p>
                <label for="telefono">Telefono</label>
                <input type="tel" name="telefono" required>
            </p>
            <p>
                <label for="email">Email</label>
                <input type="email" name="email" required>
            </p>
            <p>
                <label for="persContacto">Persona de Contacto</label>
                <input type="text" name="persContacto" required>
            </p>
            <p>
                <input type="submit" value="Registrar nuevo alumno">
            </p>
        </form>

        <?php require_once 'views/footer.php'?>
    </body>
</html>