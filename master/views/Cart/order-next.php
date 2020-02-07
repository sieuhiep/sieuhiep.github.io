<link rel="shortcut icon" href="images/ico/favicon.ico">
 <style>
		strong , h2 , h3 {
			color: #FE980F;
		}
	</style>
<?php 
        foreach ($_SESSION as $key => $value) {
          $ten=$_SESSION[$key]['hoten'];
          $phone=$_SESSION[$key]['phone'];
          $soluong=$_SESSION[$key]['soluong'];
          $email=$_SESSION[$key]['email'];
          $adress=$_SESSION[$key]['adress'] ;
          // $time=$_SESSION[$key]['time'] ;

        }

      ?>
    <div class="container">
    <div class="row">
        <div class="col-xs-12">
        <div class="invoice-title">
          <h2>Xác nhận đơn hàng</h2>
        </div>
        <hr>
        <div class="row">
          <div class="col-xs-6">
            <address>
            <strong>Thông tin người mua:</strong>
            <br>
              Họ Tên*:
             
              <?php echo $ten; ?>
              <br>
                Địa chỉ*:
             
              <?php echo $adress; ?>

            </address>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6">
            <address>
              <strong>Thông tin liên lạc và địa chỉ:</strong><br>
              Số điện thoại*:
              <?php echo $phone ?>
              <br>
              Email*:
              
              <?php echo $email ?>
            </address>
          </div>
         
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><strong>Hóa đơn</strong></h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-condensed">
                <thead>
                  <tr>
                      <td><strong>Sản phẩm:</strong></td>
                      <td class="text-center"><strong>Giá</strong></td>
                      <td class="text-center"><strong>Số lượng</strong></td>
                      <td class="text-right"><strong>Thành tiền:</strong></td>
                  </tr>
                </thead>
                <tbody>
                  <!-- foreach ($order->lineItems as $line) or some such thing here -->
                <?php 
                  foreach ($_SESSION as $key => $value) {
                    $ten=$_SESSION[$key]['hoten'];
                    $phone=$_SESSION[$key]['phone'];
                    $email=$_SESSION[$key]['email'];
                    $soluong=$_SESSION[$key]['soluong'];
                    $adress=$_SESSION[$key]['adress'] ;
                 ?>
                  <tr>
                    <td><?php echo $value['tenhang']; ?></td>
                    <td class="text-center"> <?php echo $value['price'] ?>VNĐ</td>
                    <td class="text-center"><?php echo $value['soluong'] ?></td>
                    <td class="text-right"> <?php echo $value['thanhtien']; ?>VNĐ</td>
                  </tr>
                  <?php } ?>
                  <tr>
                    <td class="thick-line"></td>
                    <td class="thick-line"></td>
                    <td class="thick-line text-center"><strong>Thuế (6%)</strong></td>
                    <td class="thick-line text-right"> <?php echo $value['taxes']; ?>VNĐ</td>
                  </tr>
                  <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>Phí vận chuyển: (0,05%)</strong></td>
                    <td class="no-line text-right"> <?php echo $value['shipping']; ?>VNĐ</td>
                  </tr>
                  <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>Tổng giá trị</strong></td>
                    <td class="no-line text-right"> <?php echo $value['tongtien']+$value['shipping']+$value['taxes']; ?>VNĐ</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div style="width: 100% ; height: 100px; text-align: center;">
      <a href="index.php?mod=Cart&act=chitiet">
        <button class="btn btn-warning" style="padding: 10px 20px;">Mua hàng</button>
      </a>
    </div>
</div>
<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main1.js"></script>