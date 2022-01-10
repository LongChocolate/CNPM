<div class="modal fade " id="viewNhanvien" tabindex="-1" role="dialog" aria-labelledby="payByCashLabel" aria-hidden="true">
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
                            <img class='mx-auto' id='Anh' src=""  alt="Avatar" width="300px" height="300px" />
                            <p><input required type='file' id='image' name='image' class="w-3 btn"></p>
                            <button onclick="upload('quanli','view','Nhanvien')" type="button" class="btn btn-danger w-3">Thay đổi ảnh</button>
                        </div>
                        <div class="form-group  col-md-6 col-s-12">
                            <div class="form-group">
                                <label  for="id">Mã Nhân Viên</label>
                                <input disabled class="form-control" id="MaNV" name="id" type="text" >
                            </div>
                            <div class="form-group">
                                <label for="sdt">Số điện thoại</label>
                                <input disabled class="form-control" id="SDT" name="sdt" type="text" >
                            </div>
                            <div class="form-group">
                                <label for="name">Họ Tên</label>
                                <input class="form-control" id="HoTen" name="name" type="text" >
                            </div>
                            <div class="form-group">
                                <label for="name">Giới Tính</label>
                                <div class="form-group ">
                                    <input  class='btn' value="0" name="GioiTinh" type="radio" > Nam
                                    <input  class='btn' value="1" name="GioiTinh" type="radio" > Nữ
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address">CMND</label>
                                <input class="form-control" id="CMND" name="cmnd" type="text">
                            </div>
                            <div class="form-group">
                                <label for="name">Loại</label>
                                <select id="Loai" class='btn'>
                                    <option value='Quản lí'>Quản lí</option>
                                    <option value='Nhân viên bán hàng'>Nhân viên bán hàng</option>
                                    <option value='Nhân viên kho'>Nhân viên kho</option>
                                </select>
                            </div>                 
                        </div>
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button onclick="onSubmitEdit('quanli','view','Nhanvien')" type="button" class="btn btn-primary" >Xác nhận</button>
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
                            <img class='mx-auto' id='Anh' src="asset/image/avatar/user-avatar.png"  alt="Avatar" width="300px" height="300px" />
                            <p><input required type='file' id='image' name='image' class="w-3"></p>
                            <button onclick="upload('quanli','create','Nhanvien')" type="button" class="btn btn-danger w-3">Thay đổi ảnh</button>
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
                                <div class="form-group">
                                    <input   value="0" name="GioiTinh" type="radio" > Nam
                                    <input  value="1" name="GioiTinh" type="radio" > Nữ
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address">CMND</label>
                                <input class="form-control" id="CMND" name="cmnd" type="text">
                            </div>
                            <div class="form-group">
                                <label for="name">Loại</label>
                                <select id="Loai">
                                    <option value='Quản lí'>Quản lí</option>
                                    <option value='Nhân viên bán hàng'>Nhân viên bán hàng</option>
                                </select>
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