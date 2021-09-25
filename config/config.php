<?php

define('URL', 'http://localhost/ProyectoFinal/');

define('HOST', 'localhost');
define('DB', 'solucionesintegrales');
define('USER', 'root');
define('PASSWORD', '');
define('CHARSET', 'utf8');

define('TABLAASEGURADORA', 'CREATE TABLE IF NOT EXISTS aseguradoras (id int(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nombre varchar(40), CIF varchar(8), direccion varchar(50), localidad varchar(30), cp int(5),
telefono int(9), email varchar(50) UNIQUE, contacto varchar(30))');

?>