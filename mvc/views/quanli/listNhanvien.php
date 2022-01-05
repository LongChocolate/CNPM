<?php
    echo"
    <div class=' mx-auto mt-2 detail-list w-75'>
        <div class='header-model'>
            <h4>List $class</h4>
        </div>
        <div class='body-model '>
            <div class='body-list'>
                <ul class='header-list'>
                    <li style='width:10%;'>Mã Nhân Viên</li>
                    <li style='width:15%;'>Số Điện Thoại</li>
                    <li style='width:20%;'>Họ Tên</li>
                    <li style='width:20%;'>Giới Tính</li>
                    <li style='width:15%;'>Loại</li>
                    <li style='width:20%;'>
                	    <button  data-toggle='modal' data-target='#createNhanvien'  class='Them'>Thêm mới</button>
                    </li>
                </ul> ";
            foreach($data[$class] as $d)
            {
                $gt = $d->GioiTinh == "0" ? "Nam" : "Nữ";
                echo"
                <ul class='danhsach-item'>
                    <li style='width:10%;'>$d->MaNV</li>
                    <li style='width:15%;'>$d->SDT</li>
                    <li style='width:20%;'>$d->HoTen</li> 
                    <li style='width:20%;'>$gt</li>
                    <li style='width:15%;'>$d->Loai</li>	
                    <li style='width:20%;'>
                        <button  onclick='view(`$d->MaNV`,`quanli`,`view`,`$class`,this)'   data-toggle='modal' data-target='#viewNhanvien' class='Xem' id='btnSua' >Xem</button>
                        <button  onclick='message(`$d->MaNV`,`quanli`,`delete`,`$class`,this)' data-toggle='modal' data-target='#question'  class='Xoa' name='delete' id='btnXoa' >Xoá</button>
                    </li>	                              
                </ul>
                ";
            }
            echo"
            </div>
        </div>
    </div>";
   
?>