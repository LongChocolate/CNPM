<?php 
    function trans($Gia)
    {
        $cost = $Gia;
        $g = 'đ';
        $count = 0;
        while($cost != 0)
        {
            $g = ($cost % 10) . $g;
            $cost = floor($cost/10);
            $count +=1;
            if($count == 3 && $cost != 0)
            {
                $g = '.' . $g;
                $count =0;
            }
        }
        return $g;
    }
    $tong_tien = 0;
    $tong_soluong = 0;
    echo"
    <div class='datMon'>
        <div class='row'>
            <div class='col-lg-8'>
                <div class='row'>  
                ";
                foreach($data[$class] as $d)
                {
                    $obj = json_encode($d);
                    $g = trans($d->Gia);
                    echo"
                    <div class='col-sm-6 col-md-4'>
                        <div id='$d->MaSP' class='monAn__item'>
                            <img class='monAn__img' src='$d->Anh' alt='img'>
                            <div class='monAn__content'>
                                <ul class='info'>
                                    <li>
                                        <div class='left'>
                                            <h6>$d->Ten</h6>
                                        </div>
                                        <div class='right'>
                                            <h6>$g</h6>
                                        </div>
                                    </li>
                                </ul>
                                <div class='chonSoLuong'>
                                    <button onclick='prevSize($d->MaSP,$d->SoLuong)' class='decrease'>-</button>
                                    <span class='size'>0</span>
                                    <button onclick='nextSize($d->MaSP,$d->SoLuong)' class='increase'>+</button>
                                </div>
                                <div class='text-danger'></div>
                            </div>
                            <div class='btn'>
                                <button onclick='datMon($obj)' class='btn btn-danger'>Đặt</button>
                            </div>
                        </div>
                    </div>";
                }
            echo"
                </div>
            </div>
        <div class='col-lg-4'>
            <div class='hoaDon'>
                <h4 class='text-primary text-center'>Hóa đơn</h4>
                <hr>
                <ul class='ds-hoaDon'>";
                if(isset($_SESSION['cart']))
                {
                    foreach(($_SESSION['cart']) as $obj)
                    {
                        
                        $soluong = $obj->soDat;
                        $ten = $obj->Ten;
                        $gia = trans($obj->Gia);
                        $tong_tien = $tong_tien + ($obj->Gia * $obj->soDat);
                        $tong_soluong = $tong_soluong + $obj->soDat;
                        echo"
                        <li>
                            <div class='left'>
                                <span class='soLuong'>$soluong</span>
                                <span class='tenMon'>$ten</span>
                            </div>
                            <div class='right'>
                                <span class='giaTien'>$gia</span>
                            </div>
                        </li>
                        ";
                    }
                }
                $total = trans($tong_tien);
                echo"
                </ul>
                <hr>
                <div class='tong'>
                    <div class='tong__soLuong'>
                        <h6>Số lượng</h6>
                        <span>$tong_soluong</span>
                    </div>
                    <div class='tong__tien text-danger'>
                        <h6>Tổng tiền</h6>
                        <span>$total</span>
                    </div>
                </div>
                <div>
                    <a href='index.php?controller=nhanvienbanhang&action=create&class=Hoadon&type=0' class='btn btn-primary mb-3 width-100pc'>Lưu</a>
                    <div class='btn-thanhtoan'>
                        <button onclick='payByCash()' class='btn btn-warning' data-toggle='modal' data-target='#payByCash'>Tiền mặt</button>
                        <button class='btn btn-outline-warning' data-toggle='modal' data-target='#payByCredit'>Thẻ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    ";
?>
