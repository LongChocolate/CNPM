<?php
    require_once('controllers/base_controller.php');
    require_once('models/NguyenLieu.php');
    require_once('function.php');

    class NhanvienkhoController extends BaseController{ 

        function __construct(){
            $this->controller = 'nhanvienkho';
        }
        public function index($action,$class){
            $this->action = $action;
            $this->class = $class;
            $view = array('action'=>$this->action,
                            'class'=>$this->class,
                            'controller'=>$this->controller);
            $obj = $class::getAll();
           
            $data = array($class => $obj);
            $this->render();

            $this->title($this->class,
                array($this->list($data,$view))
            );



        }   

        public function delete($action,$class)
        {
            $id = $_GET['id'];
            $data = $class::delete($id);
            echo json_encode($data);
        }

        public function edit($action,$class)
        {
            $obj = json_decode($_GET['object']);
            $data = $class::edit($obj);
            $data['data'] = $obj;
            echo json_encode($data);
        }
        public function view($action,$class)
        {
            $Ma = $_GET['id'];
            $obj = $class::getOne($Ma);
            $attri = getAttri($class);
            $response = array('data' => $obj, 'attribute' =>$attri);
            echo json_encode($response);
        }
        public function create($action,$class)
        {
            $obj = json_decode($_GET['object']);
            $data = $class::create($obj);
            $data['data'] = $class::getLast();
            echo json_encode($data);
        }

    }

?>