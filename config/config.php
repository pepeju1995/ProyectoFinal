<?php

define('URL', 'http://localhost/ProyectoFinal/');

define('HOST', 'localhost');
define('DB', 'solucionesintegrales');
define('USER', 'root');
define('PASSWORD', '');
define('CHARSET', 'utf8');

define('TABLAASEGURADORA', 'CREATE TABLE IF NOT EXISTS aseguradoras (nombre varchar(40), CIF varchar(9) NOT NULL UNIQUE PRIMARY KEY, direccion varchar(50), localidad varchar(30), cp int(5),
telefono int(9), email varchar(50) UNIQUE, contacto varchar(30))');

define('TABLAUSUARIOS', 'CREATE TABLE IF NOT EXISTS usuarios (id int(4) NOT NULL PRIMARY KEY AUTO_INCREMENT, user varchar(9) UNIQUE, pass varchar(200), rol varchar(15));');
?>