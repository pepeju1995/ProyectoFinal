<?php
    class Asegurado extends Controller {
        function __construct()
        {
            parent::__construct();
            $this->view->render('asegurado/index');
        }
    }
?>