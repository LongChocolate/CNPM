<?php
    require_once('models/Nhanvien.php');
    require_once('models/Sanpham.php');
    require_once('models/Taikhoan.php');
    
    
    if(isset($_GET['state']))
    {
        echo json_encode(getAttri($_GET['state']));
    }
    if(isset($_GET['cart']))
    {
        session_start();
        echo json_encode(saveCart(json_decode($_GET['cart'])));
    }
    if(isset($_GET['getCart']))
    {
        session_start();
        echo json_encode(getCart());
    }
    function getAttri($class)
    {
        $listA = array(
            'Nhanvien'=> array('MaNV','SDT','HoTen','Anh','GioiTinh','CMND','Loai'),
            'Sanpham'=>array('MaSP','Ten','Anh','SoLuong','Gia','category_id')
        );
        return $listA[$class];
    }
    function saveCart($obj)
    {
        
        if(isset($_SESSION['cart']))
        {
            
            if(isset($_SESSION['cart'][$obj->MaSP]))
            {
                $_SESSION['cart'][$obj->MaSP]->soDat =  $_SESSION['cart'][$obj->MaSP]->soDat + $obj->soDat;
            }
            else
            {
                $_SESSION['cart'][$obj->MaSP] = $obj;
            }
        }
        else
        {
            $_SESSION['cart'] = array($obj->MaSP => $obj);
        }
        
        return getCart();
        
    }
    function getCart()
    {
        $tong_soluong = 0;
        $tong_tien = 0;
        foreach(($_SESSION['cart']) as $obj)
        {
            $tong_tien = $tong_tien + ($obj->Gia * $obj->soDat);
            $tong_soluong = $tong_soluong + $obj->soDat;
        }
        return array('cart' => $_SESSION['cart'],'tongTien' => $tong_tien,'tongSoLuong' => $tong_soluong);
    }
    function unsetCart()
    {
        unset($_SESSION['cart']);
    }


    function redirect($url)
    {
        header("Location: $url");
    }
    function convert_vi_to_en($str) {
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", "a", $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", "e", $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", "i", $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", "o", $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", "u", $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", "y", $str);
        $str = preg_replace("/(đ)/", "d", $str);
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", "A", $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", "E", $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", "I", $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", "O", $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", "U", $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", "Y", $str);
        $str = preg_replace("/(Đ)/", "D", $str);
        $str = preg_replace("/( )/", "", $str);
        return $str;
    }
?>