<?php
if($_SESSION['email']=="tiendovantien32@gmail.com" && $_SESSION['mat_khau']=="tiendaida"){
    $id=$_GET['id_qc'];
    $sqldm="select * from quangcao";
    $query=mysqli_query($conn,$sqldm);

    $sql="select * from quangcao where id_qc=$id";
    $querysp=mysqli_query($conn,$sql);
    $row =mysqli_fetch_array($querysp);
if (isset($_POST['submit'])) {
    $nguoi_cung_cap=$_POST['nguoi_cung_cap'];
    $sdt=$_POST['sdt'];
    $email=$_POST['email'];
    $ht=$_POST['ht'];
    if ($_FILES['anhqc']['name']=="") {
        $anh=$_POST['anh_qc']; // anh cu
        if (isset($nguoi_cung_cap) && isset($sdt) && isset($email) && isset($ht)) {
            $sqlup="update quangcao set nguoi_cung_cap='$nguoi_cung_cap',sdt='$sdt',email='$email',anh='$anh',ht='$ht' where id_qc=$id";
            $query=mysqli_query($conn,$sqlup);   
        }
    }
    else {
        $anh = $_FILES['anhqc']['name'];
        $tmp_name = $_FILES['anhqc']['tmp_name'];
        if (isset($nguoi_cung_cap) && isset($sdt) && isset($email) && isset($ht)) {
            move_uploaded_file ($tmp_name , 'anh/'.$anh);
            $sqlup="update quangcao set nguoi_cung_cap='$nguoi_cung_cap',sdt='$sdt',email='$email',anh='$anh',ht='$ht' where id_qc=$id";
            $query=mysqli_query($conn,$sqlup);
    
        }
    }
    header('location:quantri.php?page_layout=danhsachqc');
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
                    <h1 class="page-header">Sửa thông tin quảng cáo</h1>
                </div>
            </div><!--/.row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Sửa thông tin quảng cáo</div>
                        <div class="panel-body">

                            <form enctype="multipart/form-data" role="form" method="post">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tên nhà cung cấp</label>
                                        <input type="text" class="form-control"  name="nguoi_cung_cap" value="<?php echo $row['nguoi_cung_cap']; ?>" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Số điện thoại</label>
                                        <input type="text" class="form-control" name="sdt" value="<?php echo $row['sdt']; ?>" required="">
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>" required="">
                                    </div>

                                    <div class="form-group">
                                        <label>Ảnh</label>
                                        <input type="file" name="anhqc"><input type="hidden" name="anh_qc" value="<?php echo $row['anh']; ?>">		 
                                    </div>
                                    <div class="form-group">
                                        <label>Hiển thị</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="ht"
                                                <?php
                                                    if ($row['ht']==1) {
                                                        echo 'checked';
                                                    }
                                                ?>
                                                 id="optionsRadios1" value=1>Có
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="ht" id="optionsRadios2" value=0>Không
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit" >Cập nhật</button>
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