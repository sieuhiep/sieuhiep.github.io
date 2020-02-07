<?php 
	include_once('models/Cart.php');
	class Cartcontroller {

		private $model;
		public function __construct(){
		 	$this->model = new cart();
		}
		public function index(){
			$data = $this->model->getAllproduct();
			$item = $this->model->getiphonei();
			$item1 = $this->model->getsamsung1();	
			$item2 = $this->model->getnokia1();
			$data1=$this->model->getdm();
			// $arr = $this->model->getMu();
			include_once('views/cart/index.php');
		}
		public function all()
		{
			$data = $this->model->getall();
			$data1=$this->model->getdm();
			include_once('views/cart/index.php');	
		}
		public function sanpham()
		{
			$type1=$_GET['type1'];
			$data = $this->model->getsanpham($type1);
			$data1=$this->model->getdm();
			include_once('views/cart/index.php');	
		}
		public function iphone(){

			$data = $this->model->getiphone();
			$data1=$this->model->getdm();
			include_once('views/cart/index.php');	
		}
		public function samsung(){
			$data = $this->model->getsamsung();
			$data1=$this->model->getdm();
			include_once('views/cart/index.php');	
		}
		public function nokia(){
			$data = $this->model->getnokia();
			$data1=$this->model->getdm();
			include_once('views/cart/index.php');	
		}
		public function addcart(){

			$id = $_GET['masp'];
			$data = $this->model->addcart($id);
			if (!isset($_SESSION[$id])) {
				$_SESSION[$id] = $data;
				$_SESSION[$id]['soluong'] = 1;
				$_SESSION[$id]['thanhtien'] = $_SESSION[$id]['soluong'] * $_SESSION[$id]['price'] ;
				$_SESSION[$id]['hoten']='';
				$_SESSION[$id]['email']='';
				$_SESSION[$id]['phone']='';
				$_SESSION[$id]['adress']='';
				
			} else {
				$_SESSION[$id]['soluong'] = $_SESSION[$id]['soluong'] + 1;
				$_SESSION[$id]['thanhtien'] = $_SESSION[$id]['soluong'] * $_SESSION[$id]['price'] ;
			}
			setcookie("shopping","Bạn mua thành công",time()+2,"/");
			echo "<pre>";
			print_r($_SESSION);
			echo "<pre>";
			header('location: index.php');
		}
		// public function addmu(){
		// 	$id = $_GET['masp'];
		// 	$data = $this->model->addmu($id);
		// 	if (!isset($_SESSION[$id])) {
		// 		$_SESSION[$id] = $data;
		// 		$_SESSION[$id]['soluong'] = 1;
		// 		$_SESSION[$id]['thanhtien'] = $_SESSION[$id]['soluong'] * $_SESSION[$id]['price'] ;
		// 		$_SESSION[$id]['hoten']='';
		// 		$_SESSION[$id]['email']='';
		// 		$_SESSION[$id]['phone']='';
		// 		$_SESSION[$id]['adress']='';
		// 		$_SESSION[$id]['tongsl']='';	

		// 	} else {
		// 		$_SESSION[$id]['soluong'] = $_SESSION[$id]['soluong'] + 1;
		// 		$_SESSION[$id]['thanhtien'] = $_SESSION[$id]['soluong'] * $_SESSION[$id]['price'] ;
		// 	}
	
		// 	setcookie("shopping","Bạn mua thành công",time()+2,"/");
		// 	echo "<pre>";
		// 	print_r($_SESSION);
		// 	echo "<pre>";
		// 	header('location: index.php');
		// }
		public function search()
		{
			$search = $_POST['search'];
			$data = $this->model->getsearch($search);
			include_once('views/cart/index.php');	
		}
		public function cart(){
			$data1=$this->model->getdm();
			include_once('views/cart/index.php');
		}
		public function detail(){
			$id=$_GET['id'];
			$data=$this->model->detail($id);
			$type1=$_GET['type1'];
			$detail=$this->model->detail1($type1);
			$data1=$this->model->getdm();
			include_once('views/cart/index.php');
		}
		public function remove(){
			session_start();
			$id = $_GET['id'];
			unset($_SESSION[$id]);
			setcookie("remove","Remove successfully !",time()+2,"/");
			header('location: index.php?mod=Cart&act=cart');
		}
		public function delete(){
			$id = $_GET['ma'];

			if ($_SESSION[$id]['soluong']==1) {
				unset($_SESSION[$id]);
			} else {
				$_SESSION[$id]['soluong']=$_SESSION[$id]['soluong']-1;
				$_SESSION[$id]['thanhtien']=$_SESSION[$id]['soluong']*$_SESSION[$id]['price'];
			}

			header("location: index.php?mod=Cart&act=cart");
		}
		public function them(){
			$id = $_GET['ma'];
			$_SESSION[$id]['soluong']=$_SESSION[$id]['soluong']+1;
			$_SESSION[$id]['thanhtien'] = $_SESSION[$id]['soluong']* $_SESSION[$id]['price'];
			header("location: index.php?mod=Cart&act=cart");
		}
		public function order(){

			if (isset($_POST['submit'])) {

				$name = $_POST['name'];
				$phone = $_POST['phone'];
				$email = $_POST['email'];
				$adress = $_POST['adress'];
				$tongtien = 0;
				if ($_POST['name']==''||!preg_match("/^[a-zA-Z ]*$/",$name)||$_POST['phone']==''||!preg_match("/^[0-9-+]+$/",$phone)||$_POST['email']==''||!filter_var($email, FILTER_VALIDATE_EMAIL)||$_POST['adress']=='') {
					setcookie("msg3","Bạn mua thành công",time()+2,"/");
					header("location: index.php?mod=Cart&act=cart");
				} else {

						foreach ($_SESSION as $key => $value) {
							$tongtien = $tongtien + $value['thanhtien'];
						}

						// $this->model->insert($name,$sdt,$tongtien,$email,$diachi);
						setcookie("msg2","Bạn mua thành công",time()+2,"/");
						header("location: index.php?mod=Cart&act=order_next");
					}

				foreach ($_SESSION as $key => $value) {
					$_SESSION[$key]['hoten'] = $name;
					$_SESSION[$key]['email'] = $email;
					$_SESSION[$key]['phone'] = $phone;
					$_SESSION[$key]['adress'] = $adress;
				}
			}

		}
		public function order_next(){
			// date_default_timezone_set('Asia/Ho_Chi_Minh');
   //          $date=date('d/m/Y - H:i:s');
			include_once('views/Cart/index.php');
		}
		public function chitiet(){
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			$date=date('d/m/Y - H:i:s');
			foreach ($_SESSION as $key => $value) {
					$name = $_SESSION[$key]['hoten'] ;
					$email = $_SESSION[$key]['email'] ;
					$phone = $_SESSION[$key]['phone'] ;
					$adress = $_SESSION[$key]['adress'] ;
					$tongtien = $_SESSION[$key]['tongtien'];
					$_SESSION[$key]['time']=$date;				
					$_SESSION[$key]['tongsl']=$this->model->number($value['mahang']);
					if ($_SESSION[$key]['soluong']<=$_SESSION[$key]['tongsl']['soluong']) {
						$sll=$_SESSION[$key]['tongsl']['soluong']-$_SESSION[$key]['soluong'];
					}
					else  {
						$sll=0;
						$_SESSION[$key]['soluong']=$_SESSION[$key]['tongsl']['soluong'];
						
						header('location: index.php?mod=Cart&act=order_next');
					}
					$this->model->updateslg($value['mahang'],$sll);
				}
			$this->model->insert($date,$name,$phone,$email,$adress,$tongtien);
			foreach ($_SESSION as $key => $value) {
				$_SESSION[$key]['tongsl']=$this->model->number($value['mahang']);
					$tongsl=$_SESSION[$key]['tongsl']['soluong'];
					$soluong=$_SESSION['soluong'];
					$thieu=$_SESSION[$key]['tongsl']['soluong']-$_SESSION[$key]['soluong'];
					if ($thieu<0) {
						$thieu1=-1*$thieu;
					}
					else {
						$thieu1=0;
					}
				$this->model->chitiet($date,$value['mahang'],$value['tenhang'],$value['soluong'],$value['price'],$value['thanhtien'],$thieu1);
			}
			session_destroy();
			if ($sll==0) {
				setcookie("accept1","Bạn mua thành công",time()+2,"/");
			}
			else {
				setcookie("accept","Bạn mua thành công",time()+2,"/");
			}
			header('location: index.php');
		}
		public function testAjax(){
			$data=$this->model->getAllproduct();

		  	if(isset($_POST['total_cart_items'])){
				echo count($_SESSION['name']);
				exit();
		  	}

		  	if(isset($_POST['item_src'])){

			    $_SESSION['name'][]=$_POST['item_name'];
			    $_SESSION['price'][]=$_POST['item_price'];
			    $_SESSION['src'][]=$_POST['item_src'];
			    echo count($_SESSION['name']);
			    exit();
		  	}

		  	if(isset($_POST['showcart'])){
			    for($i=0;$i<count($_SESSION['src']);$i++)
			    {
			      echo "<div class='cart_items'>";
			      echo "<img src='".$_SESSION['src'][$i]."'>";
			      echo "<p>".$_SESSION['name'][$i]."</p>";
			      echo "<p>".$_SESSION['price'][$i]."</p>";
			      echo "</div>";
			    }
			    exit();	
		  	}
		  	include_once('views/Cart/testAjax.php');
		}

	}

?>