<?php
    require_once('Connection.php');
    
    class Sanpham{

        public $MaSP;
        public $Ten;
        public $Anh;
        public $Gia;
        public $SoLuong;
        public $category_id;
        public $created;
        public $updated;
        public function __construct($MaSP,$Ten,$Anh,$SoLuong,$Gia,$category_id,$created,$updated)
        {
            $this->MaSP = $MaSP;
            $this->Ten = $Ten;
            $this->Anh = $Anh;
            $this->SoLuong = $SoLuong;
            $this->Gia = $Gia;
            $this->category_id = $category_id;
            $this->created = $created;
            $this->updated = $updated;
        }
        

        public static function getOne($MaSP)
        {
            $sql = "select * from sanpham where MaSP = ?";
            $conn = Connection::open_database();
            $stm = $conn->prepare($sql);
            $stm->bind_param('i',$MaSP);
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
            $sql = "select *
            from sanpham
            ORDER BY sanpham.MaSP DESC
            limit 1";
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
            $sql = "select * from sanpham";
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
                $list[] = new Sanpham($s[0],$s[1],$s[2],$s[3],$s[4],$s[5],$s[6],$s[7]);
            }
            return $list;

        }
        public static function delete($id)
        {
            $sql = "delete from sanpham where MaSP = ?";
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
            $sql = "update sanpham 
                    set Ten = ?,Anh = ? ,SoLuong = ?, Gia = ?,category_id = ?
                    where MaSP = ?";
            $conn = Connection::open_database();
            $stm = $conn->prepare($sql);
            $stm->bind_param('ssiiii',$object->Ten,$object->Anh,$object->SoLuong,$object->Gia,$object->category_id,$object->MaSP);
            if(!$stm->execute())
            {
                return array('code'=> 1,'error' =>"Có lỗi, vui lòng thử lại sau!");
            }
            return array('code'=> 0,'error' =>"Cập nhật thành công");
        }
        public static function create($object)
        {
            $sql = "insert into sanpham(`Ten`,`Anh`,`SoLuong`,`Gia`,`category_id`) values(?,?,?,?,?)";
            $conn = Connection::open_database();
            $stm = $conn->prepare($sql);
            $stm->bind_param('ssiii',$object->Ten,$object->Anh,$object->SoLuong,$object->Gia,$object->category_id);
            if(!$stm->execute())
            {
                return array('code'=> 1,'error' =>"Có lỗi, vui lòng thử lại sau!");
            }
            $data = Sanpham::getLast();
            return array('code'=> 0,'error' =>"Thêm Thành công",'data' =>$data);
        }

    }
?>