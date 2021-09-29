<?php

define('URL', 'http://localhost/ProyectoFinal/');

define('HOST', 'localhost');
define('DB', 'solucionesintegrales');
define('USER', 'root');
define('PASSWORD', '');
define('CHARSET', 'utf8');

define('TABLAADMIN', 'CREATE TABLE IF NOT EXISTS administrador (id int(4) NOT NULL PRIMARY KEY AUTO_INCREMENT, user varchar(9) NOT NULL UNIQUE, pass varchar(200))');

define('TABLAASEGURADORA', 'CREATE TABLE IF NOT EXISTS aseguradoras (nombre varchar(40), CIF varchar(9) NOT NULL UNIQUE PRIMARY KEY, direccion varchar(50), localidad varchar(30), cp int(5),
telefono int(9), email varchar(50) UNIQUE, contacto varchar(30))');

define('TABLAUSUARIOS', 'CREATE TABLE IF NOT EXISTS usuarios (id int(4) NOT NULL PRIMARY KEY AUTO_INCREMENT, user varchar(9) NOT NULL UNIQUE, pass varchar(200), FOREIGN KEY (user) REFERENCES aseguradoras(cif) ON DELETE CASCADE);');

define('TABLAASEGURADOS', 'CREATE TABLE IF NOT EXISTS asegurados (id int(4) NOT NULL PRIMARY KEY AUTO_INCREMENT, nombre varchar(40), apellido varchar(40), direccion varchar(50), localidad varchar(30), cp int(5),
telefono int(9), direccion_rep varchar(50), localidad_rep varchar(20), cp_rep varchar(5), aseguradora varchar(9), FOREIGN KEY (aseguradora) REFERENCES aseguradoras(cif))');
?>