<?php
require_once 'controllers/errores.php';

class App{
    function __construct()
    {
        session_start();
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if(empty($url[0])){
            if(!isset($_SESSION['user'])){
                $archivoController = 'controllers/login.php';    
                require_once $archivoController;
                $controller = new Login();
                $controller->loadModel('login');
                $controller->render();
            } elseif ($_SESSION['user'] == 'admin') {
                $archivoController = 'controllers/aseguradoras.php';
                require_once $archivoController;
                $controller = new Aseguradoras();
                $controller->loadModel('aseguradoras');
                $controller->{'verAseguradoras'}();
            } else {
                $archivoController = 'controllers/asegurados.php';
                require_once $archivoController;
                $controller = new Asegurados();
                $controller->loadModel('asegurados');
                $controller->{'verAsegurados'}();
            }
            
            return false;
        }
        
        $archivoController = 'controllers/'.$url[0].'.php';

        if(file_exists($archivoController)){
            require_once $archivoController;
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            $nparam = sizeof($url);

            if($nparam > 1){
                if($nparam > 2){
                    $param = [];
                    for($i = 2; $i < $nparam; $i++){
                        array_push($param, $url[$i]);
                    }
                    $controller->{$url[1]}($param);
                } else {
                    $controller->{$url[1]}();
                }
            } else {
                $controller->render();
            }
        }else{
            $controller = new Errores();
        }
    }
}
?>