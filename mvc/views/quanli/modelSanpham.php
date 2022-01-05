<div class="modal fade " id="viewSanpham" tabindex="-1" role="dialog" aria-labelledby="payByCashLabel" aria-hidden="true">
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
                            <label ></label>
                            <img class='mx-auto' id='Anh' src=""  alt="Avatar" width="300px" height="300px" />
                            <p><input required type='file' id='image' name='image' class="w-3"></p>
                            <button onclick="upload('quanli','view','Sanpham')" type="button" class="btn btn-danger w-3">Thay đổi ảnh</button>

                        </div>
                        <div class="form-group  col-md-6 col-s-12">
                            <div class="form-group">
                                <label>Mã Sản Phẩm</label>
                                <input disabled class="form-control" id="MaSP" name="id" type="text" >
                            </div>
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" id="Ten" name="sdt" type="text" >
                            </div>
                            <div class="form-group">
                                <label >Số Lượng</label>
                                <input class="form-control" id="SoLuong" name="name" type="text" >
                            </div>
                            <div class="form-group">
                                <label >Giá</label>
                                <input class="form-control" id="Gia" name="gioitinh" type="text" >
                            </div>
                            <div class="form-group">
                                <label for='Loai'>Loai</label>
                                <select id="category_id">
                                    <?php
                                        foreach($select as $s)
                                        {
                                            echo"
                                            <option value='$s->id'>$s->TenDM</option>
                                            ";
                                        }
                                    ?>
                                </select>
                            </div>                 
                        </div>
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button onclick="onSubmitEdit('quanli','view','Sanpham')" type="button" class="btn btn-primary" >Xác nhận</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade " id="createSanpham" tabindex="-1" role="dialog" aria-labelledby="payByCashLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header">
            <h5 class="modal-title" id="payByCashLabel">Thông tin chi tiết</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form method='post' >
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group  col-md-6 col-s-12">
                            <label for="name"></label>
                            <img class='mx-auto' id='Anh' src="asset/image/sanpham/no-image.jpg"  alt="Avatar" width="300px" height="300px" />
                            <p><input required type='file' id='image' name='image' class="w-3"></p>
                            <button onclick="upload('quanli','create','Sanpham')" type="button" class="btn btn-danger w-3">Thay đổi ảnh</button>
                        </div>
                        <div class="form-group  col-md-6 col-s-12">
                            <div class="form-group">
                                <label  for="id">Mã Sản Phẩm</label>
                                <input disabled class="form-control" id="MaSP" type="text" >
                            </div>
                            <div class="form-group">
                                <label for="sdt">Tên</label>
                                <input class="form-control" id="Ten"  type="text" >
                            </div>
                            <div class="form-group">
                                <label for="name">Số Lượng</label>
                                <input class="form-control" id="SoLuong"  type="text" >
                            </div>
                            <div class="form-group">
                                <label for="name">Giá</label>
                                <input class="form-control" id="Gia"  type="text" >
                            </div>
                            <div class="form-group">
                                <label for="name">Loại</label>
                                <select id="category_id">
                                    <?php
                                        foreach($select as $s)
                                        {
                                            echo"
                                            <option value='$s->id'>$s->TenDM</option>
                                            ";
                                        }
                                    ?>
                                </select>
                            </div>                 
                        </div>
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button onclick="onSubmitCreate('quanli','create','Sanpham')" type="button" class="btn btn-primary" >Tạo</button>
                </div>
            </form>
        </div>
    </div>
</div>