<?php
session_start();
if($_SESSION['level']==2){
    include_once('ketnoi.php');
     $id=$_GET['idd'];
     $ht=1;
     $sql = "select * from quangcao where id_qc=$id";
     $query=mysqli_query($conn,$sql);
     $row = mysqli_fetch_array($query);
     $sqll="update quangcao set ht='$ht' where id_qc=$id";
     $queryy=mysqli_query($conn,$sqll);
       header('location: quantri.php?page_layout=danhsachqc');
    }
    else {
        header('location:../index.php');
    }
?>