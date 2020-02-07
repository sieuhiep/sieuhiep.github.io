<?php 
if(isset($_SESSION['email']) && isset($_SESSION['mat_khau']){
    $id=$_GET['id_tv'];
    $sql = "select * from thanhvien where id_thanhvien=$id";
    $query=mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
    // kiem tra xem nhap du thong tin chua
    if (isset($_POST['submit'])) {
        $mktv=$_POST['mktv'];
        if (isset($mktv)) {
            $sql="update thanhvien set mat_khau='$mktv' where id_thanhvien=$id";
            $query=mysqli_query($conn,$sql);
            header('location:../../index.php');
        }
    }
?>
		           <div class="row">
                <ol class="breadcrumb">
                    <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                    <li class="active"></li>
                </ol>
            </div><!--/.row-->

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sửa Thông Tin Cá Nhân</h1>
                </div>
            </div><!--/.row-->


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Sửa Thông tin</div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <form role="form" method="post">

                                    <div class="form-group">
                                        <label>Sửa Mật Khẩu</label>
                                        <input class="form-control" type="text" name="mktv" value="<?php echo $row['mat_khau']; ?>" required="">
                                    </div>														
                                    <button type="submit" class="btn btn-primary" name="submit">Sửa</button>
                                    <button type="reset" class="btn btn-default">Làm mới</button>

                            </div>
                            </form>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->

        </div><!--/.main-->
        <?php 
    }
    else{
        header('location:../index.php');
        // khi không tồn tại phiên làm việc thì có thể quay lại
    }
?>
      
