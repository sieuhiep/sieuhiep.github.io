<?php
session_start();
 if($_SESSION['email']=='tiendovantien32@gmail.com' && $_SESSION['mat_khau']=="tiendaida"){ //kiểm tra đang hoạt động của admin ms cho thực hiện chức năng
    $id=$_GET['id_qc'];
    include_once('ketnoi.php');
    $sql="delete from quangcao where id_qc='$id'";
    $query=mysqli_query($conn,$sql);
     header('location: quantri.php?page_layout=danhsachqc');
 }
 else {
      header('location:index.php');
 }
?>