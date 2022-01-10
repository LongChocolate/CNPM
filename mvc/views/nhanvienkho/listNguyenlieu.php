<?php
    echo"
    <div class=' mx-auto mt-2 detail-list w-50'>
        <div class='header-model'>
            <h4>List $class</h4>
        </div>
        <div class='body-model'>
            <div class='body-list'>
                <ul class='header-list text-center'>
                    <li style='width:25%;'>Mã Nguyên Liệu</li>
                    <li style='width:40%;'>Tên Nguyên liệu</li> 
                    <li style='width:35%;'>
                        <button name='btnThem' data-toggle='modal' data-target='#createNguyenlieu' class='Them btn'>Thêm mới</button>
                    </li>
                </ul> ";
            foreach($data[$class] as $d)
            {
                echo"
                <ul class='danhsach-item text-center'>
                    <li style='width:25%;'>$d->MaNL</li>
                    <li style='width:40%;'>$d->Ten</li>
                    <li style='width:35%;'>
                        <button  onclick='view(`$d->MaNL`,`nhanvienkho`,`view`,`$class`,this)'   data-toggle='modal' data-target='#viewNguyenlieu' class='Xem btn'  >Xem</button>
                        <button  onclick='message(`$d->MaNL`,`nhanvienkho`,`delete`,`$class`,this)' data-toggle='modal' data-target='#question'   class='Xoa btn'   >Xoá</button>
                    </li>	                              
                </ul>
                ";
            }
            echo"
            </div>
        </div>
    </div>";
?>