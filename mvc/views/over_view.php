<?php
    function get_linkOverView()
    {
        echo
        "
        <link rel='stylesheet' href='asset/css/header.css'>
        <link rel='stylesheet' href='asset/css/list.css'>
        <link rel='stylesheet' href='asset/css/chart.css'>
        ";
    }

    function get_overView()
    {
    echo"
        <div class='container-fluid tm-container-content tm-mt-60'>
        <div class='row mb-4'>
            <h2 class='col-6 tm-text-primary'>
                Tổng Quan
            </h2>
        </div>
        <div class='row tm-gallery'><h3> Danh sách thu gọn</h3>
            <div class='row'> 
                <div class='col-md-6 mx-1 mt-2 col-sm-12 detail-list'>
                    <div class='header-model'>
                        <h4>Danh sách sản phẩm</h4>
                        <form class='search' name='frmSearch' id='frmSearch' metdod='post'>
                            <input type='search' class='txtSearch' name='txtSearch' placeholder='Nhập tên món cần tìm' style='width: 250px;' />
                        </form>
                    </div>
                    <div class='body-model'>
                        <div class='body-list'>
                            <ul class='header-list'>
                                <li style='width:70px;'>Mã</li>
                                <li style='width:200px;'>Tên món</li>
                                <li style='width:150px;'>Danh Mục</li>
                                <li style='width:180px;'>Ngày tạo</li>
                            </ul>
                            <ul class='danhsach-item'>
                                <li style='width:70px;'>2</li>
                                <li style='width:200px;'>Coffee</li>
                                <li style='width:150px;'>Nước uống</li>
                                <li style='width:180px;'>11-10-2021</li>	                            
                            </ul>
                            <ul class='danhsach-item'>
                                <li style='width:70px;'>3</li>
                                <li style='width:200px;'>Bạc Sỉu</li>
                                <li style='width:150px;'>Nước uống</li>
                                <li style='width:180px;'>11-10-2021</li>	                            
                            </ul>
                            <ul class='danhsach-item'>
                                <li style='width:70px;'>4</li>
                                <li style='width:200px;'>Cà phê sữa</li>
                                <li style='width:150px;'>Nước uống</li>
                                <li style='width:180px;'>11-10-2021</li>	                            
                            </ul>
                            <ul class='danhsach-item'>
                                <li style='width:70px;'>5</li>
                                <li style='width:200px;'>Capuchino</li>
                                <li style='width:150px;'>Nước uống</li>
                                <li style='width:180px;'>11-10-2021</li>	                            
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='col-md-6 mx-1 mt-2 col-sm-12 detail-list'>
                    <div class='header-model'>
                        <h4>Danh sách món bán chạy</h4>
                        <form class='search' name='frmSearch' id='frmSearch' metdod='post'>
                            <input type='search' class='txtSearch' name='txtSearch' placeholder='Nhập tên món bán chạy cần tìm' style='width: 250px;' />
                        </form>
                    </div>
                    <div class='body-model'>
                        <div class='body-list'>
                            <ul class='header-list'>
                                <li style='width:70px;'>Mã </li>
                                <li style='width:200px;'>Tên Món</li>
                                <li style='width:150px;'>Số lượng</li>
                                <li style='width:180px;'>Ngày tạo</li>
                            </ul>
                        
                            <ul class='danhsach-item'>
                                <li style='width:70px;'>1</li>
                                <li style='width:200px;'>Coffee</li>
                                <li style='width:150px;'>41</li>
                                <li style='width:180px;'>11-10-2021</li>	                            
                            </ul>
                            <ul class='danhsach-item'>
                                <li style='width:70px;'>2</li>
                                <li style='width:200px;'>Cam Xã cho bé ú</li>
                                <li style='width:150px;'>26</li>
                                <li style='width:180px;'>11-10-2021</li>	                            
                            </ul>
                            <ul class='danhsach-item'>
                                <li style='width:70px;'>3</li>
                                <li style='width:200px;'>Capuchino</li>
                                <li style='width:150px;'>20</li>
                                <li style='width:180px;'>11-10-2021</li>	                            
                            </ul>
                            <ul class='danhsach-item'>
                                <li style='width:70px;'>4</li>
                                <li style='width:200px;'>Chưa biết</li>
                                <li style='width:150px;'>13</li>
                                <li style='width:180px;'>11-10-2021</li>	                            
                            </ul>
                        </div>
                    </div>
                </div>    
                <div class='col-md-6 mx-1 mt-2 col-sm-12 detail-list'>
                    <div class='header-model'>
                        <h4>Danh sách món bán chạy</h4>
                        <form class='search' name='frmSearch' id='frmSearch' metdod='post'>
                            <input type='search' class='txtSearch' name='txtSearch' placeholder='Nhập tên món bán chạy cần tìm' style='width: 250px;' />
                        </form>
                    </div>
                    <div class='body-model'>
                        <div class='body-list'>
                            <ul class='header-list'>
                                <li style='width:70px;'>Mã </li>
                                <li style='width:200px;'>Tên Món</li>
                                <li style='width:150px;'>Số lượng</li>
                                <li style='width:180px;'>Ngày tạo</li>
                            </ul>
                        
                            <ul class='danhsach-item'>
                                <li style='width:70px;'>1</li>
                                <li style='width:200px;'>Coffee</li>
                                <li style='width:150px;'>41</li>
                                <li style='width:180px;'>11-10-2021</li>	                            
                            </ul>
                            <ul class='danhsach-item'>
                                <li style='width:70px;'>2</li>
                                <li style='width:200px;'>Cam Xã cho bé ú</li>
                                <li style='width:150px;'>26</li>
                                <li style='width:180px;'>11-10-2021</li>	                            
                            </ul>
                            <ul class='danhsach-item'>
                                <li style='width:70px;'>3</li>
                                <li style='width:200px;'>Capuchino</li>
                                <li style='width:150px;'>20</li>
                                <li style='width:180px;'>11-10-2021</li>	                            
                            </ul>
                            <ul class='danhsach-item'>
                                <li style='width:70px;'>4</li>
                                <li style='width:200px;'>Chưa biết</li>
                                <li style='width:150px;'>13</li>
                                <li style='width:180px;'>11-10-2021</li>	                            
                            </ul>
                        </div>
                    </div>
                </div>    
                <div class='col-md-6 mx-1 mt-2 col-sm-12 detail-list'>
                    <div class='header-model'>
                        <h4>Danh sách món bán chạy</h4>
                        <form class='search' name='frmSearch' id='frmSearch' metdod='post'>
                            <input type='search' class='txtSearch' name='txtSearch' placeholder='Nhập tên món bán chạy cần tìm' style='width: 250px;' />
                        </form>
                    </div>
                    <div class='body-model'>
                        <div class='body-list'>
                            <ul class='header-list'>
                                <li style='width:70px;'>Mã </li>
                                <li style='width:200px;'>Tên Món</li>
                                <li style='width:150px;'>Số lượng</li>
                                <li style='width:180px;'>Ngày tạo</li>
                            </ul>
                        
                            <ul class='danhsach-item'>
                                <li style='width:70px;'>1</li>
                                <li style='width:200px;'>Coffee</li>
                                <li style='width:150px;'>41</li>
                                <li style='width:180px;'>11-10-2021</li>	                            
                            </ul>
                            <ul class='danhsach-item'>
                                <li style='width:70px;'>2</li>
                                <li style='width:200px;'>Cam Xã cho bé ú</li>
                                <li style='width:150px;'>26</li>
                                <li style='width:180px;'>11-10-2021</li>	                            
                            </ul>
                            <ul class='danhsach-item'>
                                <li style='width:70px;'>3</li>
                                <li style='width:200px;'>Capuchino</li>
                                <li style='width:150px;'>20</li>
                                <li style='width:180px;'>11-10-2021</li>	                            
                            </ul>
                            <ul class='danhsach-item'>
                                <li style='width:70px;'>4</li>
                                <li style='width:200px;'>Chưa biết</li>
                                <li style='width:150px;'>13</li>
                                <li style='width:180px;'>11-10-2021</li>	                            
                            </ul>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    ";
    }


    function get_listStaff()
    {
        echo
        "
        <div class='container-fluid tm-container-content tm-mt-60'>
            <div class='row mb-4'>
                <h2 class='col-6 tm-text-primary'>
                    Tổng Quan
                </h2>
            </div>
            <div class='row tm-gallery'>
                <div class='col-md-12 mx-1 mt-2 col-sm-12 detail-list'>
                    <div class='header-model'>
                        <h4>Danh sách sản phẩm</h4>
                        <form class='search' name='frmSearch' id='frmSearch' metdod='post'>
                            <input type='search' class='txtSearch' name='txtSearch' placeholder='Nhập tên món cần tìm' style='width: 250px;' />
                        </form>
                    </div>
                    <div class='body-model'>
                        <div class='body-list'>
                            <ul class='header-list'>
                                <li style='width:70px;'>ID</li>
                                <li style='width:200px;'>Phone Number</li>
                                <li style='width:250px;'>Name</li>
                                <li style='width:300px;'>Address</li>
                                <li style='width:100px;'>State</li>
                                <li style='width:150px;'>Date Created</li>
                                <li style='width:150px;'>Date Updated</li>
                                <li style='width:70px;'>Update</li>
                                <li style='width:70px;'>Delete</li>
                            </ul>
                                <ul class='danhsach-item'>
                                <li style='width:70px;'>1</li>
                                <li style='width:200px;'>0703522456</li>
                                <li style='width:250px;'>Trương Linh</li>
                                <li style='width:300px;'>122/30 ABCD PABCD Q.ABCD TP.ABCD</li>
                                <li style='width:100px;'>Đang làm</li>
                                <li style='width:150px;'>11-10-2021</li>
                                <li style='width:150px;'>1-12-2021</li>
                                <li style='width:70px;'>Update</li>
                                <li style='width:70px;'>Delete</li>                       
                            </ul>
                            <ul class='danhsach-item'>
                                <li style='width:70px;'>2</li>
                                <li style='width:200px;'>126843121</li>
                                <li style='width:250px;'>Long Xuân</li>
                                <li style='width:300px;'>122/30 ABCD PABCD Q.ABCD TP.ABCD</li>
                                <li style='width:100px;'>Đang làm</li>
                                <li style='width:150px;'>1-12-2021</li>
                                <li style='width:150px;'>1-12-2022</li>
                                <li style='width:70px;'>Update</li>
                                <li style='width:70px;'>Delete</li>	                            
                            </ul>
                            <ul class='danhsach-item'>
                                <li style='width:70px;'>3</li>
                                <li style='width:200px;'>123134484</li>
                                <li style='width:250px;'>Name</li>
                                <li style='width:300px;'>122/30 ABCD PABCD Q.ABCD TP.ABCD</li>
                                <li style='width:100px;'>Đang làm</li>
                                <li style='width:150px;'>1-12-2021</li>
                                <li style='width:150px;'>1-12-2021</li>
                                <li style='width:70px;'>Update</li>
                                <li style='width:70px;'>Delete</li>                            
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
    }
?>