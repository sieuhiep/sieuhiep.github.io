<?php
if($_SESSION['level']==2){
    $id=$_GET['idtv'];
    $sql="select * from thanhvien where id_thanhvien=$id";
    $querysp=mysqli_query($conn,$sql);
    $row =mysqli_fetch_array($querysp);
if (isset($_POST['submit'])) {
    $level=$_POST['level'];
    if (isset($level)) {
        $sql="update thanhvien set quyen_truy_cap='$level' where id_thanhvien=$id";
        $query=mysqli_query($conn,$sql);
    }
    header('location:quantri.php?page_layout=danhsachtv');
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
                    <h1 class="page-header">Sửa thông tin thành viên</h1>
                </div>
            </div><!--/.row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Sửa thông tin thành viên</div>
                        <div class="panel-body">

                            <form method="post" enctype="multipart/form-data" role="form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control"  name="email" value="<?php echo $row['email'] ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Số điện thoại</label>
                                        <input type="text" class="form-control" name="gia_sp" value="<?php echo $row['sdt'] ?>" disabled>
                                    </div>

                                    <div class="form-group">
                                        <label>Chức vụ</label>
                                        </br>
                                        <select name="level" valua="">
                                            
                                            <option value="1" > Thành Viên </option>
                                            <option value="2" > Quản Lý </option>
                                        </select>
                                   
                                    </div>
                                </div>
                                
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit">Cập nhật</button>
                                <button type="reset" class="btn btn-default" name="reset">Làm mới</button>
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