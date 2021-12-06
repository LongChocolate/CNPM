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
                    <li style='width:10%;'>Tên</li>
                    <li style='width:13%;'>Hình ảnh</li>
                    <li style='width:10%;'>Miêu tả</li>
                    <li style='width:10%;'>Giá</li>
                    <li style='width:10%;'>Loại</li>
                    <li style='width:8%;'>Trạng thái</li>
                    <li style='width:12%;'>Ngày Tạo</li>
                    <li style='width:12%;'>Ngày Sửa</li>
                    <li style='width:10%;'>
                	    <button name='btnThem' class='Them'>Thêm mới</button>
                    </li>
                </ul> ";
            foreach($data[$class] as $d)
            {
                echo"
                <ul class='danhsach-item'>
                    <li style='width:5%;'>$d->id</li>
                    <li style='width:10%;'>$d->name</li>
                    <li style='width:13%;'>$d->image</li>
                    <li style='width:10%;'>$d->description</li>	 
                    <li style='width:10%;'>$d->cost</li>
                    <li style='width:10%;'>$d->category_id</li>
                    <li style='width:8%;'>$d->check</li>
                    <li style='width:12%;'>$d->created</li>	 
                    <li style='width:12%;'>$d->updated</li>
                    <li style='width:10%;'>
                        <button  class='Xem' name='btnSua$d->id' id='btnSua$d->id' data-id='$d->id'>Xem</button>
                        <button  onclick='message($d->id,`admin`,`delete`,`$class`,0)' class='Xoa' name='delete' id='btnXoa$d->id' data-id='$d->id'>Xoá</button>
                    </li>	                              
                </ul>
                ";
            }
            echo"
            </div>
        </div>
    </div>";