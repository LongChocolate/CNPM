<?php
class User{

    private $sdt;
    private $name;
    private Connection $conn;

    public function __construct($sdt,$name)
    {
        $this->sdt = $sdt;
        $this->name = $name;
    }
    public function setEmail($sdt)
    {
        $this->sdt = $sdt;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->sdt;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getAccount($sdt)
    {
        $this->conn = new Connection();
        $this->conn->open_database();
        $sql = "select id,sdt,,name from user where sdt = ?";

        $stm = $this->conn->prepare($sql);
		$stm->bind_param('s',$sdt);
		if(!$stm->execute())
		{
			return array('code'=> 1,'error' =>"Error, Try again later!");
		}
        $result = $stm->get_result();
		if ($result->num_rows == 0)
		{
			return array('code'=> 2,'error' =>"Email didnt exist!");
		}
		$data = $result->fetch_assoc();
        return array('code'=> 0,'error' =>$data);
    }

}

?>