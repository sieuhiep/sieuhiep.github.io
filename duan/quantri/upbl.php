<?php
session_start();
if($_SESSION['level']==2){
    include_once('ketnoi.php');
     $id=$_GET['idd'];
     $ht=1;
     $sql = "select * from blsanpham where id_bl=$id";
     $query=mysqli_query($conn,$sql);
     $row = mysqli_fetch_array($query);
     $sqll="update blsanpham set ht='$ht' where id_bl=$id";
     $queryy=mysqli_query($conn,$sqll);
       header('location: quantri.php?page_layout=danhsachbl');
    }
    else {
        header('location:../index.php');
    }
?>