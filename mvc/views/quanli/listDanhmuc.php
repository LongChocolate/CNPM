<?php
    echo"
    <div class=' mx-auto mt-2 detail-list w-50'>
        <div class='header-model'>
            <h4>List $class</h4>
        </div>
        <div class='body-model'>
            <div class='body-list'>
                <ul class='header-list'>
                    <li style='width:25%;'>Mã Danh Mục</li>
                    <li style='width:40%;'>Tên danh mục</li> 
                    <li style='width:35%;'>
                    <button name='btnThem' data-toggle='modal' data-target='#createNguyenlieu' class='Them btn'>Thêm mới</button>
                    </li>
                </ul> ";
            foreach($data[$class] as $d)
            {
                echo"
                <ul class='danhsach-item'>
                    <li style='width:25%;'>$d->id</li>
                    <li style='width:40%;'>$d->TenDM</li>
                    <li style='width:35 %;'>
                    <button  onclick='view(`$d->id`,`quanli`,`view`,`$class`,this)'   data-toggle='modal' data-target='#viewNguyenlieu' class='Xem btn'  >Xem</button>
                    <button  onclick='message(`$d->id`,`quanli`,`delete`,`$class`,this)' data-toggle='modal' data-target='#question'   class='Xoa btn'   >Xoá</button>
                    </li>	                              
                </ul>
                ";
            }
            echo"
            </div>
        </div>
    </div>";
?>