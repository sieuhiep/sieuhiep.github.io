<?php
                            if (isset($_GET['act'])) {
                                switch($_GET['act']){
                                    case "iphone":include_once('list.php');
                                    break;
                                    case "samsung":include_once('list.php');
                                    break;
                                    case "nokia":include_once('list.php');
                                    break;
                                    case "search":include_once('search.php');
                                    break;
                                    case 'detail':include_once('detail.php');                         	
                                    break;
                                    case 'cart':include_once('cart.php');
                                    break;
                                    case 'order_next':include_once('order-next.php');
                                    break;
                                    case 'sanpham':include_once('list.php');
                                    break; 
                                     case 'all':include_once('list.php');
                                    break;                                    
                                }
                            }
                            else {
                                include_once('gioithieu.php');
                            }
                           ?>