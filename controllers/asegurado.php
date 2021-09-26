<?php
    class Asegurado extends Controller {
        function __construct()
        {
            parent::__construct();
        }

        function render(){
            $this->view->render('asegurado/index');
        }
    }
?>