<?php
session_start();
 if($_SESSION['level']==2){ //kiểm tra đang hoạt động của admin ms cho thực hiện chức năng
    $id=$_GET['id'];
    include_once('ketnoi.php');
    $sql="delete from dmsanpham where id_dm='$id'";
    $query=mysqli_query($conn,$sql);
     header('location: quantri.php?page_layout=danhsachdm');
 }
 else {
      header('location:index.php');
 }
?>