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
$tongtien = 'đ';
echo"
<div class='container'>
    <div class='chiTietHoaDon'>
        <div class='row'>
            <div class='col-lg-8 mb-5'>
                <h3>ID hóa đơn</h3>
                <table class='table'>
                    <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Tên món</th>
                        <th scope='col'>Số lượng</th>
                        <th scope='col'>Đơn giá</th>
                        <th scope='col'>Thành tiền</th>
                    </tr>
                    </thead>
                    <tbody>";
                    foreach($data[$class] as $d)
                    {
                        $MaHD = $d[0];
                        $ten = $d[1];
                        $soLuong = $d[2];
                        $dongia = trans($d[3]);
                        $thanhtien = trans($d[4]);
                        $tongtien = trans($d[5]);
                        $t = $d[5];
                        $TrangThai = $d[7] == 'Đã thanh toán'? 'disabled' : '';
                        echo"
                        <tr>
                            <th scope='row'>$MaHD</th>
                            <td>$ten</td>
                            <td>$soLuong</td>
                            <td>$dongia</td>
                            <td>$thanhtien</td>
                        </tr>";
                    }
                    echo"
                    </tbody>
                </table>
                <div class='d-flex align-items-center mb-3'>
                    <span class='text-danger'>Tổng hóa đơn</span>
                    <h5>$tongtien</h6>
                </div>
                <div class='btn-thanhtoan'>
                    <a href='?controller=nhanvienbanhang&action=index&class=sanpham' class='btn btn-primary'>Đặt món</a>
                    <button $TrangThai onclick='themMon($MaHD)' class='btn btn-outline-primary'>Thêm món</button>
                </div>                
            </div>

            <div class='col-lg-4'>
                <h4 class='text-warning text-center'>Thanh toán</h4>
                    <!-- Nav tabs -->
                <ul class='nav nav-tabs'>
                    <li class='nav-item'>
                    <a class='nav-link active' data-toggle='tab' href='#cash'>Tiền mặt</a>
                    </li>
                    <li class='nav-item'>
                    <a class='nav-link' data-toggle='tab' href='#credit'>Thẻ</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class='tab-content'>
                    <div id='cash' class='container tab-pane active'><br>
                        <div class='form-group'>
                            <label for='moneyOfCustomer'>Số tiền khách đưa</label>
                            <input  oninput='moneyOfCustomer(this,$t)' $TrangThai type='number' class='form-control' id='moneyOfCustomer' placeholder='Nhập số tiền'>
                            </div>
                        <div class='form-group'>
                            <label for='discount'>Giảm giá</label>
                            <input $TrangThai type='number' class='form-control' id='discount' placeholder='Nhập % giảm'>
                        </div>
                        <div class='form-group'>
                            <label for='totalBill'>Tổng hóa đơn</label>
                            <span id='totalBillCTHD '>$tongtien</span>
                            </div>
                        <div class='form-group'>
                            <label for='exceedCash'>Trả lại cho khách</label>
                            <span class='exceedCash'>0đ</span>
                        </div>
                        <button onclick='editMon($MaHD)' $TrangThai type='button' class='btn btn-warning width-100pc'>Thanh toán</button>
                    </div>
                    <div id='credit' class='container tab-pane fade'><br>
                        <img class='width-100pc' src='asset/image/background/undraw_Credit_card_re_blml.png' alt='img credit card'>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
?>