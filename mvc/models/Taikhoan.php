<?php
 require_once('Connection.php');
class Taikhoan{

    private $SDT;
    private $Password;
    private $Loai;
    private $check;
    private $token;
    
    public function __construct($SDT,$Password,$Loai,$check,$token)
    {
        $this->SDT = $SDT;
        $this->Password = $password;
        $this->Loai = $Loai;
        $this->check = $check;
        $this->token = $token;
    }


    public function setSDT($SDT)
    {
        $this->SDT = $SDT;
    }
    public function setPassword($Password)
    {
        $this->Password = $Password;
    }
    public function setLoai($Loai)
    {
        $this->Loai = $Loai;
    }
    public function setCheck($check)
    {
        $this->check = $check;
    }

    public static function register($SDT,$Password,$Loai)
    {
        
        $conn = Connection::open_database();
        $sql = "insert into taikhoan(`SDT`,`Password`,`Loai`,`actived`,`token`) values(?,?,?,?,?)";
        $hash = password_hash($Password,PASSWORD_DEFAULT);
		$rand = random_int(0, 1000);
		$token= md5($SDT .'+'.$rand);
        $check = 0;
        $stm = $conn->prepare($sql);
		$stm->bind_param('sssis',$SDT,$hash,$Loai,$check,$token);
		if(!$stm->execute())
		{
			return array('code'=> 1,'error' =>"Có lỗi, Vui lòng thử lại sau!");
		}
        return array('code'=> 0,'error' =>"Tạo tài khoản thành công");
        
    }

    public static function edit($SDT,$Loai)
    {
        $sql = "update taikhoan
                set Loai= ?
                where SDT = ?";
        $conn = Connection::open_database();
        $stm = $conn->prepare($sql);
        $stm->bind_param('ss',$Loai,$SDT);
        if(!$stm->execute())
        {
            return array('code'=> 1,'error' =>"Có lỗi, vui lòng thử lại sau!");
        }
        return array('code'=> 0,'error' =>"Cập nhật thành công");
    }

    public static function login($SDT,$Password)
    {
        $conn = Connection::open_database();
        $sql = "select MaNV,nhanvien.SDT,Password,Loai,actived,token,HoTen 
        from taikhoan,nhanvien 
        where nhanvien.SDT = taikhoan.SDT and taikhoan.SDT = ? ";
        $stm = $conn->prepare($sql);
		$stm->bind_param('s',$SDT);
		if(!$stm->execute())
		{
			return array('code'=> 1,'error' =>"Có lỗi, Vui lòng thử lại");
		}
        $result = $stm->get_result();
		if ($result->num_rows == 0)
		{
			return array('code'=> 2,'error' =>"Tài khoản không tồn tại");
		}
		$data = $result->fetch_assoc();
        $hashed_password = $data['Password'];
        if(!password_verify($Password,$hashed_password))
        {
            return array('code'=> 3,'error' =>"Tài khoản hoặc mật khẩu sai");
        }
        return array('code'=> 0,'error' =>$data);
    }

    public static function getAccount($Loai)
    {
        $conn = Connection::open_database();
        $sql = "select * from users where Loai = ?";
        $stm = $conn->prepare($sql);
		$stm->bind_param('s',$Loai);
		if(!$stm->execute())
		{
			return array('code'=> 1,'error' =>"Có lỗi, Vui lòng thử lại");
		}
        $result = $stm->get_result();
		if ($result->num_rows == 0)
		{
			return array('code'=> 2,'error' =>"Tài khoản không tồn tại");
		}
		$data = $result->fetch_assoc();
        return $data;
    }

    public static function change_password($id,$password)
    {
        $sql = "update users
                set password = ?
                where Loai = ?";
        $conn = Connection::open_database();
        $stm = $conn->prepare($sql);
        $stm->bind_param('');
        if(!$stm->execute('ss',$password,$id))
        {
            return array('code'=> 1,'error' =>"Có lỗi, Vui lòng thử lại sau!");
        }
        return array('code'=> 0,'error' =>"Thay đổi mật khẩu thành công");
    }
}
?>