<?php 

	include_once ('models/Connection.php');
	class Cart
	{
		private $conn;
		function __construct()
		{
			$connection = new connection();
			$this->conn = $connection->conn;
		}

		public function getAllproduct(){
			$data = array();

			$query = "SELECT * FROM tblsanpham order by id DESC limit 8";


			$result = $this->conn->query($query);

			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;		
		}

		public function getsanpham($type1){
			$data = array();

			$query = "SELECT * FROM tblsanpham where id_dm='".$type1."'";


			$result = $this->conn->query($query);

			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;		
		}
		public function getall(){
			$data = array();

			$query = "SELECT * FROM tblsanpham ";


			$result = $this->conn->query($query);

			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;		
		}
			public function getdm(){
			$data1 = array();

			$query = "SELECT * FROM dmsanpham";


			$result = $this->conn->query($query);

			while ($row = $result->fetch_assoc()) {
				$data1[] = $row;
			}
			return $data1;		
		}
		public function getiphonei(){
			$item = array();

			$query = "SELECT * FROM tblsanpham WHERE id_dm = 1 order by id DESC limit 4";


			$result = $this->conn->query($query);

			while ($row = $result->fetch_assoc()) {
				$item[] = $row;
			}
			return $item;
		}
		public function getsamsung1(){
			$item1 = array();

			$query = "SELECT * FROM tblsanpham WHERE id_dm = 2 order by id DESC limit 4";


			$result = $this->conn->query($query);

			while ($row = $result->fetch_assoc()) {
				$item1[] = $row;
			}
			return $item1;
		}
		public function getnokia1(){
			$item2 = array();

			$query = "SELECT * FROM tblsanpham WHERE id_dm = 6 order by id DESC limit 4";


			$result = $this->conn->query($query);

			while ($row = $result->fetch_assoc()) {
				$item2[] = $row;
			}
			return $item2;
		}
		public function getsearch($search)
		{
			$data = array();
			$stext=trim($search);
    		$arr_stextnew=explode(' ',$stext);
    		$stext=implode('%',$arr_stextnew);
    		$stext='%'.$stext.'%';
			$query = "SELECT * FROM tblsanpham where tenhang like ('$stext')";

			$result = $this->conn->query($query);

			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}
		//lấy áo mu
		// public function getMu(){
		// 	$data = array();

		// 	$query = "SELECT * FROM mu";


		// 	$result = $this->conn->query($query);

		// 	while ($row = $result->fetch_assoc()) {
		// 		$data[] = $row;
		// 	}
		// 	return $data;
		// }

		public function addcart($id){
			$query = "SELECT * FROM tblsanpham WHERE mahang = '".$id."' ";

			$result = $this->conn->query($query);
			$row = $result->fetch_assoc();
			return $row;
		}
		// public function addmu($id){
		// 	$query = "SELECT * FROM mu WHERE mahang = '".$id."' ";

		// 	$result = $this->conn->query($query);
		// 	$row = $result->fetch_assoc();
		// 	return $row;
		// }
		public function detail($id){

			$query = "SELECT * FROM tblsanpham WHERE mahang = '".$id."' ";

			$result = $this->conn->query($query);
			$row = $result->fetch_assoc();
			return $row;
		}
		public function detail1($type1)
		{
			$detail = array();

			$query = "SELECT * FROM tblsanpham WHERE id_dm = '".$type1."' order by id DESC limit 4";


			$result = $this->conn->query($query);

			while ($row = $result->fetch_assoc()) {
				$detail[] = $row;
			}
			return $detail;
		}
		// vứt vào bảng hóa đơn
		public function insert($mahoadon,$hoten,$sdt,$email,$diachi,$tongtien){
	 		$query = "INSERT INTO tblhoadon (mahoadon,hten,sdt,email,diachi,tongtien) 
	 		VALUES ('".$mahoadon."','".$hoten."','".$sdt."','".$email."','".$diachi."','".$tongtien."')" ;
	 		$result = $this->conn->query($query);	 		
	 	}
	 	//vứt vào bảng chi tiết
	 	public function chitiet($mahd,$mahang,$tenhang,$soluong,$price,$thanhtien,$thieu){
			$query = "INSERT INTO tblchitiet (id_hoadon,id_sp,tensp,soluong,dongia,thanhtien,thieu)
			VALUES ('".$mahd."','".$mahang."','".$tenhang."','".$soluong."','".$price."','".$thanhtien."','".$thieu."')" ;
			$result = $this->conn->query($query);

		}
		//lấy số lượng mã hàng 
		public function number($id){
			$query = "SELECT soluong FROM tblsanpham WHERE mahang = '".$id."'";
			$result = $this->conn->query($query);
			$row = $result->fetch_assoc();
			return $row;
		}
		// cập nhật số lượng sản phẩm 
		public function updateslg($id,$slg){
			$que = "UPDATE tblsanpham SET soluong = '".$slg."' WHERE mahang = '". $id ."'";
			$re = $this->conn->query($que);

		}
		public function getiphone(){
			$data = array();

			$query = "SELECT * FROM tblsanpham WHERE id_dm = 1";


			$result = $this->conn->query($query);

			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}
		public function getsamsung(){
			$data = array();

			$query = "SELECT * FROM tblsanpham WHERE id_dm = 2";


			$result = $this->conn->query($query);

			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}
		public function getnokia(){
			$data = array();

			$query = "SELECT * FROM tblsanpham WHERE id_dm = 6";
			$result = $this->conn->query($query);

			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}
	}


 ?>