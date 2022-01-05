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
    <div class="modal fade " id="ThongBaoModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header">
              <h5 class="modal-title" >Thông Báo</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p id='Content-Thongbao'></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>  
        </div>
    </div>
</div>
<div class="modal fade" id="question" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Thông báo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Bạn có chắc muốn xoá ?</p>
      </div>
      <div  class="modal-footer">
        <button onclick='onSubmit()' type="button" class="btn btn-primary">Chắc chắn</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>
