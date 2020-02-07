<link rel="shortcut icon" href="img/ico/favicon.ico">
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
<link rel="stylesheet" type="text/css" href="css/set1.css">
 <style>
    	.cart_info img {
    		width: 150px;
    		height: 150px;
    	}
    	.style {
    		text-align: center;
    	}
    	.style h2{
    		color: #FE980F;
    	}
    </style>
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">MOBI</a></li>
				  <li class="active">Giỏ hàng của bạn</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed" id="myTable">
					<thead>
						<tr class="cart_menu">
							<td class="image">Sản phẩm</td>
							<td class="description"></td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Thành tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>

						<?php 
							$tongtien=0;
							foreach ($_SESSION as $key => $value) { 
								$tongtien = $value['thanhtien']+$tongtien;

								?>
							<tr>
								<td class="cart_product">
									<a href=""><img src="img/<?php echo $value['img'] ?>" alt=""></a>
								</td>
								<td class="cart_description">
									<h4><a href=""></a></h4>
									<p><?php echo $value['tenhang'] ?></p>
								</td>
								<td class="cart_price">
									<p><?php echo $value['price'] ?>VNĐ</p>
								</td>
								<td class="cart_quantity">
									<div class="cart_quantity_button">
										<a class="cart_quantity_up" href="index.php?mod=Cart&act=them&ma=<?php echo $value['mahang'] ?>"> + </a>
										<input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $value['soluong'] ?>" autocomplete="off" size="2">
										<a class="cart_quantity_down" href="index.php?mod=Cart&act=delete&ma=<?php echo $value['mahang'] ?>"> - </a>
									</div>
								</td>
								<td class="cart_total">
									<p class="cart_total_price"><?php echo $value['thanhtien'] ?>VNĐ</p>
								</td>
								<td class="cart_de
								lete">
									<a class="cart_quantity_delete" href="index.php?mod=Cart&act=remove&id=<?php echo $value['mahang'] ?>"><i class="fa fa-times"></i></a>
								</td>
							</tr>
						<?php 
					}
						 ?>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
<section id="do_action">
		<div class="container">
			
			<div class="row">
				<?php 

					$taxes = ($tongtien*6)/100 ;
					$shipping = ($tongtien*0.5)/100;

					foreach ($_SESSION as $key => $value) {
						$_SESSION[$key]['tongtien']=$tongtien;
						$_SESSION[$key]['shipping']=$shipping;
						$_SESSION[$key]['taxes']=$taxes;
					}

				 ?>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Thành tiền <span> <?php echo $tongtien ?>VNĐ</span></li>
							<li>Thuế (6%) <span> <?php echo $taxes ?>VNĐ</span></li>
							<li>Phí vận chuyển (0,05%)<span><?php echo $shipping ?>VNĐ </span></li>
							<li>Tổng giá trị <span> <?php echo ($tongtien+$taxes+$shipping) ?>VNĐ </span></li>
						</ul>
							<a class="btn btn-default update" href="index.php">Quay lại</a>
							<a class="btn btn-default check_out" data-toggle="modal" data-target="#myModal" href="">Đặt hàng</a>
					</div>
				</div>
			</div>
		</div>
		<div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
          <form action="index.php?mod=Cart&act=order" method="POST" role="form">
            <div class="modal-content style">
              	<div class="modal-header">
                	<button type="button" class="close" data-dismiss="modal">&times;</button>
                	<h2>Đặt hàng</h2>
              	</div>
              	<div class="modal-body">
                
                <div class="form-group ">
                   <span class="input input--haruki form-group1">
                        <input class="input__field input__field--haruki " name="name" type="text" id="input-1" />
                        <label class="input__label input__label--haruki" for="input-1">
                          <span class="input__label-content input__label-content--haruki">Họ Tên</span>
                        </label>
                      </span>
                      <br>
                    <span class="input input--haruki form-group1">
                        <input class="input__field input__field--haruki " name="phone" type="text" id="input-1" />
                        <label class="input__label input__label--haruki" for="input-1">
                          <span class="input__label-content input__label-content--haruki">Số Điện thoại</span>
                        </label>
                      </span>
                      <br>
                    <span class="input input--haruki form-group1">
                        <input class="input__field input__field--haruki " name="email" type="text" id="input-1" />
                        <label class="input__label input__label--haruki" for="input-1">
                          <span class="input__label-content input__label-content--haruki">Email</span>
                        </label>
                      </span>
                      <br>
                    <span class="input input--haruki form-group1">
                        <input class="input__field input__field--haruki " name="adress" type="text" id="input-1" />
                        <label class="input__label input__label--haruki" for="input-1">
                          <span class="input__label-content input__label-content--haruki">Địa chỉ</span>
                        </label>
                      </span>
                      <br>
                        <label style="padding-right: 220px">Hình thức thanh toán:</label>
                          	<select style="width: 40%;margin-left: 105px" class="form-control" name="id_dm" value="Hình thức thanh toán">    
                                <option>Thanh toán khi nhận hàng</option>
                                <option>Thanh toán qua thẻ tín dụng</option>
                                <option>Chuyển khoản</option>                                             
                            </select>
                       
                        
                      
                      <br>     
                </div>  
            </div>
            <div class="modal-footer">
                <button type="submit" name="submit" class="font-a btn btn-warning">Đặt hàng</button>
                <button type="submit" class="btn btn-default " data-dismiss="modal" style="">Đóng</button>
            </div>
            </div>
          </form>
          </div>
        </div>
	</section><!--/#do_action-->
 <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 <?php 

    if (isset($_COOKIE['remove'])) { ?>
      <script>
        toastr.success('Remove successful !');
      </script>
  <?php } 
  ?>
  <?php 

    if (isset($_COOKIE['msg3'])) { ?>
      <script>
        toastr.error(' False information!');
      </script>
  <?php } 
  ?>
      <script>
        $(document).ready(function(){
            $('#myTable').DataTable();
        });
    </script>