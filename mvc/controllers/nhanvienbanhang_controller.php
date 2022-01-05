<?php
    require_once('controllers/base_controller.php');
    require_once('function.php');
    require_once('models/Sanpham.php');
    require_once('models/Chitiethoadon.php');
    require_once('models/Hoadon.php');
    class NhanvienbanhangController extends BaseController{
        function __construct(){
            $this->controller = 'nhanvienbanhang';
        }
        public function index($action,$class){
            $this->action = $action;
            $this->class = $class;
            $view = array('action'=>$this->action,
                            'class'=>$this->class,
                            'controller'=>$this->controller);

            $obj = $class == 'Chitiethoadon' ? $class::getAll($_GET['MaHD']) : $class::getAll();
            $data = array($class => $obj);
            $this->render();
            $this->title($this->class,
                        array($this->list($data,$view))
                    );
        }
        public function edit($action,$class){
            $MaHD = $_GET['MaHD'];
            $data = $class::edit($MaHD);
        }

        public function create($action,$class){
            $cart = getCart();
            $obj = $cart['cart'];
            if(isset($obj[1]->MaHD))
            {
                $size = $obj[1]->MaHD;
                $data = $class::delete($size); 
            }
            else
            {
                $size = $class::getSize() + 1;
            }
            $type = $_GET['type'];
            $TrangThai = $type == 0 ? "Chưa thanh toán" : "Đã thanh toán";
            $NgayTao = date("Y-m-d");
            $hoadon = $class::create($size,$_SESSION['hoten'],$NgayTao,$cart['tongTien'],$TrangThai);
            if($hoadon['code'] == 0)
            {
                foreach($obj as $o)
                {
                    $chitiet = Chitiethoadon::create($size,$o);
                }

            }
            unsetCart();
            redirect("?controller=nhanvienbanhang&action=index&class=Hoadon");
            
        }
        public function save($action,$class){
            $MaHD = $_GET['MaHD'];
            $data = Chitiethoadon::getAll($MaHD);
            $list = array();
            unsetCart();
            foreach($data as $d)
            {
                $sp = Sanpham::getOne($d[6])['error'];
                $sp['soDat'] = $d[2];
                $sp['MaHD'] = $MaHD;
                saveCart(json_decode(json_encode($sp)));
            }
            
            
        }
        public function delete($action,$class){
            $id = $_GET['id'];
            $data = $class::delete($id);
            echo json_encode($data);
        }
    }
?>