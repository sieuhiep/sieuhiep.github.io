<div class="features_items"><!--features_items-->
					<?php 
							foreach ($data as $key => $value) {
						 ?>

						<div class="col-sm-3">
							<div class="product-image-wrapper" style="height: auto;background-color: #ffffff">
								<div class="single-products">
										<div class="productinfo text-center" style="width: 100%;height: 300px">
											<div class="row">
												<div class="col-sm-5" style="margin-bottom: 20px;margin-top: 10px">
													<img style="width: 100%;height: 200px;margin-left: 5px" src="img/<?php echo $value['img'] ?>" alt="" />
												</div>
												<div class="col-sm-7">
													<p style="color: #fe980f;margin-top: 50px;width: 100%;"><br/>Giá: <?php echo $value['price'] ?>VNĐ</p>
											<p style="width: 100%">Số Lượng: <?php echo $value['soluong'] ?> Sản Phẩm</p>
												</div>
											<div class="col-sm-12" style="margin-top: 30px">
												<?php 
													if ($value['soluong']>0) {
														?>
															<a href="index.php?mod=Cart&act=addcart&masp=<?php echo $value['mahang'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
														<?php
													}
													else {
														?>
														<a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Hết hàng</a>
														<?php
													}
												 ?>
											</div>
										</div>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>Giá: <?php echo $value['price'] ?></h2>
												<p>Tên sản phẩm:<?php echo $value['tenhang'] ?></p>
												<?php 
													if ($value['soluong']>0) {
														?>
															<a href="index.php?mod=Cart&act=addcart&masp=<?php echo $value['mahang'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
														<?php
													}
													else {
														?>
														<a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Hết hàng</a>
														<?php
													}
												 ?>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="index.php?mod=Cart&act=detail&id=<?php echo $value['mahang'] ?>&type1=<?php echo $value['id_dm'] ?>"><i class="fa fa-plus-square"></i>Xem Chi Tiết</a></li>
								
									</ul>
								</div>
							</div>
						</div>	
						<?php } ?>			
					</div><!--features_items-->
