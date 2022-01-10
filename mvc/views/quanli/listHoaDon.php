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
    <div class=' mx-auto mt-2 detail-list w-50'>
        <div class='header-model'>
            <h4>List Thống kê</h4>
            <select onchange='thongke(this)' class='btn'>
                <option value='Ngày'>Theo Ngày</option>
                <option value='Tháng'>Theo Tháng</option>          
                <option value='Năm'>Theo Năm</option>            
            </select>
        </div>
        <div class='body-model'>
            <div class='body-list'>
                <ul class='header-list text-center'>
                    <li style='width:50%;'>Thời gian</li>
                    <li style='width:50%;'>Tổng tiền</li> 
                </ul> ";
            foreach($data[$class] as $d)
            {
                $NgayBan = $d[0];
                $TongTien = trans($d[1]);
                echo"          
                <ul class='danhsach-item text-center'>
                    <li style='width:50%;'>$NgayBan</li>
                    <li style='width:50%;'>$TongTien</li>
                </ul>
                ";
            }
            echo"
            </div>
        </div>
    </div>";
?>