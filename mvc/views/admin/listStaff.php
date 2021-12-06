<?php
    echo"
    <div class='col-md-$ratio mx-1 mt-2 col-sm-12 detail-list'>
        <div class='header-model'>
            <h4>List $class</h4>
        </div>
        <div class='body-model'>
            <div class='body-list'>
                <ul class='header-list'>
                    <li style='width:5%;'>Mã</li>
                    <li style='width:10%;'>Số Điện Thoại</li>
                    <li style='width:15%;'>Tên</li>
                    <li style='width:10%;'>Hình ảnh</li>
                    <li style='width:20%;'>Địa chỉ</li>
                    <li style='width:15%;'>Ngày Tạo</li>
                    <li style='width:15%;'>Ngày Sửa</li>
                    <li style='width:10%;'>
                	    <button name='btnThem' class='Them'>Thêm mới</button>
                    </li>
                </ul> ";
            foreach($data[$class] as $d)
            {
                echo"
                <ul class='danhsach-item'>
                    <li style='width:5%;'>$d->id</li>
                    <li style='width:10%;'>$d->sdt</li>
                    <li style='width:15%;'>$d->name</li>
                    <li style='width:10%;'>$d->image</li>	 
                    <li style='width:20%;'>$d->address</li>
                    <li style='width:15%;'>$d->created</li>	 
                    <li style='width:15%;'>$d->updated</li>
                    <li style='width:10%;'>
                        <button  onclick='view([`$d->id`,`$d->sdt`,`$d->name`,`$d->image`,`$d->address`],[`id`,`sdt`,`name`,`image`,`address`],`admin`,`edit`,`$class`)' class='Xem' name='btnSua$d->id' id='btnSua$d->id' data-id='$d->id'>Xem</button>
                        <button  onclick='message($d->id,`admin`,`delete`,`$class`,0)' class='Xoa' name='delete' id='btnXoa$d->id' data-id='$d->id'>Xoá</button>
                    </li>	                              
                </ul>
                ";
            }
            echo"
            </div>
        </div>
    </div>";
   
?>