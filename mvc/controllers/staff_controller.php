<?php
    require_once('controllers/base_controller.php');
    class StaffController extends BaseController{
        public function index(){
            ob_start();
            require_once('views/layout/navbar.php');
            $navbar = ob_get_clean();
            $content = '';
            require_once('views/layout/template.php');
        }
        public function view(){
            echo 'View of Staff';
        }
        public function edit(){
            echo 'Edit of Staff';
        }
        public function create(){
            echo 'Create of Staff';
        }
        public function save(){
            echo 'Save of Staff';
        }
        public function delete(){
            echo 'Delete of Staff';
        }
    }
?>