<?php
    class BaseController{
        protected $controller;
        protected $action;
        protected $class;
        protected $ratio;
        function render()
        {
            ob_start();
            require_once('views/'.$this->controller.'/menuBar.php');
            $menuBar = ob_get_clean();
            require_once('views/layout/template.php');
            require_once('views/layout/navbar.php');
            require_once('views/layout/menuBar.php');  
            require_once('views/layout/modal.php');
            require_once('views/message/question.php');
            require_once('views/message/announce.php');
        }
        function title($title,$lists)
        {
            foreach($lists as $list);
            require_once('views/' .$this->controller. '/title.php');   
        }
        function list($data,$view)
        {
            extract($view);
            extract($data);
            
            ob_start();
            require_once('views/' .$this->controller. '/list'.$this->class.'.php');
            $list = ob_get_clean();
            
            return $list;
        }

    }
?>