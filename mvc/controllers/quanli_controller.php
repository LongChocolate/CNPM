<?php
    require_once('controllers/base_controller.php');
    require_once('models/Nhanvien.php');
    require_once('models/Sanpham.php');
    require_once('function.php');

    class QuanliController extends BaseController{ 

        function __construct(){
            $this->controller = 'quanli';
        }
        public function index($action,$class){
                       
            $this->action = $action;
            $this->ratio = '12';
            $this->class = $class;
            $view = array('action'=>$this->action,
                            'ratio'=>$this->ratio,
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
            echo json_encode($data);
        }
        public function create($action,$class)
        {
            $obj = json_decode($_GET['object']);
            $data = $class::create($obj);
            if($class == "Nhanvien")
            {
                $account = Taikhoan::register($obj->SDT,$obj->SDT,$obj->Loai);
            }
            echo json_encode($data);
        }
        public function view($action,$class)
        {
            $MaNV = $_GET['id'];
            $obj = $class::getOne($MaNV);
            $attri = getAttri($class);
            $response = array('data' => $obj, 'attribute' =>$attri);
            echo json_encode($response);
        }
    }

?>