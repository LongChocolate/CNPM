<?php
    echo"
    <div class=' mx-auto mt-2 detail-list w-75'>
        <div class='header-model'>
            <h4>List $class</h4>
        </div>
        <div class='body-model'>
            <div class='body-list'>
                <ul class='header-list'>
                    <li style='width:10%;'>Mã Sản Phẩm</li>
                    <li style='width:15%;'>Tên</li> 
                    <li style='width:20%;'>Số lượng</li>
                    <li style='width:20%;'>Giá</li>
                    <li style='width:15%;'>Loại</li>
                    <li style='width:20%;'>
                    <button name='btnThem' data-toggle='modal' data-target='#createSanpham' class='Them'>Thêm mới</button>
                    </li>
                </ul> ";
            foreach($data[$class] as $d)
            {
                echo"
                <ul class='danhsach-item'>
                    <li style='width:10%;'>$d->MaSP</li>
                    <li style='width:15%;'>$d->Ten</li>
                    <li style='width:20%;'>$d->SoLuong</li>
                    <li style='width:20%;'>$d->Gia</li>
                    <li style='width:15%;'>$d->category_id</li>
                    <li style='width:20%;'>
                    <button  onclick='view(`$d->MaSP`,`quanli`,`view`,`$class`,this)'   data-toggle='modal' data-target='#viewSanpham' class='Xem' id='btnSua' >Xem</button>
                    <button  onclick='message(`$d->MaSP`,`quanli`,`delete`,`$class`,this)' data-toggle='modal' data-target='#question'   class='Xoa'  id='btnXoa' >Xoá</button>
                    </li>	                              
                </ul>
                ";
            }
            echo"
            </div>
        </div>
    </div>";