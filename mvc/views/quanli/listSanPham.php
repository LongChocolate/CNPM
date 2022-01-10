<?php
    echo"
    <div class=' mx-auto mt-2 detail-list w-75'>
        <div class='header-model'>
            <h4>List $class</h4>
        </div>
        <div class='body-model'>
            <div class='body-list'>
                <ul class='header-list text-center'>
                    <li style='width:10%;'>Mã Sản Phẩm</li>
                    <li style='width:15%;'>Tên</li> 
                    <li style='width:20%;'>Loại Nguyên liệu</li>
                    <li style='width:20%;'>Giá</li>
                    <li style='width:15%;'>Loại</li>
                    <li style='width:20%;'>
                    <button name='btnThem' data-toggle='modal' data-target='#createSanpham' class='Them btn'>Thêm mới</button>
                    </li>
                </ul> ";
            foreach($data[$class] as $d)
            {
                echo"
                <ul class='danhsach-item text-center'>
                    <li style='width:10%;'>$d->MaSP</li>
                    <li style='width:15%;'>$d->Ten</li>
                    <li style='width:20%;'>$d->MaNL</li>
                    <li style='width:20%;'>$d->Gia</li>
                    <li style='width:15%;'>$d->category_id</li>
                    <li style='width:20%;'>
                    <button  onclick='view(`$d->MaSP`,`quanli`,`view`,`$class`,this)'   data-toggle='modal' data-target='#viewSanpham' class='Xem btn' >Xem</button>
                    <button  onclick='message(`$d->MaSP`,`quanli`,`delete`,`$class`,this)' data-toggle='modal' data-target='#question'   class='Xoa btn' >Xoá</button>
                    </li>	                              
                </ul>
                ";
            }
            echo"
            </div>
        </div>
    </div>";