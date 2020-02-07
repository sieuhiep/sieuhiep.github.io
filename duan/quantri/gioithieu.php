<?php
     if($_SESSION['level']==2){
         $rowhd=mysqli_num_rows(mysqli_query($conn,"select * from chitiet_hd"));
         $rowbl=mysqli_num_rows(mysqli_query($conn,"select * from blsanpham"));
         $rowtv=mysqli_num_rows(mysqli_query($conn,"select * from thanhvien"));
?>
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active"></li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Trang chủ quản trị</h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-blue panel-widget ">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large"><?php echo $rowhd; ?></div>
                    <div class="text-muted">Đơn hàng</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-orange panel-widget">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large"><?php echo $rowbl; ?></div>
                    <div class="text-muted">Bình luận</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-teal panel-widget">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large"><?php echo $rowtv; ?></div>
                    <div class="text-muted">Thành viên</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-red panel-widget">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large">3000.2k</div>
                    <div class="text-muted">Người xem</div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Giới thiệu</div>
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <p>Trần Thị Bình sinh ra và lớn lên như một vị thần</p>



                    <br/>
                    <p>Đây là hệ thống quản trị của website Thương mại điện tử do Trần Thị Bình xây dựng và phát triển</p>
                    <br/>
                    <p>Hệ thống quản trị này có các chức năng quản lý sau: <br/>
                        - Quản lý Thành viên 
                        <br/>
                        - Quản lý Danh mục sản phẩm 
                        <br/>
                        - Quản lý Sản phẩm 
                        <br/>
                        - ...</p>
                    <br/>
                    <p>Hệ thống đang trong quá trình hoàn thiện bởi các Chuyên gia Công nghệ web Trần Thị Bình và các đệ. Hệ thống vẫn tiếp tục được nâng cấp và cải tiến để cho người dùng được sử dụng những chức năng tốt nhất của hệ thống</p>
                    <br/>
                    <p>
                        <b>TTB</b></p>
                </div>
            </div>
        </div>
    </div>
</div><!--/.row-->
<?php 
    }
    else{
        header('location:../index.php');
        // khi không tồn tại phiên làm việc thì có thể quay lại
    }
?>