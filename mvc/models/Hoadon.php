<?php
    require_once('Connection.php');
    
    class Hoadon{


        public $MaHD;
        public $TenNV;
        public $NgayTao;
        public $TongTien;
        public $TrangThai;
 
        public function __construct($MaHD,$TenNV,$NgayTao,$TongTien,$TrangThai)
        {
            $this->MaHD = $MaHD;
            $this->TenNV = $TenNV;
            $this->NgayTao = $NgayTao;
            $this->TongTien = $TongTien;
            $this->TrangThai = $TrangThai;
        }

        public function setTenNV($TenNV)
        {
            $this->TenNV = $TenNV;
        }
        public function setMaHD($MaHD)
        {
            $this->MaHD = $MaHD;
        }
        public function setNgayTao($NgayTao)
        {
            $this->NgayTao = $NgayTao;
        }
        public function setTongTien($TongTien)
        {
            $this->TongTien = $TongTien;
        }
        public function setTrangThai($TrangThai)
        {
            $this->TrangThai = $TrangThai;
        }
        public static function getSize()
        {
            $sql = "select * from hoadon ORDER BY MaHD DESC LIMIT 1";
            $conn = Connection::open_database();
            $stm = $conn->prepare($sql);
            if(!$stm->execute())
            {
                return array('code'=> 2,'error' =>"Có lỗi");
            }
            $result = $stm->get_result();
            $data = $result->fetch_assoc();
            return $data['MaHD'];
        }

 
        public static function getAll()
        {
            $sql = "select *
            from hoadon";
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
                $list[] = new Hoadon($s[0],$s[1],$s[2],$s[3],$s[4]);
            }
            return $list;

        }
        public static function delete($MaHD)
        {
            $sql = "delete from hoadon where MaHD = ?";
            $conn = Connection::open_database();
            $stm = $conn->prepare($sql);
            $stm->bind_param('i',$MaHD);
            if(!$stm->execute())
            {
                return array('code'=> 1,'error' =>"Có lỗi, vui lòng thử lại sau!");
            }
            return array('code'=> 0,'error' =>"Xoá thành công");
        }
        public static function edit($MaHD)
        {
            $sql = "update hoadon 
                    set TrangThai = ?
                    where MaHD = ?";
            $conn = Connection::open_database();
            $TrangThai = 'Đã thanh toán';
            $stm = $conn->prepare($sql);
            $stm->bind_param('si',$TrangThai,$MaHD);
            if(!$stm->execute())
            {
                return array('code'=> 1,'error' =>"Có lỗi, vui lòng thử lại sau!");
            }
            return array('code'=> 0,'error' =>"Cập nhật thành công");
        }
        public static function create($MaHD,$TenNV,$NgayTao,$TongTien,$TrangThai)
        {
            $sql = "insert into hoadon(`MaHD`,`TenNV`,`NgayTao`,`TongTien`,`TrangThai`) values(?,?,?,?,?)";
            $conn = Connection::open_database();
            $stm = $conn->prepare($sql);
            $stm->bind_param('sssis',$MaHD,$TenNV,$NgayTao,$TongTien,$TrangThai);
            if(!$stm->execute())
            {
                return array('code'=> 1,'error' =>"Có lỗi, vui lòng thử lại sau!");
            }
            return array('code'=> 0,'error' =>"Thêm hoá đơn thành công");
        }

        public static function thongke($loai = 'Ngày')
        {
            $sql = '';
            if($loai == 'Ngày')
            {
                $sql = "select date_format(NgayTao,'%d-%m-%y'),sum(TongTien) as 'TongTien' 
                from hoadon
                Group by NgayTao";
            }
            else if($loai == 'Tháng')
            {
                $sql = "select date_FORMAT(`NgayTao`,'%m-%y'),sum(TongTien) as 'TongTien' 
                from hoadon
                Group by date_FORMAT(`NgayTao`,'%m-%y')";
            }
            elseif ($loai == 'Năm')
            {
                $sql = "select Year(`NgayTao`),sum(TongTien) as 'TongTien' 
                from hoadon
                Group by Year(`NgayTao`)";
            }         
            $conn = Connection::open_database();
            $stm = $conn->prepare($sql);
            if(!$stm->execute())
            {
                return null;
            }
            $result = $stm->get_result();
            $data = $result->fetch_all();
            return $data;
        }
    }
?>