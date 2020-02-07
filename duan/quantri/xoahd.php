<?php
session_start();
 if($_SESSION['level']==2){ //kiểm tra đang hoạt động của admin ms cho thực hiện chức năng
    $id=$_GET['id'];
    include_once('ketnoi.php');
    $sql="delete from chitiet_hd where id_ct_hd='$id'";
    $query=mysqli_query($conn,$sql);
     header('location: quantri.php?page_layout=cthd');
 }
 else {
      header('location:index.php');
 }
?>