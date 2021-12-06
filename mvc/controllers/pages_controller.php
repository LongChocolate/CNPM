<?php
    require_once('controllers/base_controller.php');     
    class PagesController extends BaseController{
        public function error()
        {

            require_once('views/layout/error.php');
        }
    }

?>