<?php
session_start();
 if($_SESSION['level']==2){ //kiểm tra đang hoạt động của admin ms cho thực hiện chức năng
    include_once('ketnoi.php');
     $id=$_GET['id'];
    $sql="delete from blsanpham where id_bl='$id'";
    $query=mysqli_query($conn,$sql);
    //  header('location: quantri.php?page_layout=danhsachbl');
 }
 else {
    //   header('location:index.php');
 }
?>