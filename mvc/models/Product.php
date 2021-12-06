<?php
    require_once('Connection.php');
    
    class Product{

        public $id;
        public $name;
        public $image;
        public $description;
        public $cost;
        public $category_id;
        public $check;
        public $created;
        public $updated;
        public function __construct($id,$name,$image,$description,$cost,$category_id,$check,$created,$updated)
        {
            $this->id = $id;
            $this->name = $name;
            $this->image = $image;
            $this->description = $description;
            $this->cost = $cost;
            $this->category_id = $category_id;
            $this->check = $check;
            $this->created = $created;
            $this->updated = $updated;
        }
        
        public static function getAll()
        {
            $sql = "select * from product";
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
                $list[] = new Product($s[0],$s[1],$s[2],$s[3],$s[4],$s[5],$s[6],$s[7],$s[8]);
            }
            return $list;

        }
        public static function delete($id)
        {
            $sql = "delete from product where id = ?";
            $conn = Connection::open_database();
            $stm = $conn->prepare($sql);
            $stm->bind_param('i',$id);
            if(!$stm->execute())
            {
                return array('code'=> 1,'error' =>"Error, Try again later!");
            }
            return array('code'=> 0,'error' =>"Deleted Successfully");
        }

    }
?>