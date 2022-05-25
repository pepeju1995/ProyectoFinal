<?php

define('URL', 'http://localhost/insurance-companies/');

define('HOST', 'localhost');
define('DB', 'solucionesintegrales');
define('USER', 'root');
define('PASSWORD', '');
define('CHARSET', 'utf8');

define('URL2', 'http://localhost/insurance-companies/');

define('HOST2', 'eu-cdbr-west-02.cleardb.net');
define('DB2', 'heroku_5d480beb9c260b2');
define('USER2', 'ba131694c1efa7');
define('PASSWORD2', '662dfc65');

define('TABLAADMIN', 'CREATE TABLE IF NOT EXISTS administrador (id int(4) NOT NULL PRIMARY KEY AUTO_INCREMENT, user varchar(9) NOT NULL UNIQUE, pass varchar(200))');

define('TABLAASEGURADORA', 'CREATE TABLE IF NOT EXISTS aseguradoras (nombre varchar(40), NIF varchar(9) NOT NULL UNIQUE PRIMARY KEY, direccion varchar(50), localidad varchar(30), cp int(5),
telefono int(9), email varchar(50) UNIQUE, contacto varchar(30))');

define('TABLAUSUARIOS', 'CREATE TABLE IF NOT EXISTS usuarios (id int(4) NOT NULL PRIMARY KEY AUTO_INCREMENT, user varchar(9) NOT NULL UNIQUE, pass varchar(200), FOREIGN KEY (user) REFERENCES aseguradoras(nif));');

define('TABLAASEGURADOS', 'CREATE TABLE IF NOT EXISTS asegurados (nif varchar(9) NOT NULL PRIMARY KEY, nombre varchar(40), apellido varchar(40), direccion varchar(50), localidad varchar(30), cp int(5),
telefono int(9), direccion_rep varchar(50), localidad_rep varchar(20), cp_rep int(5), aseguradora varchar(9), FOREIGN KEY (aseguradora) REFERENCES aseguradoras(nif))');

define('TABLAAVERIAS', 'CREATE TABLE IF NOT EXISTS averias (id int(8) NOT NULL PRIMARY KEY AUTO_INCREMENT, aseguradora varchar(9), asegurado varchar(9), fecha datetime, descripcion varchar(255), FOREIGN KEY (aseguradora) REFERENCES aseguradoras(nif),
FOREIGN KEY (asegurado) REFERENCES asegurados(nif))');
?>