<?php
    require_once('Connection.php');
    
    class Nguyenlieu{

        public $MaNL;
        public $Ten;
        public $SoLuong;
        public $NhaCungCap;
        public $NguonCungCap;

        public function __construct($MaNL = null,$Ten = null,$SoLuong = null,$NhaCungCap = null,$NguonCungCap = null,$HanSuDung = null)
        {
            $this->MaNL = $MaNL;
            $this->Ten = $Ten;
            $this->SoLuong = $SoLuong;
            $this->NhaCungCap = $NhaCungCap;
            $this->NguonCungCap = $NguonCungCap;
            $this->HanSuDung = $HanSuDung;

        }
        
        public static function getOne($id)
        {
            $sql = "select * from nguyenlieu where MaNL = ? ";
            $conn = Connection::open_database();
            $stm = $conn->prepare($sql);
            $stm->bind_param('i',$id);
            if(!$stm->execute())
            {
                return array('code' => 1,'error'=>'Không tìm thấy Nguyên liệu này');
            }
            $result = $stm->get_result();
            $data = $result->fetch_assoc();
            return $data;
        }

        public static function getLast()
        {
            $sql = "select  * from nguyenlieu ORDER BY MaNL DESC LIMIT 1 ";
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
            $sql = "select * from nguyenlieu";
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
                $list[] = new Nguyenlieu($s[0],$s[1],$s[2]);
            }
            return $list;

        }
        public static function delete($id)
        {
            $sql = "delete from nguyenlieu where MaNL = ?";
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
            $sql = "update  nguyenlieu
                    set Ten = ?,SoLuong = ?,NhaCungCap = ?, NguonCungCap = ?, HanSuDung = ?
                    where MaNL = ?";
            $conn = Connection::open_database();
            $stm = $conn->prepare($sql);
            $stm->bind_param('sii',$object->Ten,$object->SoLuong,$object->NhaCungCap,$object->NguonCungCap,$object->HanSuDung,$object->MaNL);
            if(!$stm->execute())
            {
                return array('code'=> 1,'error' =>"Có lỗi, vui lòng thử lại sau!");
            }
            return array('code'=> 0,'error' =>"Cập nhật thành công");
        }
        public static function create($object)
        {
            $sql = "insert into nguyenlieu(`Ten`,`SoLuong`,`NhaCungCap`,`NguonCungCap`,`HanSuDung`) values(?,?,?,?,?)";
            $conn = Connection::open_database();
            $stm = $conn->prepare($sql);
            $stm->bind_param('sisss',$object->Ten,$object->SoLuong,$object->NhaCungCap,$object->NguonCungCap,$object->HanSuDun);
            if(!$stm->execute())
            {
                return array('code'=> 1,'error' =>"Có lỗi, vui lòng thử lại sau!");
            }
            return array('code'=> 0,'error' =>"Thêm Thành công");
        }

    }
?>