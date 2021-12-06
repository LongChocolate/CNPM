<?php
    require_once('controllers/base_controller.php');
    require_once('models/Staff.php');
    require_once('models/Product.php');
    require_once('function.php');

    class AdminController extends BaseController{ 

        function __construct(){
            $this->controller = 'admin';
        }
        public function index($action,$class){
                       
            $this->action = $action;
            $this->ratio = '12';
            $this->class = $class;

            $view = array('action'=>$this->action,
                            'ratio'=>$this->ratio,
                            'class'=>$this->class,
                            'controller'=>$this->controller);
            $obj = $this->class::getAll();
            $data = array($class => $obj);
            
            $this->render();
            $this->title($this->class,
                        array($this->list($data,$view))
                    );

            if(isset($_GET['check']))
            {
                $mess = $_GET['check'];
                echo"
                <script>
                    message('','','','',1,`$mess`);
                </script>
                ";

            }
        }   

        public function delete($action,$class)
        {
            setID($_GET['id']);
            $id = getID();
            $data = $class::delete($id);
            $error = $data['error'];
            redirect("?controller=$this->controller&class=$class&check=$error");  
        }

        public function edit($action,$class)
        {
            $state = $_GET['state'];
            $info = $_GET['info'];
            $obj = new $class('','','','','','','');
            
            for($i = 0;$i < count($state);$i++)
            {
                $attri = strtoupper($state[$i]);
                print_r($attri);
            }
            // $data = $class::edit($obj);
            // $error = $data['error'];
            // redirect("?controller=$this->controller&class=$class&check=$error");  
            // print_r($_GET['info']);
            
        }
    }

?>