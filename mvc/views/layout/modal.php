
<div class="modal fade " id="editNhanvien" tabindex="-1" role="dialog" aria-labelledby="payByCashLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header">
            <h5 class="modal-title" id="payByCashLabel">Thông tin chi tiết</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form  method='post' >
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group  col-md-6 col-s-12">
                            <label for="name"></label>
                            <img id="Anh" src="" alt="Avatar" width="300px" height="400px">
                        </div>
                        <div class="form-group  col-md-6 col-s-12">
                            <div class="form-group">
                                <label  for="id">Mã Nhân Viên</label>
                                <input disabled class="form-control" id="MaNV" name="id" type="text" >
                            </div>
                            <div class="form-group">
                                <label for="sdt">Số điện thoại</label>
                                <input class="form-control" id="SDT" name="sdt" type="text" >
                            </div>
                            <div class="form-group">
                                <label for="name">Họ Tên</label>
                                <input class="form-control" id="HoTen" name="name" type="text" >
                            </div>
                            <div class="form-group">
                                <label for="name">Giới Tính</label>
                                <input class="form-control" id="GioiTinh" name="gioitinh" type="text" >
                            </div>
                            <div class="form-group">
                                <label for="address">CMND</label>
                                <input class="form-control" id="CMND" name="cmnd" type="text">
                            </div>
                            <div class="form-group">
                                <label for="name">Loại</label>
                                <input class="form-control" id="Loai"  type="text" >
                            </div>                 
                        </div>
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button onclick="onSubmitEdit('quanli','edit','Nhanvien')" type="button" class="btn btn-primary" >Xác nhận</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade " id="createNhanvien" tabindex="-1" role="dialog" aria-labelledby="payByCashLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header">
            <h5 class="modal-title" id="payByCashLabel">Thông tin chi tiết</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form  method='post' >
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group  col-md-6 col-s-12">
                            <label for="name"></label>
                            <img id="Anh" src="" alt="Avatar" width="300px" height="400px">
                        </div>
                        <div class="form-group  col-md-6 col-s-12">
                            <div class="form-group">
                                <label  for="id">Mã Nhân Viên</label>
                                <input disabled class="form-control" id="MaNV" name="id" type="text" >
                            </div>
                            <div class="form-group">
                                <label for="sdt">Số điện thoại</label>
                                <input class="form-control" id="SDT" name="sdt" type="text" >
                            </div>
                            <div class="form-group">
                                <label for="name">Họ Tên</label>
                                <input class="form-control" id="HoTen" name="name" type="text" >
                            </div>
                            <div class="form-group">
                                <label for="name">Giới Tính</label>
                                <input class="form-control" id="GioiTinh" name="gioitinh" type="text" >
                            </div>
                            <div class="form-group">
                                <label for="address">CMND</label>
                                <input class="form-control" id="CMND" name="cmnd" type="text">
                            </div>
                            <div class="form-group">
                                <label for="name">Loại</label>
                                <input class="form-control" id="Loai"  type="text" >
                            </div>                 
                        </div>
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button onclick="onSubmitCreate('quanli','create','Nhanvien')" type="button" class="btn btn-primary" >Tạo</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade " id="Sanpham" tabindex="-1" role="dialog" aria-labelledby="payByCashLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header">
            <h5 class="modal-title" id="payByCashLabel">Thông tin chi tiết</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form onsubmit='return onSubmitEdit()' method='post' >
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group  col-md-6 col-s-12">
                            <label for="name"></label>
                            <img id="Anh" src="" alt="Avatar" width="300px" height="400px">
                        </div>
                        <div class="form-group  col-md-6 col-s-12">
                            <div class="form-group">
                                <label  for="id">Mã Sản Phẩm</label>
                                <input disabled class="form-control" id="MaSP" name="id" type="text" >
                            </div>
                            <div class="form-group">
                                <label for="sdt">Tên</label>
                                <input class="form-control" id="Ten" name="sdt" type="text" >
                            </div>
                            <div class="form-group">
                                <label for="name">Số Lượng</label>
                                <input class="form-control" id="SoLuong" name="name" type="text" >
                            </div>
                            <div class="form-group">
                                <label for="name">Giá</label>
                                <input class="form-control" id="Gia" name="gioitinh" type="text" >
                            </div>
                            <div class="form-group">
                                <label for="name">Loại</label>
                                <input class="form-control" id="category_id"  type="text" >
                            </div>                 
                        </div>
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="payByCash" tabindex="-1" role="dialog" aria-labelledby="payByCashLabell" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="payByCashLabell">Thanh toán bằng tiền mặt</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form>
            <div class="modal-body">
                <div class="form-group">
                    <label for="moneyOfCustomer">Số tiền khách đưa</label>
                    <input required oninput='moneyOfCustomer(this,0)' type="number" class="form-control" id="moneyOfCustomer" placeholder="Nhập số tiền">
                  </div>
                <div class="form-group">
                    <label for="discount">Giảm giá</label>
                    <input type="number" class="form-control" id="discount" placeholder="Nhập % giảm">
                </div>
                <div class="form-group">
                    <label for="totalBill">Tổng hóa đơn</label>
                    <span id='totalBill'></span>
                  </div>
                <div class="form-group">
                    <label for="exceedCash">Trả lại cho khách</label>
                    <span class='exceedCash'></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <a href='index.php?controller=nhanvienbanhang&action=create&class=Hoadon&type=1' type="submit" class="btn btn-primary">Thanh toán</a>
            </div>
            </form>
        </div>
        </div>
    </div>

    <!-- Modal thanh toán bằng thẻ -->
    <div class="modal fade" id="payByCredit" tabindex="-1" role="dialog" aria-labelledby="payByCreditLabell" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="payByCreditLabell">Thanh toán bằng thẻ</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <img class="width-100pc" src="./undraw_Credit_card_re_blml.png" alt="img credit card">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <a href='index.php?controller=nhanvienbanhang&action=create&class=Hoadon&type=1' type="button" class="btn btn-primary">Thanh toán</a>
            </div>
        </div>
        </div>
    </div>


