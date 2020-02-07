<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | TB-MOBI</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main1.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="img/ico/favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head><!--/head-->
<body style="background-color: #f3f3f3">
	<header id="header"><!--header-->
		
		<div class="header_top" style="background-color: #cd1818"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="logo pull-left">
							<a href="index.php" style="float: left;"><img style="width: 40%" src="img/vector_fashion_heart_logo.png" alt="" style="width: 50%;margin-top: 2px"><span style="color: #ffffff;width: 50%;font-size: 20px;padding-right: 5px">TBMOBI</span></a>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="search_box pull-right" style="width: 100%;line-height: 60px">
							<form action="index.php?mod=Cart&act=search" method="post">
								<input type="text" name="search" placeholder="Search" style="width: 85%" />
								<button style="background-color: black;border-color: black" type="submit" name="submit" class="font-a btn btn-warning"><i class="fa fa-search" style="font-size: 20px"></i></button>
							</form>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="shop-menu pull-right" style="width: 100%">
							<ul class="nav navbar-nav">
								<li><a style="background-color:#cd1818;color: #ffffff" href="index.php?mod=Cart&act=cart"><i class="fa fa-shopping-cart fa-2x" style="margin-left: 10px;font-size: 25px"></i><br> Giỏ Hàng</a></li>
								
								<li><a href="index.php?mod=Admin" style="background-color:#cd1818;color: #ffffff"><i class="fa fa-lock " style="margin-left: 20px;font-size: 25px"></i><br>Đăng Nhập</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
		</div><!--/header-middle-->
		<div class="header-middle" style="background-color: black;height: 45px"><!--header-bottom-->
			<div class="container">
				<div class="row" style="padding-top: 12px">
					<div class="col-sm-9">
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li style="color: #ffffff"><a href="index.php" class="active"><i class="fas fa-home"></i>	Trang chủ</a></li>
								<li class="dropdown" style="color: #ffffff"><a style="color: #ffffff" href="#"><i class="fas fa-clipboard-list"></i>Sản Phẩm<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu" style="width: 240%;background-color: black">
                                    	<li>Hãng sản xuất:</li>
                                    	<li style="color: #ffffff;"><div>
                                    		 <?php 
                                          foreach ($data1 as $key => $value) {
                                        ?>
										<span style="font-size: 15px;margin-left: 15px" name="dm"><a href="index.php?mod=Cart&act=sanpham&type1=<?php echo $value['id_dm'] ?>"><?php echo $value['ten_dm'] ?></a></span>
                                    <?php } ?>
                                    	</div></li> 
                                    </ul>
                                </li> 
								<li><a style="color: #ffffff" href="index.php?mod=Cart&act=iphone"><i class="fab fa-apple"></i></i>	IPHONE</a></li>
								<li><a style="color: #ffffff" href="index.php?mod=Cart&act=samsung"><i class="fa fa-mobile"></i>	SAMSUNG</a></li>
								<li><a style="color: #ffffff" href="index.php?mod=Cart&act=nokia"><i class="fa fa-mobile-alt"></i>	NOKIA</a></li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>

		</div><!--/header-bottom-->
		<div class="header-bottom" style="padding-bottom: 10px;padding-top: 10px">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<img src="img/topsite.png" alt="" width="100%">
					</div>
				</div>
			</div>	
		</div>
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel" style="background-color: #ffffff">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner" style="background-color: #f7c8c9">
							<div class="item active">
								<div class="col-sm-6">
									<h1 style="color: #7d0d12"><span>TB</span>-MOBI</h1>
									<h2>IPHONE</h2>
									<p>Thiết kế sang trọng lịch lãm đi đầu trong lĩnh vực công nghệ của thế giới. Với nhiều tính năng ưu Việt vượt trội sản phẩm đang bán chạy nhất hiện nay </p>
									<button type="button" class="btn btn-default get">Xem Ngay</button>
								</div>
								<div class="col-sm-6">
									<img style="width: 400px" src="img/400x400x2-400x400.jpg.pagespeed.ic.r_DF5jGhXH.jpg" class="girl img-responsive" alt="" />
									<!-- <img src="img/home/pricing.png"  class="pricing" alt="" /> -->
								</div>
							</div>
							<div class="item" style="">
								<div class="col-sm-6">
								<h1 style="color: #7d0d12"><span>TB</span>-MOBI</h1>
									<h2>SAMSUNG</h2>
									<p>Với thiết kế trẻ đẹp. Phù hợp với mọi lứa tuổi. Camera siêu nét đem đến những tấm ảnh chụp tuyệt vời.Với nhiều tính năng tốt. </p>
									<button type="button" class="btn btn-default get">Xem Ngay</button>
								</div>
								<div class="col-sm-6">
									<img style="width:217px" src="img/samsung-galaxy-s3.jpg" class="girl img-responsive" alt="" />
									<!-- <img src="img/home/pricing.png"  class="pricing" alt="" /> -->
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1 style="color: #7d0d12"><span>TB</span>-MOBI</h1>
									<h2>NOKIA</h2>
									<p>Là dòng sản phẩm lâu đời với nhiều tính năng không thua kém Iphone và Samsung. Với độ bền không gì sánh bằng khả năng chịu va đập tốt. </p>
									<button type="button" class="btn btn-default get">Xem Ngay</button>
								</div>
								<div class="col-sm-6">
									<img style="width: 207px" src="img/lumia-800-mau-trang.jpeg" class="girl img-responsive" alt="" />
									<!-- <img src="img/home/pricing.png" class="pricing" alt="" /> -->
								</div>
							</div>
						</div>
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
			</div>
			<div class="col-sm-4">
						<img style="width: 100%;margin-bottom: 10px" src="img/636754666897620000_H2 - Galaxy J4 lavender cuoi tuan385x88.jpg" alt="">
						<img style="width: 100%" src="img/636755067373711840_Banner-H2-iPhoneX-Hotsale.png" alt="">
						<div style="background-color: #ffffff;width: 100%;margin-top: 10px">
							<p style="color: red;font-size: 25px">Tin Công Nghệ nổi bật</p>
							<a href="http://genk.vn/">
								<div class="row" style="margin-left: 10px;margin-top: 10px">
									<div class=" col-sm-3">
										<img style="width: 100%" src="img/84e0097a9a1369e5a7fa40910a4e0784.jpg" alt="">
									</div>
									<div class=" col-sm-8">
										<p style="">Cho những tín đồ của công nghệ thỏa sức khám phá!</p>
									</div>
								</div>
							</a>
							<a href="https://news.zing.vn/cong-nghe.html">
								<div class="row" style="margin-left: 10px;margin-top: 22px">
									<div class=" col-sm-3">
										<img style="width: 100%" src="img/iphone-x-256gb-h2-400x460-400x460.png" alt="">
									</div>
									<div class=" col-sm-9">
										<p style="">Những sản phẩm hot nhất hiện nay được mọi người tin dùng!</p>
									</div>
								</div>
							</a>
							
							
						</div>
					</div>
		</div>
			
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div>
			<img src="img/samsung-uu-dai.jpg" alt="" style="width: 100%;margin-bottom: 15px">
		</div>
			<div class="row">
				<div class="col-sm-12 padding-right">
					 <?php 
					 	include_once('master_page.php');
					  ?>
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>TB</span>-MOBI</h2>
							<p>Chúng tôi đặt chất lượng sản phẩm lên hàng đầu</p>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Hệ thống cửa hàng</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Số 141-Nguyễn Trãi-HN</a></li>
								<li><a href="#">Số 234-Long Biên-HN</a></li>
								<li><a href="#">Số 666-Thanh Nhàn-HN</a></li>
								<li><a href="#">Số 72-Ngõ 84-Láng Hạ-HN</a></li>
								<li><a href="#">Số 228-Chiến Thắng-HN</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Tư vấn</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Tư vấn miễn phí(24/7)</a></li>
								<li><a href="#"><b style="font-size: 20px;color: red">18006601</b></a></li>
								<li><a href="#"><b style="font-size: 15px">Hỗ trợ Thanh toán:</b></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>Góp ý phản ánh</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Góp ý, phản ánh(8h00 - 22h00)</a></li>
								<li><a href="#"><b style="font-size: 20px;color: red">1800 6616</b></a></li>
								<li><a href="#"><b style="font-size: 15px">Chứng nhận:</b></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="img/home/map.png" alt="" />
							<p>Kết nối toàn thế giới</p>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">DO VAN TIEN</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="">Tien</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>
</html>
  <?php 

    if (isset($_COOKIE['shopping'])) { ?>
      <script>
        toastr.success('Thêm vào giỏ hàng thành công !');
      </script>

  <?php } 
  ?>
    
  <?php 

    if (isset($_COOKIE['accept'])) { ?>
      <script>
        toastr.success('Đặt hàng thành công !');
      </script>
  <?php } 
  ?>
  <?php 

    if (isset($_COOKIE['accept1'])) { ?>
      <script>
        toastr.success('sản phẩm không đủ !');
      </script>
  <?php } 
  ?>