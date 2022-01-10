<?php
    require_once('controllers/base_controller.php');
    require_once('models/Nhanvien.php');
    require_once('models/Sanpham.php');
    require_once('models/Danhmuc.php');
    require_once('models/Taikhoan.php'); 
    require_once('models/Nguyenlieu.php'); 
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
            if ($class == "Sanpham")
            {
                $select = array('Danhmuc' => Danhmuc::getAll() , 'Nguyenlieu' => NguyenLieu::getAll());

                $this->title($this->class,
                             array($this->list($data,$view,$select))
                );
            }
            else
            {
                $this->title($this->class,
                    array($this->list($data,$view))
                );

            }


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
            if($class == "Nhanvien")
            {
                $account = Taikhoan::edit($obj->SDT,$obj->Loai);
            }
            $data['data'] = $obj;
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
        public function create($action,$class)
        {
            $obj = json_decode($_GET['object']);
            $data = $class::create($obj);
            if($class == "Nhanvien")
            {
                $account = Taikhoan::register($obj->SDT,$obj->SDT,$obj->Loai);
            }
            $data['data'] = $class::getLast();
            echo json_encode($data);
        }
        public function upload($action,$class)
        {
            $file_name = $_POST['name'];
            $file_size = $_FILES['myfile']['size'];
            $file_tmp = $_FILES['myfile']['tmp_name'];
            $file_type = $_FILES['myfile']['type'];
            move_uploaded_file($file_tmp,"asset/image/".strtolower($class)."/".$file_name);
            echo json_encode(array('data'=>"upload ảnh thành công"));
        }
        
    }

?>