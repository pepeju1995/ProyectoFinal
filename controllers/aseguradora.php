<?php
    class Aseguradora extends Controller {
        function __construct()
        {
            parent::__construct();
            $this->view->render('aseguradora/index');
        }
    }
?>