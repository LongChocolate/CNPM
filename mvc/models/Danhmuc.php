<?php
    require_once('Connection.php');
    
    class Danhmuc{

        public $id;
        public $TenMD;
        public function __construct($id = null,$TenDM = null)
        {
            $this->id = $id;
            $this->TenDM = $TenDM;

        }
        
        public static function getOne($id)
        {
            $sql = "select * from danhmuc where id = ? ";
            $conn = Connection::open_database();
            $stm = $conn->prepare($sql);
            $stm->bind_param('i',$id);
            if(!$stm->execute())
            {
                return array('code' => 1,'error'=>'Không tìm thấy sản phẩm này');
            }
            $result = $stm->get_result();
            $data = $result->fetch_assoc();
            return $data;
        }

        public static function getLast()
        {
            $sql = "select  * from danhmuc ORDER BY id DESC LIMIT 1 ";
            $conn = Connection::open_database();
            $stm = $conn->prepare($sql);
            if(!$stm->execute())
            {
                return null;
            }
            $result = $stm->get_result();
            $data = $result->fetch_assoc();
            return $data;
        }
        public static function getAll()
        {
            $sql = "select * from danhmuc";
            $conn = Connection::open_database();
            $stm = $conn->prepare($sql);
            if(!$stm->execute())
            {
                return null;
            }
            $result = $stm->get_result();
            $data = $result->fetch_all();
            $list = array();
            foreach($data as $s)
            {
                $list[] = new Danhmuc($s[0],$s[1]);
            }
            return $list;

        }
        public static function delete($id)
        {
            $sql = "delete from danhmuc where id = ?";
            $conn = Connection::open_database();
            $stm = $conn->prepare($sql);
            $stm->bind_param('i',$id);
            if(!$stm->execute())
            {
                return array('code'=> 1,'error' =>"Có lỗi, vui lòng thử lại sau");
            }
            return array('code'=> 0,'error' =>"Xoá thành công");
        }
        public static function edit($object)
        {
            $sql = "update  danhmuc
                    set TenDM = ?
                    where id = ?";
            $conn = Connection::open_database();
            $stm = $conn->prepare($sql);
            $stm->bind_param('si',$object->TenDM,$object->id);
            if(!$stm->execute())
            {
                return array('code'=> 1,'error' =>"Có lỗi, vui lòng thử lại sau!");
            }
            return array('code'=> 0,'error' =>"Cập nhật thành công");
        }
        public static function create($object)
        {
            $sql = "insert into danhmuc(`TenDM`) values(?)";
            $conn = Connection::open_database();
            $stm = $conn->prepare($sql);
            $stm->bind_param('s',$object->TenDM);
            if(!$stm->execute())
            {
                return array('code'=> 1,'error' =>"Có lỗi, vui lòng thử lại sau!");
            }
            return array('code'=> 0,'error' =>"Thêm Thành công");
        }

    }
?>