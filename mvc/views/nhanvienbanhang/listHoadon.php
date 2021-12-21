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
    echo"
    <div class='container'>
        <div class='hoaDon'>
            <h1>Hóa đơn</h1>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Tên Nhân viên</th>
                        <th scope='col'>Ngày tạo</th>
                        <th scope='col'>Tổng Tiền</th>
                        <th scope='col'>Trạng Thái</th>
                        <th scope='col'></th>
                    </tr>
                </thead>
                <tbody>";
                foreach($data[$class] as $d)
                {
                    $g = trans($d->TongTien);
                    echo"
                    <tr>
                        <th scope='row'>$d->MaHD</th>
                        <td>$d->TenNV</td>
                        <td>$d->NgayTao</td>
                        <td>$g</td>
                        <td>$d->TrangThai</td>
                        <td>
                            <a href='index.php?controller=nhanvienbanhang&action=index&class=chitiethoadon&MaHD=$d->MaHD' class='btn btn-primary'>Xem</a>
                            <button onclick='message($d->MaHD,`nhanvienbanhang`,`delete`,`$class`,this)' class='btn btn-outline-danger'  data-toggle='modal' data-target='#question'>Xóa</button>
                        </td>
                    </tr>";
                }
                echo"
                </tbody>
            </table>
        </div>
    </div>";
?>
