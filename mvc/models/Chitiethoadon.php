<?php
    require_once('Connection.php');
    
    class Chitiethoadon{


        public $MaHD;
        public $MaSP;
        public $SoLuong;
        public $Gia;
 
        public function __construct($MaHD,$MaSP,$SoLuong,$Gia)
        {
            $this->MaHD = $MaHD;
            $this->MaSP = $MaSP;
            $this->SoLuong = $SoLuong;
            $this->Gia = $Gia;
        }

        public function setMaSP($MaSP)
        {
            $this->MaSP = $MaSP;
        }
        public function setMaHD($MaHD)
        {
            $this->MaHD = $MaHD;
        }
        public function setSoLuong($SoLuong)
        {
            $this->SoLuong = $SoLuong;
        }
        public function setGia($Gia)
        {
            $this->Gia = $Gia;
        }

        public static function getAll($MaHD)
        {
            $sql = "select hoadon.MaHD,Ten,chitiethoadon.SoLuong,sanpham.Gia,chitiethoadon.Gia,TongTien,sanpham.MaSP,TrangThai
            from chitiethoadon,hoadon,sanpham 
            where hoadon.MaHD = chitiethoadon.MaHD and sanpham.MaSP = chitiethoadon.MaSP and hoadon.MaHD = ?";
            $conn = Connection::open_database();
            $stm = $conn->prepare($sql);
            $stm->bind_param('i',$MaHD);
            if(!$stm->execute())
            {
                return null;
            }
            $result = $stm->get_result();
            $data = $result->fetch_all();
            return $data;
        }
        public static function create($MaHD,$object)
        {
            $sql = "insert into chitiethoadon(`MaHD`,`MaSP`,`SoLuong`,`Gia`) values(?,?,?,?)";
            $conn = Connection::open_database();
            $stm = $conn->prepare($sql);
            $Gia = ($object->Gia*$object->soDat);
            $stm->bind_param('sssi',$MaHD,$object->MaSP,$object->soDat,$Gia);
            if(!$stm->execute())
            {
                return array('code'=> 1,'error' =>"Có lỗi, vui lòng thử lại sau!");
            }
            return array('code'=> 0,'error' =>"Thêm hoá đơn thành công");
        }
    }
?>