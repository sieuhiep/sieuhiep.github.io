<?php  ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>L-Shopper</title>
        <!-- Latest compiled and minified CSS & JS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/set1.css">
        <link rel="stylesheet" type="text/css" href="css/set1.css">
        <link rel="stylesheet" type="text/css" href="css/toastr.css">
        <link rel="shortcut icon" href="../favicon.ico"> 
    		<link rel="stylesheet" type="text/css" href="css/default.css" />
    		<link rel="stylesheet" type="text/css" href="component.css" />
    		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
    		<script src="js/modernizr.custom.js"></script>
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="classie.js"></script>

        <style>
         	  .invoice-title h2, .invoice-title h3 {
              display: inline-block;
            }

            .table > tbody > tr > .no-line {
                border-top: none;
            }

            .table > thead > tr > .no-line {
                border-bottom: none;
            }

            .table > tbody > tr > .thick-line {
                border-top: 2px solid;
            }
        </style>
    </head>
    <body> 

    		<?php if (isset($_COOKIE['msg2'])) { ?>

				<script>
					toastr.success('Saved info !');
				</script>

			<?php } ?>
      <?php 
      $tongtien = 0;
        foreach ($arr as $key => $value) {
          $ten= $value['hten'];
          $phone= $value['sdt'];
          $email= $value['email'];
          $adress= $value['diachi'] ;
          $tongtien = $value['tongtien'];
          $time = $value['mahoadon'];
        }
        $shipping = $tongtien/100;
        $taxes = ($tongtien*6)/100;

      ?>
    <div class="container">
    <div class="row">
        <div class="col-xs-12">
        <div class="invoice-title">
          <h2>Hóa đơn</h2>
        </div>
        <hr>
        <div class="row">
          <div class="col-xs-6">
            <address>
            <strong>Thông tin:</strong>
            <br>
              Tên khách hàng*:
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
              <strong>Thông tin liên lạc:</strong><br>
              Số điện thoại*:<br>
              <?php echo $phone ?>
              <br>
              Email*:
              <br>
              <?php echo $email ?>
            </address>
          </div>
          <div class="col-xs-6 text-right">
            <address>
              <strong>Ngày mua:</strong><br>
              <?php echo $time ?><br><br>
            </address>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><strong>Hóa đơn chi tiết</strong></h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-condensed">
                <thead>
                  <tr>
                      <td><strong>Sản phẩm</strong></td>
                      <td class="text-center"><strong>Giá</strong></td>
                      <td class="text-center"><strong>Số lượng</strong></td>
                      <td class="text-center"><strong>Thiếu</strong></td>
                      <td class="text-right"><strong>Tổng tiền</strong></td>
                  </tr>
                </thead>
                <tbody>
                  <!-- foreach ($order->lineItems as $line) or some such thing here -->
                <?php 
                  foreach ($arr as $key => $value) {
                 ?>
                  <tr>
                    <td><?php echo $value['tensp']; ?></td>
                    <td class="text-center"> <?php echo $value['dongia'] ?>VNĐ</td>
                    <td class="text-center"><?php echo $value['soluong'] ?></td>
                    <td class="text-center"><?php echo $value['thieu'] ?></td>
                    <td class="text-right"> <?php echo $value['thanhtien']; ?>VNĐ</td>
                  </tr>
                  <?php } ?>
                  <tr>
                    <td class="thick-line"></td>
                    <td class="thick-line"></td>
                    <td class="thick-line text-center"><strong>Thuế (6%)</strong></td>
                    <td class="thick-line text-right"> <?php echo $taxes; ?>VNĐ</td>
                  </tr>
                  <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>Phí vận chuyển (0,05%)</strong></td>
                    <td class="no-line text-right"><?php echo $shipping; ?>VNĐ</td>
                  </tr>
                  <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>Tổng tiền:</strong></td>
                    <td class="no-line text-right"><?php echo $value['tongtien']; ?>VNĐ</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div style="width: 100% ; height: 100px; text-align: center;">
      <div style="width: 100% ; height: 100px; text-align: center;" >
      <input type="button" id="print_button"  value="In hóa đơn" onclick="this.style.display ='none'; window.print()" />
    </div>
</body>
</html>



      
     
