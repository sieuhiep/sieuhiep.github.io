<?php
  $dbhost="localhost";
  $dbusers="root";
  $pass="";
  $data="duan";
  $conn = mysqli_connect($dbhost,$dbusers,$pass,$data);
  if ($conn) {
      $setLang = mysqli_query($conn,"SET NAMES 'utf8'");
    // kiểm tra tiếng việt
  }
  else {
      die("ket noi that bai".mysqli_connect_error());
  }
?>