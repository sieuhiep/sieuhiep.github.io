<?php
                            if (isset($_GET['act'])) {
                                switch($_GET['act']){
                                    case "danhmuc":include_once('dmsanpham.php');
                                    break;
                                     case "thanhvien":include_once('thanhvien.php');
                                    break;
                                    case "recyclebin":include_once('recyclebin.php');
                                    break;
                                    case "user":include_once('user.php');
                                    break;                                
                                }
                            }
                            else {
                                include_once('sanpham.php');
                            }
                           ?>