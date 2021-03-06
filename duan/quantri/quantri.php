<?php
    ob_start();
    session_start();
    include_once('ketnoi.php');
// kiểm tra hàm kết nối và in ra tên người đăng nhập
    if(isset($_SESSION['email']) && isset($_SESSION['mat_khau'])){
        if($_SESSION['level']==2){
        // kiểm tra khi đang tồn tại phiên làm việc chwua đăng xuất người dùng sẽ k bị quay lại trang login
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>THD</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/datepicker3.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <!--Icons-->
        <script src="js/lumino.glyphs.js"></script>

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="quantri.php"><span>TTB</span>Admin</a>
                    <ul class="user-menu">
                        <li class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg><span style="color: white;">Xin chào,<?php if(isset($_SESSION['email'])) {echo $_SESSION['email'];} ?></span> <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Thông tin thành viên</a></li>
                                <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Cài đặt</a></li>
                                <li><a href="dangxuat.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Đăng xuất</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div><!-- /.container-fluid -->
        </nav>

        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
            <ul class="nav menu">
                <li><a href="quantri.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ quản trị</a></li>
                <li class="parent ">
                    <a href="?page_layout=danhsachtv">
                        <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Quản lý thành viên
                    </a>
                    <ul class="children collapse" id="sub-item-1">
                        <li>
                            <a href="#">
                                <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg>
                                Thêm mới
                            </a>
                        </li>
                    </ul>			
                </li>
                <li class="parent ">
                    <a href="?page_layout=danhsachdm">
                        <span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Quản lý danh mục
                    </a>
                    <ul class="children collapse" id="sub-item-2">
                        <li>
                            <a class="" href="quantri.php?page_layout=themdm">
                                <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Thêm mới
                            </a>
                        </li>

                    </ul>			
                </li>
                <li class="parent ">
                    <a href="?page_layout=danhsachsp">
                        <span data-toggle="collapse" href="#sub-item-3"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Quản lý sản phẩm
                    </a>
                    <ul class="children collapse" id="sub-item-3">
                        <li>
                            <a class="" href="quantri.php?page_layout=themsp">
                                <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Thêm mới
                            </a>
                        </li>

                    </ul>				
                </li>
                <li class="parent ">
                    <a href="?page_layout=cthd">
                        <span data-toggle="collapse" href="#sub-item-4"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Quản lý hóa đơn
                    </a>	
                </li>
                <li class="parent ">
                    <a href="?page_layout=danhsachbl">
                        <span data-toggle="collapse" href="#sub-item-5"><svg class="glyph stroked two messages"><use xlink:href="#stroked-two-messages"/></svg></span> Quản lý bình luận
                    </a>

                </li>
                <li class="parent ">
                    <a href="?page_layout=danhsachqc">
                        <span data-toggle="collapse" href="#sub-item-6"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Quản lý quảng cáo
                    </a>
                    <ul class="children collapse" id="sub-item-6">
                        <li>
                            <a class="" href="#">
                                <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Thêm mới
                            </a>
                        </li>

                    </ul>			
                </li>
                

                <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"/></svg> Cấu hình</a></li>

                <li role="presentation" class="divider"></li>
                <li><a href="dangxuat.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Đăng xuất</a></li>
            </ul>

        </div><!--/.sidebar-->

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
                <?php
                if (isset($_GET["page_layout"])) {
                    switch($_GET["page_layout"]){
                        case 'danhsachsp':include_once('danhsachsp.php');
                        break;
                        case 'danhsachdm':include_once('danhsachdm.php');
                        break;
                        case 'suadm':include_once('suadm.php');
                        break;
                        case 'suasp':include_once('suasp.php');
                        break;
                        case 'themsp':include_once('themsp.php');
                        break;
                        case 'themdm':include_once('themdm.php');
                        break;
                        case 'suatv':include_once('suatv.php');
                        break;
                        case 'danhsachbl':include_once('danhsachbl.php');
                        break;
                        case 'danhsachtv':include_once('danhsachtv.php');
                        break;
                        case 'danhsachqc':include_once('danhsachqc.php');
                        break;
                        case 'themqc':include_once('themqc.php');
                        break;
                        case 'suaqc':include_once('suaqc.php');
                        break;
                        case 'cthd':include_once('danhsachcthd.php');
                        break;
                        case 'chitiet':include_once('chitiethd.php');
                        break;
                    }
                }
                else {
                    include_once('gioithieu.php');
                }
                ?>

        </div>	<!--/.main-->

        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/chart.min.js"></script>
        <script src="js/chart-data.js"></script>
        <script src="js/easypiechart.js"></script>
        <script src="js/easypiechart-data.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>	
        <script src="js/bootstrap-table.js"></script>
        <link rel="stylesheet" href="css/bootstrap-table.css"/>
        <script>
            $('#calendar').datepicker({
            });

            !function ($) {
                $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
                    $(this).find('em:first').toggleClass("glyphicon-minus");
                });
                $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
            }(window.jQuery);

            $(window).on('resize', function () {
                if ($(window).width() > 768)
                    $('#sidebar-collapse').collapse('show')
            })
            $(window).on('resize', function () {
                if ($(window).width() <= 767)
                    $('#sidebar-collapse').collapse('hide')
            })
        </script>	
    </body>

</html>
<?php 
    }
}
    else{
        header('location:../index.php');
        // khi không tồn tại phiên làm việc thì có thể quay lại
    }
?>