<?php
require_once 'controllers/errores.php';

class App{
    function __construct()
    {
        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        $archivoController = 'controllers/'.$url[0].'.php';

        if(file_exists($archivoController)){
            require_once $archivoController;
            $controller = new $url[0];

            if(isset($url[1])){
                $controller->{$url[1]}();
            }
        }else{
            $controller = new Errores();
        }
    }
}
?>