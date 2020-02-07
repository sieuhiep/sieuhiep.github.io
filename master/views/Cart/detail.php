<div class="product-details" ><!--product-details-->
						<div class="col-sm-3" style="margin-left: 100px">
							<div class="view-product">
								<img style="width: 100%" src="img/<?php echo $data['img'] ?>" alt="" />
								<h3>ZOOM</h3>
							</div>
								

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="img/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?php echo $data['tenhang'] ?></h2>
								<img src="img/product-details/rating.png" alt="" />
								<span>
									<span>$<?php echo $data['price'] ?></span>
									<button type="button" class="btn btn-fefault cart">
										<a href="index.php?mod=Cart&act=addcart&masp=<?php echo $data['mahang'] ?>"><i class="fa fa-shopping-cart"></i>
										Thêm vào giỏ hàng</a>
									</button>

								</span>
								<p>Số lượng: <?php echo $data['soluong'] ?> sản phẩm</p>
								<p><b>Tình trạng:</b> Còn hàng</p>
								<p><b>Trạng thái:</b> Mới</p>
								<p><b>Phân phối:</b> TBMOBI</p>
								<a href=""><img src="img/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Sản phẩm cùng loại</a></li>
								<li class="active"><a href="#reviews" data-toggle="tab">Bình Luận</a>

								</li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
								<?php 
							foreach ($detail as $key => $value) {
						 ?>
								<div class="col-sm-3" >
									<div class="product-image-wrapper" style="height: 400px;background-color: #ffffff">
										<div class="single-products">
											<div class="productinfo text-center">
												<img style="width: 100%;height: 280px" src="img/<?php echo $value['img'] ?>" alt="" />
												<p ><br/>Giá: <?php echo $value['price'] ?>VNĐ</p>
												<p>Tên:<?php echo $value['tenhang'] ?></p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
							<div style="text-align: right;color: blue;" class="col-sm-12">
							<a href="index.php?mod=Cart&act=sanpham&type1=<?php echo $data['id_dm'] ?>">Xem tất cả</a>
						</div>	
							</div>
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<div class="fb-comments" data-href="index.php?mod=Cart&act=detail" data-numposts="1"></div>
								</div>
							</div>			
						</div>
					</div>
<script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main1.js"></script>
    <div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5370366f06e43f1d"></script> 
<!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_native_toolbox_q4bu"></div>