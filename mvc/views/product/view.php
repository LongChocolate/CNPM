<form>
    <div class="row">
        <div class="form-group  col-md-6 col-s-12">
            <label for="name"></label>
            <img id="image" src="" alt="Avatar" width="300px" height="400px">
        </div>
        <div class="form-group  col-md-6 col-s-12">
            <label for="id">Mã</label>
            <input class="form-control" id="id" name="id" type="text" >
            <label for="sdt">Số điện thoại</label>
            <input class="form-control" id="sdt" name="sdt" type="text" >
            <label for="name">Tên</label>
            <input class="form-control" id="name" name="name" type="text" >
            <label for="address">Địa chỉ</label>
            <input class="form-control" id="address" name="address" type="text">
        </div>
    </div> 
    <div class="history"><p>Thông tin hoạt động và lương</p></div>
    <div  class="my-modal-footer">
        <button onclick='edit()' type="submit" class="btn btn-primary">Thay đổi</button>
        <button onclick='backView()' type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
    </div>
</form>