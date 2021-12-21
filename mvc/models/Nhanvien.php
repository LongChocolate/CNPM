<?php
    require_once('Connection.php');
    
    class Nhanvien{


        public $MaNV;
        public $SDT;
        public $HoTen;
        public $Anh;
        public $Loai;
        public $GioiTinh;
        public $CMND;
        public $created;
        public $updated;
 
        public function __construct($MaNV,$SDT,$HoTen,$Anh,$Loai,$GioiTinh,$CMND,$created,$updated)
        {
            $this->MaNV = $MaNV;
            $this->SDT = $SDT;
            $this->HoTen = $HoTen;
            $this->Anh = $Anh;
            $this->CMND = $CMND;
            $this->GioiTinh = $GioiTinh;
            $this->Loai = $Loai;
            $this->created = $created;
            $this->updated = $updated;
        }
        public function setMaNV($MaNV)
        {
            $this->MaNV = $MaNV;
        }
        public function setSDT($SDT)
        {
            $this->SDT = $SDT;
        }
        public function setHoTen($HoTen)
        {
            $this->HoTen = $HoTen;
        }
        public function setAnh($Anh)
        {
            $this->Anh = $Anh;
        }
        public function setGioiTinh($GioiTinh)
        {
            $this->GioiTinh = $GioiTinh;
        }
        public function setLoai($Loai)
        {
            $this->Loai = $Loai;
        }
        public function setCMND($CMND)
        {
            $this->CMND = $CMND;
        }
       
        public static function getOne($SDT)
        {
            $sql = "select MaNV,nhanvien.SDT,nhanvien.HoTen,Anh,Loai,GioiTinh,CMND,nhanvien.created_at,nhanvien.updated_at from nhanvien,taikhoan where MaNV = ? and nhanvien.SDT = taikhoan.SDT ";
            $conn = Connection::open_database();
            $stm = $conn->prepare($sql);
            $stm->bind_param('i',$SDT);
            if(!$stm->execute())
            {
                return array('code' => 1,'error'=>'Không tìm thấy Nhân Viên này');
            }
            $result = $stm->get_result();
            $data = $result->fetch_assoc();
            return $data;
        }

        public static function getAll()
        {
            $sql = "select MaNV,nhanvien.SDT,HoTen,Anh,Loai,GioiTinh,CMND,nhanvien.created_at,nhanvien.updated_at 
            from nhanvien,taikhoan 
            where nhanvien.SDT = taikhoan.SDT";
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
                $list[] = new Nhanvien($s[0],$s[1],$s[2],$s[3],$s[4],$s[5],$s[6],$s[7],$s[8]);
            }
            return $list;

        }
        public static function delete($MaNV)
        {
            $sql = "delete from nhanvien where MaNV = ?";
            $conn = Connection::open_database();
            $stm = $conn->prepare($sql);
            $stm->bind_param('i',$MaNV);
            if(!$stm->execute())
            {
                return array('code'=> 1,'error' =>"Có lỗi, vui lòng thử lại sau!");
            }
            return array('code'=> 0,'error' =>"Xoá thành công");
        }
        public static function edit($object)
        {
            $sql = "update nhanvien 
                    set HoTen = ?,Anh = ? ,GioiTinh = ?, CMND = ?
                    where MaNV = ?";
            $conn = Connection::open_database();
            $stm = $conn->prepare($sql);
            $stm->bind_param('ssiii',$object->HoTen,$object->Anh,$object->GioiTinh,$object->CMND,$object->MaNV);
            if(!$stm->execute())
            {
                return array('code'=> 1,'error' =>"Có lỗi, vui lòng thử lại sau!");
            }
            return array('code'=> 0,'error' =>"Cập nhật thành công");
        }
        public static function create($object)
        {
            $sql = "insert into nhanvien(`SDT`,`HoTen`,`Anh`,`GioiTinh`,`CMND`) values(?,?,?,?,?)";
            $conn = Connection::open_database();
            $stm = $conn->prepare($sql);
            $stm->bind_param('sssii',$object->SDT,$object->HoTen,$object->Anh,$object->GioiTinh,$object->CMND);
            if(!$stm->execute())
            {
                return array('code'=> 1,'error' =>"Có lỗi, vui lòng thử lại sau!");
            }
            return array('code'=> 0,'error' =>"Thêm Thành công");
        }
    }
?>