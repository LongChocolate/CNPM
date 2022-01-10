<div class="modal fade " id="viewDanhmuc" tabindex="-1" role="dialog" aria-labelledby="payByCashLabel" aria-hidden="true">
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
                            <div class="form-group">
                                <label>Mã Sản Phẩm</label>
                                <input disabled class="form-control" id="id" type="text" >
                            </div>
                        </div>
                        <div class="form-group  col-md-6 col-s-12">
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" id="TenDM" type="text" >
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button onclick="onSubmitEdit('quanli','view','Danhmuc')" type="button" class="btn btn-primary" >Xác nhận</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade " id="createDanhmuc" tabindex="-1" role="dialog" aria-labelledby="payByCashLabel" aria-hidden="true">
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
                            <div class="form-group">
                                <label>Mã Sản Phẩm</label>
                                <input disabled class="form-control" id="id" type="text" >
                            </div>
                        </div>
                        <div class="form-group  col-md-6 col-s-12">
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" id="TenDM" type="text" >
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button onclick="onSubmitCreate('quanli','create','Danhmuc')" type="button" class="btn btn-primary" >Tạo</button>
                </div>
            </form>
        </div>
    </div>
</div>