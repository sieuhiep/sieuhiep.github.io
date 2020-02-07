<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 1 -  Admin </title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php?mod=Admin">TB-MOBI</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a >
                       Xin chào:<?php echo $_SESSION['login']; ?>
                    </a>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="active">
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>Quản lý<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a  href="index.php?mod=Admin">Danh sách mặt hàng</a>
                                </li>
                                <li>
                                    <a  href="index.php?mod=Admin&act=user">Danh sách hóa đơn</a>
                                </li>
                                 <li>
                                    <a href="index.php?mod=Admin&act=danhmuc">Danh mục sản phẩm</a>
                                </li>
                                            <?php 
                                            if ($_SESSION['level']=="2") {
                                                ?>
                                <li>
                                    <a  href="index.php?mod=Admin&act=recyclebin">Thùng rác</a>
                                </li>
                                
                            <?php } ?>
                            <li>
                                    <a  href="index.php?mod=Admin&act=thanhvien">Nhân viên</a>
                                </li>
                                <li>
                                    <a href="index.php?mod=Admin&act=logout">Đăng xuất</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
                  <!-- Trigger the modal with a button -->
                    
                <!-- <a href="index.php?mod=Admin&act=user"><?php echo $thongbao; ?></a> -->
                <div class="row"> 
                    <div class="col-md-12 col-md-offset-0"> 
                         <?php 
                        include_once('master_page.php');
                      ?>
                  </div> 
             </div>
                    
                <!-- /.row -->
            <!-- /.container-fluid -->
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    
    <?php if (isset($_COOKIE['add'])) { ?>
        <script>
            toastr.success('Thêm mới thành công !');
        </script>

    <?php } 

    ?>
    <?php if (isset($_COOKIE['update'])) { ?>
        <script>
            toastr.success('Sửa thành công !');
        </script>

    <?php } 

    ?>
    <?php if (isset($_COOKIE['err'])) { ?>
        <script>
            toastr.error('Sản phẩm đã tồn tại !');
        </script>

    <?php } 

     ?>
     <?php if (isset($_COOKIE['delete'])) { ?>
        <script>
            toastr.success(' Đã chuyển tới thùng rác !');
        </script>
    
    <?php } 

     ?>
    <?php if (isset($_COOKIE['thongbao'])) { ?>

        <script>
            toastr.success('Đã có người mua hàng !');
        </script>

    <?php } ?>
    <script>
        $(document).ready(function(){
            $('#myTable').DataTable();
        });
    </scr           ipt>
</body>

</html>
