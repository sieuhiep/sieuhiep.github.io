<?php 
ob_start();
session_start();
include_once('quantri/ketnoi.php');
if (isset($_POST['submit'])) {
  $email=$_POST['email'];
  $mk=$_POST['mk'];
  if (isset($email)&&isset($mk)) {
     $sql="select * from thanhvien where email='$email' and mat_khau='$mk'";
     $query=mysqli_query($conn,$sql);
	$rows=mysqli_num_rows($query);
	$row=mysqli_fetch_array($query);
     if ($rows>0) {
		$_SESSION["email"]=$email;
		$_SESSION['mat_khau']=$mk;
		$_SESSION['level']=$row['quyen_truy_cap'];
		if ($row['quyen_truy_cap']==2) {
			header('location:quantri/quantri.php');
		}
       else if($row['quyen_truy_cap']==1){ 
		header('location:index.php');
	   }
     }
     else {
        header('location:index.php');
     }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
	 crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
	 crossorigin="anonymous"></script>
	<script src="js/script.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>index</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/reset.css">
	<!-- CSS reset -->
	<link rel="stylesheet" href="css/style1.css">
	<!-- Resource style -->
	<link rel="stylesheet" href="css/demo.css">
	<!-- Demo style -->
	<style>	
	.h2-bar{
	height:35px;
	line-height:35px;
	text-transform:capitalize;
	font-size:15px;
	font-weight:bold;
	color:#FFF;
	background:green;
	padding:0 15px;
	margin:0;
	}
	</style>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<?php
            if (isset($_GET['page_layout'])) {
                switch ($_GET['page_layout']) {
                    case "chitiet":
                    echo "<link rel='stylesheet' href='css/chitietsp.css'>";
                        break;
                     case "hoanthanh":
                     echo "<link rel='stylesheet' href='css/hoanthanh.css'>";;
                        break;                                
                    case "muahang":
                    echo "<link rel='stylesheet' href='css/muahang.css'>";;
                        break;
                    case "giohang":
                    echo "<link rel='stylesheet' href='css/giohang.css'>";;
                        break;
                }
            }
        ?>
</head>

<body>
	<div id="all">
		<header>
			<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light" id="header">
				<a class="navbar-brand" href="#">TDH</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
				 aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav mr-auto" id="menu">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">trang Chủ
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="sanpham" href="">Sản Phẩm</a>
							<div class="border" style="height: 0%;background: red;width: 0;">
								
							</div>
							<script>
								$(document).ready(function(){
									$('#banhkeo').hover(function(){
										$('.border').animate({
								            height: '3px',
								            width: '100%'
								        });
									},
									function(){
										$('.border').animate({
								            height: '0px',
								            width: '0'
								        });
									});
								});
							</script>
						</li>
					</ul>
					<?php
                    include_once 'chucnang/timkiem/timkiem.php';
                    ?>
							<?php if(isset($_SESSION['email'])) {
								?>
								<style>
										.sess>li{
											float: left;
										}
										
										.sess>li>a{
											text-transform: uppercase;
											color: #fff;
										}

										.sess li{
											position: relative;
										}

										.sess li a{
											line-height: 20px;
											display: inline-block;
										}

										.sess .ses{
											border-radius:15px;
											display: none;
											position: absolute;
											top: 0;
											left: 100%;
											width: 120px;
											background-color: #eee;
											padding: 5px 20px;
										}
										
										.sess li:hover>.ses{
											display: block;
										}

										.sess>li>.ses{
											top: 20px;
											left: 0;
										}
									</style>
								<ul class="sess">
								<li><span><?php echo $_SESSION['email'];?></span>
									<ul class="ses">
										<li><a href="dangxuat.php"><i class="fa fa-sign-out-alt">Đăng xuất</i></a></li>
									</ul>
								</li>
								</ul>
								<?php
							} 
							else {
							?>
					<ul class="nav navbar-nav navbar-right">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-right: 5px" data-toggle="modal" data-target="#myModal"
						 id="singup">
							<li class="fa fa-user-plus"></li>Đăng Ký</button>
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-right: 5px" id="cccc">
							<li class="fa fa-user">Đăng Nhập</li>
						</button>
					</ul>
							<?php } ?>
					<?php 
                        include_once 'chucnang/giohang/giohangcuaban.php';
                    ?>
				</div>
			</nav>
		</header>

		<main>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<?php
                        include_once './chucnang/sanpham/danhmucsp.php';
                        include_once './chucnang/quangcao/quangcao.php';
                        include_once './chucnang/thongke/thongke.php';
                     ?>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
						<?php
                        include_once './chucnang/slideshow/slideshow.php ' 
                        ?>

						<div class="row" id="banner-r">
							<div class="banner-r-item col-md-6 col-sm-12 col-12">
								<img class="img-fluid" src="images/danh-gia-samsung-galaxy-note-7r-tan-trang-man-hinh-huca.jpg" style="height: 186px;width: 100%">
							</div>
							<div class="banner-r-item col-md-6 col-sm-12 col-12">
								<img class="img-fluid" src="images/Danh-gia-oppo-r1-1.jpg" style="height: 186px;width: 100%">
							</div>
						</div>
						<?php
                        include_once './chucnang/slideshow/slideshow.php ' 
                        ?>
						<section>
						
                        <div id="main">
                           <?php
                            if (isset($_GET['page_layout'])) {
                                switch($_GET['page_layout']){
                                    case "chitiet":include_once('./chucnang/sanpham/chitietsp.php');
                                    break;
                                    case "danhsachsp":include_once('./chucnang/sanpham/danhsachsp.php');
                                    break;
                                    case "hoanthanh":include_once('./chucnang/giohang/hoanthanh.php');
                                    break;                                
                                    case 'danhsachtimkiem':include_once('./chucnang/timkiem/danhsachtimkiem.php');
                                    break;
                                    case "muahang":include_once('./chucnang/giohang/muahang.php');
                                    break;
                                    case "giohang":include_once('./chucnang/giohang/giohang.php');
									break;
									case "sosanh":include_once('./chucnang/sosanh/sosanh.php');
									break;
                                }
                            }
                            else {
                                include_once('./chucnang/sanpham/gioithieusp.php');
                            }
                           ?>
						</section>
					</div>
				</div>
		</main>

		<footer>
			<nav class="navbar navbar-expand-md navbar-while bg-while" style="margin-top: 10px;color: green" id="footer">
				<div class="container">
					<div class="row">
						<div class="col-xs-3 col-sm-3 col-md-3">
							<h4>THD</h4>
							<p>Phục vụ chất lượng sản phẩm tốt đảm bảo tiêu chí người dùng</p>
						</div>
						<div class="col-xs-3 col-sm-3 col-md-3">
							<h4>Số Điện Thoại Liên Hệ</h4>
							<p>0961207197</p>
						</div>
						<div class="col-xs-3 col-sm-3 col-md-3">
							<h4>Địa Chỉ</h4>
							<p>Số 141 Thanh Xuân Hà Đông Hà Nội</p>
						</div>
						<div class="col-xs-3 col-sm-3 col-md-3">
							<h4>Giám đốc điều hành</h4>
							<p>Trần Thị Bình</p>
						</div>
					</div>
				</div>
			</nav>
		</footer>
		<a href="#0" class="cd-top js-cd-top">
			<i class="fa fa-chevron-up"></i>
		</a>
		<script src="js/main.js"></script>
		</div>
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title modal-left">Đăng Ký</h4>
						<button type="button" class="close right" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<div class="main-login main-center">
								<form method="post" role="form">
										<fieldset>
											<div class="form-group">
												<input class="form-control" placeholder="Tài khoản E-mail" name="emaildk" type="email" autofocus="" required="">
											</div>
											<div class="form-group">
												<input class="form-control" placeholder="Mật khẩu" name="mkdk" type="password" required="">
											</div>
											<div class="form-group">
												<input class="form-control" placeholder="Số điện thoại" name="sdtdk" type="text" required="">
											</div>
											<br/>
											<input type="submit" name="dangky" value="Đăng ký" class="btn btn-primary">
											<input type="reset" name="resset" value="Làm mới" class="btn btn-primary" />							
										</fieldset>
									</form>
						</div>
							<?php
								if (isset($_POST['dangky'])) {
									$emaildk=$_POST['emaildk'];
									$mkdk=$_POST['mkdk'];
									$sdtdk=$_POST['sdtdk'];
									$quyen=1;
									if (isset($emaildk) && isset($mkdk) && isset($sdtdk)) {
										$sqlup="insert into thanhvien (sdt,email,mat_khau,quyen_truy_cap) values ('$sdtdk','$emaildk','$mkdk','$quyen')";
										$query=mysqli_query($conn,$sqlup);
									}
									echo "Đăng ký thành công";
								}
							?>
						<div class="modal-footer moda-relative">
							<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end modal sing up -->
		<div id="popup-full">

		</div>
		<div id="popup">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title modal-left">Đăng Nhập</h4>
					<button type="button" class="close right" data-dismiss="modal" id="close">&times;</button>
				</div>
				<div class="modal-body">
					<div class="main-login main-center">
					<?php
                    if (!isset($_SESSION['email'])) {
                        // nếu không tồn tại phiên làm việc sẽ ở lại trang index
                    ?>
						<form method="post" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Tài khoản E-mail" name="email" type="email" autofocus="" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mật khẩu" name="mk" type="password" required="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="check" type="checkbox" value="Remember Me">Ghi nhớ
                                    </label>
                                </div>
                                <br/>
                                <input type="submit" name="submit" value="Đăng nhập" class="btn btn-primary">
                                <input type="reset" name="resset" value="Làm mới" class="btn btn-primary" />							
                            </fieldset>
                        </form>
							<?php
                    }
                    else {
						if ($row['quyen_truy_cap']==2) {
							header('location:quantri/quantri.php');
						}
					   else if($row['quyen_truy_cap']==1){ 
						header('location:index.php');
					   }
                        //nếu tồn tại sẽ cho nó nhảy tới trang quản trị
                    }
                        ?>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal" id="thoat">Đóng</button>
					</div>
				</div>
			</div>
		</div>
		<script>
		$(document).ready(function () {
			$('#cccc').click(function () {
				$('#popup-full').fadeToggle();
				$('#popup').fadeToggle();
			});
		});
		$(document).ready(function () {  
			$('#close').click(function () {  
				$('#popup-full').fadeOut();
				$('#popup').fadeOut();
			});
		});
		$(document).ready(function () {  
			$('#thoat').click(function () {  
				$('#popup-full').fadeOut();
				$('#popup').fadeOut();
			});
		});
		</script>
</body>

</html>