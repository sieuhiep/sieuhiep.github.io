<?php
if($_SESSION['level']==2){
    $id=$_GET['idsp'];
    $sqldm="select * from dmsanpham";
    $query=mysqli_query($conn,$sqldm);

    $sql="select * from sanpham where id_sp=$id";
    $querysp=mysqli_query($conn,$sql);
    $row =mysqli_fetch_array($querysp);
if (isset($_POST['submit'])) {
    $tensp=$_POST['ten_sp'];
    $giasp=$_POST['gia_sp'];
    $baohanh=$_POST['bao_hanh'];
    $phukien=$_POST['phu_kien'];
    $tinhtrang=$_POST['tinh_trang'];
    $khuyenmai=$_POST['khuyen_mai'];
    $trangthai=$_POST['trang_thai'];
    $chitietsp=$_POST['chi_tiet_sp'];
    $id_dm=$_POST['id_dm'];
    $dac_biet=$_POST['dac_biet'];
    if ($_FILES['anh_sp']['name']=="") {
        $anh_sp=$_POST['anh_sp']; // anh cu
        if (isset($tensp) && isset($giasp) && isset ($baohanh) && 
        isset($phukien) && isset($tinhtrang) &&isset($khuyenmai) && 
        isset($trangthai) &&isset($chitietsp) && isset($dac_biet) ) {
            $sqlup="update sanpham set ten_sp='$tensp',gia_sp='$giasp',bao_hanh='$baohanh',khuyen_mai='$khuyenmai',"
            . "phu_kien='$phukien',tinh_trang='$tinhtrang',trang_thai='$trangthai',"
            ."chi_tiet_sp='$chitietsp',dac_biet='$dac_biet',anh_sp='$anh_sp',id_dm='$id_dm' where id_sp=$id";
            $query=mysqli_query($conn,$sqlup);   
        }
    }
    else {
        $anh_sp = $_FILES['anh_sp']['name'];
        $tmp_name = $_FILES['anh_sp']['tmp_name'];
        if (isset($tensp) && isset($giasp) && isset ($baohanh) && 
        isset($phukien) && isset($tinhtrang) &&isset($khuyenmai) && 
        isset($trangthai) &&isset($chitietsp) && isset($dac_biet) ) {
            move_uploaded_file ($tmp_name , 'anh/'.$anh_sp);
            $sqlup="update sanpham set ten_sp='$tensp',gia_sp='$giasp',bao_hanh='$baohanh',khuyen_mai='$khuyenmai',"
            . "phu_kien='$phukien',tinh_trang='$tinhtrang',trang_thai='$trangthai',"
            ."chi_tiet_sp='$chitietsp',dac_biet='$dac_biet',anh_sp='$anh_sp',id_dm='$id_dm' where id_sp=$id";
            $query=mysqli_query($conn,$sqlup);
    
        }
    }
    header('location:quantri.php?page_layout=danhsachsp');
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
                    <h1 class="page-header">Sửa thông tin sản phẩm</h1>
                </div>
            </div><!--/.row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Sửa thông tin sản phẩm</div>
                        <div class="panel-body">

                            <form method="post" enctype="multipart/form-data" role="form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input type="text" class="form-control"  name="ten_sp" value="<?php if(isset($_POST['ten_sp'])){echo $_POST['ten_sp'];} else{echo $row['ten_sp'];} ?>" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Giá sản phẩm</label>
                                        <input type="text" class="form-control" name="gia_sp" value="<?php if(isset($_POST['gia_sp'])){echo $_POST['gia_sp'];} else{echo $row['gia_sp'];} ?>" required="">
                                    </div>

                                    <div class="form-group">
                                        <label>Bảo hành</label>
                                        <input type="text" class="form-control" name="bao_hanh" value="<?php if(isset($_POST['bao_hanh'])){echo $_POST['bao_hanh'];} else{echo $row['bao_hanh'];} ?>" required="">
                                    </div>

                                    <div class="form-group">
                                        <label>Đi kèm</label>
                                        <input type="text" class="form-control" name="phu_kien" value="<?php if(isset($_POST['phu_kien'])){echo $_POST['phu_kien'];} else{echo $row['phu_kien'];} ?>" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Tình trạng</label>
                                        <input type="text" class="form-control" name="tinh_trang" value="<?php if(isset($_POST['tinh_trang'])){echo $_POST['tinh_trang'];} else{echo $row['tinh_trang'];} ?>" required="">
                                    </div>

                                    <div class="form-group">
                                        <label>Ảnh mô tả</label>
                                        <input type="file" name="anh_sp"><input type="hidden" name="anh_sp" value="<?php echo $row['anh_sp']; ?>">
                                        <span class="thumb"><img width="300px" height="300px" src="anh/<?php echo $row['anh_sp'] ?>" /></span>		 
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Khuyến mãi</label>
                                        <input type="text" class="form-control" name="khuyen_mai" value="<?php if(isset($_POST['khuyen_mai'])){echo $_POST['khuyen_mai'];} else{echo $row['khuyen_mai'];} ?>" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Còn hàng</label>
                                        <input type="text" class="form-control" name="trang_thai" value="<?php if(isset($_POST['trang_thai'])){echo $_POST['trang_thai'];} else{echo $row['trang_thai'];} ?>" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Sản phẩm đặc biệt</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="dac_biet"
                                                <?php
                                                    if ($row['dac_biet']==1) {
                                                        echo 'checked';
                                                    }
                                                ?>
                                                 id="optionsRadios1" value=1>Có
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="dac_biet" id="optionsRadios2" value=0>Không
                                            </label>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label>Nhà cung cấp</label>
                                        <select class="form-control" name="id_dm">
                                        <?php
                                            while ($rows=mysqli_fetch_array($query)) {
                                        ?>
                                            <option
                                            <?php
                                                if ($row['id_dm']==$rows['id_dm']) {
                                                    echo 'selected="selected"';
                                                }
                                            ?>
                                             value="<?php echo $rows['id_dm']; ?>"><?php echo $rows['ten_dm']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Thông tin chi tiết sản phẩm</label>
                                        <textarea class="form-control" rows="3" name="chi_tiet_sp"><?php if(isset($_POST['chi_tiet_sp'])){echo $_POST['chi_tiet_sp'];} else{echo $row['chi_tiet_sp'];} ?></textarea>
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