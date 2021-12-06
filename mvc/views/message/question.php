<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Thông báo</h5>
        <button onclick='backMess()' type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Bạn có chắc muốn xoá ?</p>
      </div>
      <div  class="modal-footer">
        <form onsubmit='return onSubmit()' method="post"> 
          <button type="submit" class="btn btn-primary">Chắc chắn</button>
        </form>
        <button onclick='backMess()' type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>