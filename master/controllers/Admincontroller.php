<?php 
	include_once('models/Admin.php');
	class Admincontroller {
		private $model;

		public function __construct(){
			$this->model = new Admin();
		}
		public function index(){
			$thongbao = '';
		    if (!isset($_SESSION['login'])) {
		        header('location: index.php?mod=Admin&act=login');
		    }
		    foreach ($_SESSION as $key => $value) {
		    	if (isset($value['hoten'])) {

		    		if (!$value['hoten']=='') {
		    			$thongbao = 'Đã có người mua hàng !';

		    		}
		    	}
		    }
			$data = $this->model->getAllproduct();
			$data1= $this->model->getdm();
			include_once('views/admin/index.php');
		}
		public function add(){
			if (!isset($_SESSION['login'])&&$_SESSION['level']==2) {
		        header('location: index.php?mod=Admin&act=login');
		    }
			if (isset($_POST['submit'])) {
				 $img = $_FILES['img']['name'];
        			$tmp_name = $_FILES['img']['tmp_name'];
					move_uploaded_file($tmp_name,'./img/'.$img);
				$this->model->dem($_POST['masp']);
				if ($this->model->dem($_POST['masp'])==0) {
					$this->model->themmoi($_POST['masp'],$_POST['id_dm'],$_POST['name'],$_POST['color'],$_POST['price'],$img,$_POST['slg']);
					header('location: index.php?mod=Admin');
					setcookie('add','Thêm mới thành công',time()+2);
				} else {
					$maerr = "Mã sản phẩm đã tồn tại";
					setcookie('err','Thêm mới thành công',time()+2);
					header('location: index.php?mod=Admin');
				}
			}
		}
		public function adddm(){
			if (!isset($_SESSION['login'])&&$_SESSION['level']==2) {
		        header('location: index.php?mod=Admin&act=login');
		    }
			if (isset($_POST['submit'])) {
				$this->model->demdm($_POST['name']);
				if ($this->model->demdm($_POST['name'])==0) {
					$this->model->themmoidm($_POST['name']);
					header('location: index.php?mod=Admin&act=danhmuc');
					setcookie('add','Thêm mới thành công',time()+2);
					
				} else {
					$maerrr = "Danh mục sản phẩm đã tồn tại";
					setcookie('errr','Thêm mới thành công',time()+2);
					header('location: index.php?mod=Admin&act=danhmuc');
				}
			}
		}
			public function addtv(){
			if (!isset($_SESSION['login'])&&$_SESSION['level']==2) {
		        header('location: index.php?mod=Admin&act=login');
		    }
			if (isset($_POST['submit'])) {
				$this->model->demtv($_POST['name']);
				if ($this->model->demtv($_POST['name'])==0) {
					
					$this->model->themmoitv($_POST['name'],md5($_POST['pass']),$_POST['chucvu']);
					header('location: index.php?mod=Admin&act=thanhvien');
					setcookie('add','Thêm mới thành công',time()+2);
						
				} else {
					$maerrrr = "Tên tài khoản đã tồn tại";
					setcookie('errrr','Thêm mới thành công',time()+2);
					header('location: index.php?mod=Admin&act=thanhvien');
				}
			}
		}


		//-----------------> Xóa và cho vào thùng rác 
		public function delete(){
			if (!isset($_SESSION['login'])&&$_SESSION['level']==2) {
		        header('location: index.php?mod=Admin&act=login');
		    }
			$id = $_GET['id'];
			$data=$this->model->getOne($id);
			$this->model->thungrac($data['mahang'],$data['tenhang'],$data['mausac'],$data['price'],$data['img']);		
			$this->model->delete($id);
			setcookie("delete","Bạn đã xóa thành công",time()+2,"/");

			header('location: index.php?mod=Admin');
		} ///---------------------->
		//-----> xóa danh mục
		public function deletedm(){
			if (!isset($_SESSION['login'])&&$_SESSION['level']==2) {
		        header('location: index.php?mod=Admin&act=login');
		    }
			$id = $_GET['id'];
				
			$this->model->deletedm($id);
			setcookie("deletedm","Bạn đã xóa thành công",time()+2,"/");

			header('location: index.php?mod=Admin&act=danhmuc');
		}
		public function deletetv(){
			if (!isset($_SESSION['login'])&&$_SESSION['level']==2) {
		        header('location: index.php?mod=Admin&act=login');
		    }
			$id = $_GET['id'];
				
			$this->model->deletetv($id);
			setcookie("deletedm","Bạn đã xóa thành công",time()+2,"/");

			header('location: index.php?mod=Admin&act=thanhvien');
		} ///---------------------->
		//-------------> xóa khách hàng
		public function xoa(){
			if (!isset($_SESSION['login'])&&$_SESSION['level']==2) {
		        header('location: index.php?mod=Admin&act=login');
		    }
			$id = $_GET['id'];
			$arr=$this->model->chitiet($id);$_SESSION['$id']=$arr;

			foreach ($arr as $key => $value) {

				$arr_new[$value['id_sp']]['id_sp'] = $value['id_sp'];
				$arr_new[$value['id_sp']]['soluong'] = $value['soluong'];
			}	
				
				echo "<pre>";
				print_r($arr_new) ;
				foreach ($arr_new as $key => $value) {
					$a=$this->model->getsoluong($value['id_sp']);
					$sl = $value['soluong'] + $a['soluong']; 
					$this->model->updatesoluong($value['id_sp'],$sl);
				}

			$this->model->xoa($id);
			$this->model->xoact($id);
			$this->model->updateslg($id,$_SESSION[$id]['tongsl']['soluong']);
			setcookie('xoa','Thêm mới thành công',time()+2);
			header('location: index.php?mod=Admin&act=user');
		}
		///--------------->


		public function update(){
			if (!isset($_SESSION['login'])&&$_SESSION['level']==2) {
		        header('location: index.php?mod=Admin&act=login');
		    }
			if(isset($_POST['masp'])) {
				$id = $_POST['masp'];
			}
			if (isset($_POST['update'])) {
				if ($_FILES['img']['name']=="") {
					$img=$_POST['img'];
					$this->model->update($id,$_POST['id_dm'],$_POST['name'],$_POST['color'],$_POST['price'],$img,$_POST['slg']);
				}
				else {
					 $img = $_FILES['img']['name'];
        			$tmp_name = $_FILES['img']['tmp_name'];
					move_uploaded_file($tmp_name,'./img/'.$img);	
				$this->model->update($id,$_POST['id_dm'],$_POST['name'],$_POST['color'],$_POST['price'],$img,$_POST['slg']);
				setcookie('update','Thêm mới thành công',time()+2);
				}
				header('location: index.php?mod=Admin');
			}
		}
			public function updatedm(){
				if (!isset($_SESSION['login'])&&$_SESSION['level']==2) {
		        header('location: index.php?mod=Admin&act=login');
		    }
			if(isset($_POST['id_dm'])) {
				$id = $_POST['id_dm'];
			}
			if (isset($_POST['updatedm'])) {
				$this->model->updatedm($id,$_POST['name']);
				setcookie('update','Thêm mới thành công',time()+2);
				header('location: index.php?mod=Admin&act=danhmuc');
			}
		}
		public function updatetv(){
				if (!isset($_SESSION['login'])&&$_SESSION['level']==2) {
		        header('location: index.php?mod=Admin&act=login');
		    }
			if(isset($_POST['id'])) {
				$id = $_POST['id'];
			}
			if (isset($_POST['updatetv'])) {
				$this->model->updatetv($id,$_POST['name'],md5($_POST['pass']));
				setcookie('update','Thêm mới thành công',time()+2);
				header('location: index.php?mod=Admin&act=thanhvien');
			}
		}
		public function login(){
			$err='';
			if (isset($_SESSION['login'])) {
					header('location: index.php?mod=Admin&act=index');
				} else {
				if (isset($_POST['submit'])) {
					$user = $_POST['user'];
					$this->model->login($user);
					if ($user==$this->model->login($user)['user']&& md5($_POST['password'])==$this->model->login($user)['password']) {
						$_SESSION['login'] = $this->model->login($user)['user'];
						$_SESSION['level'] = $this->model->login($user)['level'];
					} else {
						$err = "Tài khoản hoặc mật khẩu sai hoặc bạn không có quyền truy cập !";
					}
				}

			}

			$numb = $this->model->demdh();
			// echo $numb;
			if (isset($_SESSION['login'])) {
				// foreach ($_SESSION as $key => $value) {
			 //    	if (isset($value['hoten'])) {

			    		if ($numb>0) {
							setcookie("thongbao","Bạn đã xóa thành công",time()+2,"/");
			    	// 	}
			    	// }
			    }
			
		 	header("location: index.php?mod=Admin");
			}
			include_once('views/admin/login.php');
		}
		public function logout(){
			session_destroy();
			header('Location: index.php?mod=Admin&act=login');
		}
		//--------------------> Load quản lý người dùng
		public function user(){
			if (!isset($_SESSION['login'])) {
		        header('location: index.php?mod=Admin&act=login');
		    }
			$data=$this->model->hoadon();
			
			include_once('views/admin/index.php');
		}
		public function danhmuc(){
			if (!isset($_SESSION['login'])) {
		        header('location: index.php?mod=Admin&act=login');
		    }
			$data1= $this->model->getdm();
			
			include_once('views/admin/index.php');
		}

		public function thanhvien(){
			if (!isset($_SESSION['login'])) {
		        header('location: index.php?mod=Admin&act=login');
		    }
			$data2= $this->model->gettv();
			
			include_once('views/admin/index.php');
		}

		public function cthoadon(){
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$arr=$this->model->chitiet($id);
			}
			
			include_once('views/admin/cthoadon.php');
		}
		///-------------------->


		//-------------------> thùng rác
		public function recyclebin(){
			if (!isset($_SESSION['login'])&&$_SESSION['level']==2) {
		        header('location: index.php?mod=Admin&act=login');
		    }
			$data = $this->model->getThungrac();
			include_once('views/admin/index.php');
		}
		public function refresh(){
			if (!isset($_SESSION['login'])&&$_SESSION['level']==2) {
		        header('location: index.php?mod=Admin&act=login');
		    }
			$id = $_GET['id'];
			$data=$this->model->getThungracOne($id);

			$this->model->refresh($data['mahang'],$data['tenhang'],$data['mausac'],$data['price'],$data['img']);
			$this->model->deleteRecyclebin($id);
			setcookie('refresh','Thêm mới thành công',time()+2);
			header('location: index.php?mod=Admin&act=recyclebin');
		}

		public function deleteRecyclebin(){
			$id = $_GET['id'];
			$this->model->deleteRecyclebin($id);
			// setcookie('deleteRecyclebin','Thêm mới thành công',time()+2);
			header('location: index.php?mod=Admin&act=recyclebin');
		}
		///--------------------->

		//------------------------> Email
		public function send_email(){
			if (isset($_POST['send'])) {
				$email_recive = $_POST['email'];
				$subject = $_POST['tieude'];
				$contents = $_POST['content'];
				$info = $_FILES['img'];				
				$file = "img/".$info['name'];
				setcookie("email","Bạn đã xóa thành công",time()+2,"/");
		    	header('Location: index.php?mod=Admin&act=user');
		        //https://www.google.com/settings/security/lesssecureapps
		        // Khai báo thư viên phpmailer
		        require "phpmail/PHPMailerAutoload.php";
		        require "phpmail/class.phpmailer.php";
		        // Khai báo tạo PHPMailer
		        $mail = new PHPMailer();
		        //Khai báo gửi mail bằng SMTP
		        $mail->IsSMTP();
		        //Tắt mở kiểm tra lỗi trả về, chấp nhận các giá trị 0 1 2
		        // 0 = off không thông báo bất kì gì, tốt nhất nên dùng khi đã hoàn thành.
		        // 1 = Thông báo lỗi ở client
		        // 2 = Thông báo lỗi cả client và lỗi ở server
		        // To load the French version
		        $mail->setLanguage('vi', '/optional/path/to/language/directory/');
		        $mail->SMTPDebug  = 0;
		        $mail->CharSet="UTF-8";
		        $mail->Debugoutput = "html"; // Lỗi trả về hiển thị với cấu trúc HTML
		        $mail->Host       = "smtp.gmail.com"; //host smtp để gửi mail
		        $mail->Port       = 587; // cổng để gửi mail
		        $mail->SMTPSecure = "tls"; //Phương thức mã hóa thư - ssl hoặc tls
		        $mail->SMTPAuth   = true; //Xác thực SMTP
		        $mail->Username   = "sieuhiep12a1@gmail.com"; // Tên đăng nhập tài khoản Gmail 
		        $mail->Password   = "tiendaida11a6"; //Mật khẩu của gmail
		        $mail->SetFrom("tiendovantien32@gmail.com", "Tien"); // Thông tin người gửi
		        $mail->AddReplyTo("tiendovantien32@gmail.com","Tien");// Ấn định email sẽ nhận khi người dùng reply lại.
		        $mail->AddAddress($email_recive, 'Đỗ Văn Tiến');//Email của người nhận
		        $mail->Subject = $subject; //Tiêu đề của thư
		        $mail->MsgHTML($contents); //Nội dung của bức thư.
		        // $mail->MsgHTML(file_get_contents("email-template.html"), dirname(__FILE__));
		        // Gửi thư với tập tin html
		        $mail->AltBody = "Nội dung thư";//Nội dung rút gọn hiển thị bên ngoài thư mục thư.
		        $mail->AddAttachment($file);//Tập tin cần attach
		        //Tiến hành gửi email và kiểm tra lỗi
		        if(!$mail->Send()) {
		         // echo "Có lỗi khi gửi mail: " . $mail->ErrorInfo;
		            return false;
		        } else {
		            return true;
		          //echo "Đã gửi thư thành công!";
		        }
		    }

		}
		public function sms()
		{
			if (isset($_POST['send'])) {
				 $APIKey="EEF651CCDD96D4F2E6D35165FC240F";
				$SecretKey="09E2636C9D60CE3750C3F449E9E1EE";
				$YourPhone=$_POST['sdt'];
				$Content=$_POST['content'];
				$SendContent=urlencode($Content);
				setcookie("sms","Bạn đã xóa thành công",time()+2,"/");
				header('Location: index.php?mod=Admin&act=user');
	$data="http://rest.esms.vn/MainService.svc/json/SendMultipleMessage_V4_get?Phone=$YourPhone&ApiKey=$APIKey&SecretKey=$SecretKey&Content=$SendContent&SmsType=8";
	
	$curl = curl_init($data); 
	curl_setopt($curl, CURLOPT_FAILONERROR, true); 
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true); 
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
	$result = curl_exec($curl); 
		
	$obj = json_decode($result,true);
    if($obj['CodeResult']==100)
    {
        print "<br>";
        print "CodeResult:".$obj['CodeResult'];
        print "<br>";
        print "CountRegenerate:".$obj['CountRegenerate'];
        print "<br>";     
        print "SMSID:".$obj['SMSID'];
        print "<br>";
    }
    else
    {
        print "ErrorMessage:".$obj['ErrorMessage'];
    }
			}
		}
		///-------------------------->

		public function test(){
			
			include_once('views/admin/test.php');

		}

	
	}
 ?>
