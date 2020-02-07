<?php 
	include_once ('models/Connection.php');
	class Admin
	{
		private $conn;
		function __construct()
		{
			$connection = new connection();
			$this->conn = $connection->conn;
		}

		public function getAllproduct(){
			$data = array();

			$query = "SELECT * FROM tblsanpham";


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
		public function gettv(){
			$data2 = array();

			$query = "SELECT * FROM users";


			$result = $this->conn->query($query);

			while ($row = $result->fetch_assoc()) {
				$data2[] = $row;
			}
			return $data2;		
		}
		public function dem($id){
			$query = "SELECT count(*) as numb FROM tblsanpham WHERE mahang = '".$id."'";
			$result = $this->conn->query($query)->fetch_assoc();
			return $result['numb'];
		}
		public function demdm($name){
			$query = "SELECT count(*) as numb FROM dmsanpham WHERE ten_dm = '".$name."'";
			$result = $this->conn->query($query)->fetch_assoc();
			return $result['numb'];
		}
		public function demtv($name){
			$query = "SELECT count(*) as numb FROM users WHERE user = '".$name."'";
			$result = $this->conn->query($query)->fetch_assoc();
			return $result['numb'];
		}
		public function demdh(){
			$query = "SELECT count(*) as numb FROM tblhoadon ";
			$result = $this->conn->query($query)->fetch_assoc();
			return $result['numb'];
		}
		public function themmoi($masp,$id_dm,$name,$color,$price,$nameimg,$soluong){
			$que = "INSERT INTO tblsanpham (mahang,id_dm,tenhang,mausac,price,img,soluong) VALUES ('".$masp."','".$id_dm."','".$name."','".$color."','".$price."','".$nameimg."','".$soluong."') ";
			$result = $this->conn->query($que);
		}
		public function themmoidm($name){
			$que = "INSERT INTO dmsanpham (ten_dm) VALUES ('".$name."') ";
			$result = $this->conn->query($que);
		}
		public function themmoitv($name,$pass,$level){
			$que = "INSERT INTO users (user,password,level) VALUES ('".$name."','".$pass."','".$level."') ";
			$result = $this->conn->query($que);
		}
		public function delete($id){
			$query = "DELETE FROM tblsanpham WHERE mahang = '".$id."'";
			$re = $this->conn->query($query);
		}
		public function deletedm($id){
			$query = "DELETE FROM dmsanpham WHERE id_dm = '".$id."'";
			$re = $this->conn->query($query);
		}
		public function deletetv($id){
			$query = "DELETE FROM users WHERE id = '".$id."'";
			$re = $this->conn->query($query);
		}
		public function thungrac($mahang,$tenhang,$mausac,$price,$img){
			$query = "INSERT INTO recyclebin (mahang,tenhang,mausac,price,img)
			VALUES ('".$mahang."','".$tenhang."','".$mausac."','".$price."','".$img."')" ;
			$re = $this->conn->query($query);
		}
		public function getThungrac(){
			$query = "SELECT * FROM recyclebin";
			$result = $this->conn->query($query);
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			if (isset($data)) {
				return $data;
			}
		}
		public function getOne($id){
			$query = "SELECT * FROM tblsanpham WHERE mahang = '".$id."'";
			$result = $this->conn->query($query);
			$row = $result->fetch_assoc();
			return $row;
		}
		public function getThungracOne($id){
			$query = "SELECT * FROM recyclebin WHERE mahang = '".$id."'";
			$result = $this->conn->query($query);
			$row = $result->fetch_assoc();
				$data = $row;
			return $data;
		}
		public function deleteRecyclebin($id){
			$query = "DELETE FROM recyclebin WHERE mahang = '".$id."'";
			$re = $this->conn->query($query);
		}
		public function refresh($mahang,$tenhang,$mausac,$price,$img){
			$query = "INSERT INTO tblsanpham (mahang,tenhang,mausac,price,img)
			VALUES ('".$mahang."','".$tenhang."','".$mausac."','".$price."','".$img."')" ;
			$re = $this->conn->query($query);
		}

		////xóa khách hàng
		public function xoa($id){
			$query = "DELETE FROM tblchitiet WHERE id_hoadon = '".$id."'";
			$re = $this->conn->query($query);
		}
		public function xoact($id){
			$query = "DELETE FROM tblhoadon WHERE mahoadon = '".$id."'";
			$re = $this->conn->query($query);
		}
		public function loadct($id){
			$query = "SELECT  FROM tblchitiet WHERE id_hoadon = '".$id."'";
			$re = $this->conn->query($query);
			while ($row = $re->fetch_assoc()) {
				$data[] = $row;
			}
			if (isset($data)) {
				return $data;
			}
		}
		public function updateslg($id,$solg){
			$que = "UPDATE tblsanpham SET soluong = '".$solg."' WHERE mahang = '". $id ."'";
			$re = $this->conn->query($que);
		}
		//----------------->



		public function update($id,$id_dm,$name,$color,$price,$nameimg,$solg){
			$que = "UPDATE tblsanpham SET id_dm='".$id_dm."', tenhang = '".$name."',mausac = '".$color."',price = '".$price."',img = '".$nameimg."',soluong = '".$solg."' WHERE mahang = '". $id ."'";
			$re = $this->conn->query($que);
		}
		public function updatedm($id,$name){
			$que = "UPDATE dmsanpham SET ten_dm='".$name."' where id_dm='".$id."'";
			$re = $this->conn->query($que);
		}
		public function updatetv($id,$name,$pass){
			$que = "UPDATE users SET user='".$name."',password='".$pass."'  where id='".$id."'";
			$re = $this->conn->query($que);
		}
		public function login($user){
			$query = "SELECT * FROM users WHERE user = '".$user."'";
			$result = $this->conn->query($query);
			$row = $result->fetch_assoc();
			return $row;
		}

		public function hoadon(){
			$user_info = "SELECT * FROM tblhoadon ";
			
			$result = $this->conn->query($user_info);
				while ($row = $result->fetch_assoc()) {
					$data[] = $row;
				}

			if (isset($data)) {
				return $data;	
			}
		}
		public function chitiet($id){
			$query = "SELECT *
						FROM tblhoadon
						JOIN tblchitiet
						ON tblhoadon.mahoadon = tblchitiet.id_hoadon  
						WHERE tblhoadon.mahoadon = '".$id."' ";
			$result = $this->conn->query($query);
				while ($row = $result->fetch_assoc()) {
					$arr[] = $row;
				}

			return $arr;	
		}
		public function getsoluong($id){
			$data = array();
			$query = "SELECT * FROM tblsanpham WHERE mahang = '".$id."'";
			$result = $this->conn->query($query);
			$row = $result->fetch_assoc();
			return $row;	
		}
		public function updatesoluong($id,$sl){
			$que = "UPDATE tblsanpham SET soluong = '".$sl."' WHERE mahang = '". $id ."'";
			$re = $this->conn->query($que);
		}
		
	}

 ?>