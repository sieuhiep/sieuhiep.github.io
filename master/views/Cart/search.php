<div class="features_items"><!--features_items-->
						<h2 class="title text-center">List Items</h2>
						<?php 
							foreach ($data as $key => $value) {
						 ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper" style="height: 380px">
								<div class="single-products">
										<div class="productinfo text-center">
											<img style="width: 40%" src="img/<?php echo $value['img'] ?>" alt="" />
											<h2>$<?php echo $value['price'] ?></h2>
											<p>Only <?php echo $value['soluong'] ?> products</p>
											<a href="index.php?mod=Cart&act=addcart&masp=<?php echo $value['mahang'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>$<?php echo $value['price'] ?></h2>
												<p><?php echo $value['tenhang'] ?></p>
												<a href="index.php?mod=Cart&act=addcart&masp=<?php echo $value['mahang'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="index.php?mod=Cart&act=detail&id=<?php echo $value['mahang'] ?>"><i class="fa fa-plus-square"></i>Product detail</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>	
						<?php } ?>				
					</div><!--features_items-->
