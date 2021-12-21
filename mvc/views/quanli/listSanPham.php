<?php
    echo"
    <div class='col-md-$ratio mx-1 mt-2 col-sm-12 detail-list'>
        <div class='header-model'>
            <h4>List $class</h4>
        </div>
        <div class='body-model'>
            <div class='body-list'>
                <ul class='header-list'>
                    <li style='width:10%;'>Mã Sản Phẩm</li>
                    <li style='width:15%;'>Tên</li> 
                    <li style='width:10%;'>Số lượng</li>
                    <li style='width:15%;'>Giá</li>
                    <li style='width:10%;'>Loại</li>
                    <li style='width:15%;'>Ngày Tạo</li>
                    <li style='width:15%;'>Ngày Sửa</li>
                    <li style='width:10%;'>
                    <button name='btnThem' data-toggle='modal' data-target='#Sanpham' onclick='view(0,`admin`,`create`,`$class`)' class='Them'>Thêm mới</button>
                    </li>
                </ul> ";
            foreach($data[$class] as $d)
            {
                echo"
                <ul class='danhsach-item'>
                    <li style='width:10%;'>$d->MaSP</li>
                    <li style='width:15%;'>$d->Ten</li>
                    <li style='width:10%;'>$d->SoLuong</li>
                    <li style='width:15%;'>$d->Gia</li>
                    <li style='width:10%;'>$d->category_id</li>
                    <li style='width:15%;'>$d->created</li>	 
                    <li style='width:15%;'>$d->updated</li>
                    <li style='width:10%;'>
                    <button  onclick='view($d->MaSP,`admin`,`edit`,`$class`)'   data-toggle='modal' data-target='#Sanpham' class='Xem' id='btnSua' >Xem</button>
                    <button  onclick='message($d->MaSP,`admin`,`delete`,`$class`,`question`)'   class='Xoa'  id='btnXoa' >Xoá</button>
                    </li>	                              
                </ul>
                ";
            }
            echo"
            </div>
        </div>
    </div>";