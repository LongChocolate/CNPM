<?php
class User{

    private $sdt;
    private $password;
    private $loainguoidung_id;
    private $check;
    private Connection $conn;
    
    public function __construct($sdt,$password)
    {
        $this->sdt = $sdt;
        $this->password = $password;
        $this->loainguoidung_id = 1;
        $this->check = 1;
    }


    public function setSDT($sdt)
    {
        $this->sdt = $sdt;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getSDT()
    {
        return $this->sdt;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getLoainguoidung_id()
    {
        return $this->loainguoidung_id;
    }
    public function getCheck()
    {
        return $this->check;
    }
    public function setAccount($account)
    {
        $this->conn = new Connection();
        $this->conn->open_database();
        $sql = "insert into ".strtolower(get_class($account))."(sdt,password,loainguoidung_id,check) values(?,?,?,?)";
        $stm = $this->conn->prepare($sql);
		$stm->bind_param('ssii',$account->getSDT(),$account->getPassword(),$account->getLoainguoidung_id(),$account->getCheck());
		if(!$stm->execute())
		{
			return array('code'=> 1,'error' =>"Error, Try again later!");
		}
        return array('code'=> 0,'error' =>"Create Account Successfully");
        
    }
    public function getAccount($account)
    {
        $this->conn = new Connection();
        $this->conn->open_database();
        $sql = "select * from ".strtolower(get_class($account))." where sdt = ?";
        $stm = $this->conn->prepare($sql);
		$stm->bind_param('s',$account->getSDT());
		if(!$stm->execute())
		{
			return array('code'=> 1,'error' =>"Error, Try again later!");
		}
        $result = $stm->get_result();
		if ($result->num_rows == 0)
		{
			return array('code'=> 2,'error' =>"Account didnt exist!");
		}
		$data = $result->fetch_assoc();
        return array('code'=> 0,'error' =>$data);
    }
}
?>