<?php
    require_once('Connection.php');
    
    class Staff{


        public $id;
        public $sdt;
        public $name;
        public $image;
        public $address;
        public $created;
        public $updated;
 
        public function __construct($id,$sdt,$image,$name,$address,$created,$updated)
        {
            $this->id = $id;
            $this->sdt = $sdt;
            $this->name = $name;
            $this->image = $image;
            $this->address = $address;
            $this->created = $created;
            $this->updated = $updated;
        }
        public function setId($id)
        {
            $this->id = $id;
        }
        public function setSdt($sdt)
        {
            $this->sdt = $sdt;
        }
        public function setName($name)
        {
            $this->name = $name;
        }
        public function setImage($image)
        {
            $this->image = $image;
        }
        public function setAdress($address)
        {
            $this->address = $address;
        }
        
        public static function getAll()
        {
            $sql = "select * from staff";
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
                $list[] = new Staff($s[0],$s[1],$s[2],$s[3],$s[4],$s[5],$s[6]);
            }
            return $list;

        }
        public static function delete($id)
        {
            $sql = "delete from Staff where id = ?";
            $conn = Connection::open_database();
            $stm = $conn->prepare($sql);
            $stm->bind_param('i',$id);
            if(!$stm->execute())
            {
                return array('code'=> 1,'error' =>"Error, Try again later!");
            }
            return array('code'=> 0,'error' =>"Deleted Successfully");
        }

        public static function edit($object)
        {
            $sql = "update Staff 
                    set sdt = ? and name = ? and image = ? and address = ?
                    where id = ?";
            $conn = Connection::open_database();
            $stm = $conn->prepare($sql);
            $stm->bind_param('ssssi',$object->sdt,$object->name,$object->image,$object->address,$object->id);
            if(!$stm->execute())
            {
                return array('code'=> 1,'error' =>"Error, Try again later!");
            }
            return array('code'=> 0,'error' =>"Update Successfully");
        }
    }
?>