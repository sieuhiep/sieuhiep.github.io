<?php 
if($_SESSION['level']==2){
    $sqldm="select * from dmsanpham";
    $query=mysqli_query($conn,$sqldm);
    if(isset($_POST['submit'])){
        $tensp=$_POST['ten_sp'];
        $giasp=$_POST['gia_sp'];
        $baohanh=$_POST['bao_hanh'];
        $phukien=$_POST['phu_kien'];
        $tinhtrang=$_POST['tinh_trang'];
        $khuyenmai=$_POST['khuyen_mai'];
        $trangthai=$_POST['trang_thai'];
        $chitietsp=$_POST['chi_tiet_sp'];
        if ($_FILES['anh_sp']['name']=='') {
            $error_anh_sp='<span style="color:red;">(*)</span>'; // chua co anh thong bao loi
        }
        else {
            $anh=$_FILES['anh_sp']['name'];
            $tmp_name=$_FILES['anh_sp']['tmp_name']; // neu co anh roi thi luu lai
        }
        if ($_POST['id_dm']=='unselect') {           
            $error_id_dm='<span style="color:red;">(*)</span>'; // chua co anh thong bao loi
        }
        else {
            $iddm=$_POST['id_dm'];
        }
        $dac_biet=$_POST['dac_biet'];
        if (isset($tensp) && isset($giasp) && isset ($baohanh) && isset($phukien) && isset($tinhtrang) &&isset($khuyenmai) && isset($trangthai) &&isset($chitietsp) && isset($dac_biet) && isset($anh) && isset($iddm)) {
            move_uploaded_file($tmp_name,'anh/'.$anh);
            $sql="insert into sanpham(ten_sp,gia_sp,bao_hanh,phu_kien,tinh_trang,khuyen_mai,trang_thai,chi_tiet_sp,anh_sp,id_dm,dac_biet) values ('$tensp','$giasp','$baohanh','$phukien','$tinhtrang','$khuyenmai','$trangthai','$chitietsp','$anh','$iddm','$dac_biet')";
            $query=mysqli_query($conn,$sql);
            // header('location:quantri.php?page_layout=danhsachsp');
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
                    <h1 class="page-header">Thêm sản phẩm mới</h1>
                </div>
            </div><!--/.row-->


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Thêm sản phẩm mới</div>
                        <div class="panel-body">

                            <form method="post" enctype="multipart/form-data" role="form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input type="text" class="form-control"  name="ten_sp" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Giá sản phẩm</label>
                                        <input type="text" class="form-control" name="gia_sp" required="">
                                    </div>

                                    <div class="form-group">
                                        <label>Bảo hành</label>
                                        <input type="text" class="form-control" name="bao_hanh" value="12 Tháng" required="">
                                    </div>

                                    <div class="form-group">
                                        <label>Đi kèm</label>
                                        <input type="text" class="form-control" name="phu_kien" value="Hộp, sách, sạc, cáp, tai nghe" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Tình trạng</label>
                                        <input type="text" class="form-control" name="tinh_trang" value="Máy Mới 100%" required="">
                                    </div>

                                    <div class="form-group">
                                        <label>Ảnh mô tả</label>
                                        <input type="file" name="anh_sp">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Khuyến mãi</label>
                                        <input type="text" class="form-control" name="khuyen_mai" value="Dán Màn hình 3 lớp" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Còn hàng</label>
                                        <input type="text" class="form-control" name="trang_thai" value="Còn hàng" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Sản phẩm đặc biệt</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="dac_biet" id="optionsRadios1" value=1>Có
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="dac_biet" id="optionsRadios2" value=0 checked>Không
                                            </label>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label>Nhà cung cấp</label>
                                        <select name="id_dm" class="form-control">
                                            <option value="unselect" selected>Lựa chọn nhà cung cấp</option>
                                            <?php
                                                while ($row=mysqli_fetch_array($query)) {
                                            ?>
                                            <option value="<?php echo $row['id_dm']?>"><?php echo $row['ten_dm']; ?></option>
                                                <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Thông tin chi tiết sản phẩm</label>
                                        <textarea class="form-control" rows="3" name="chi_tiet_sp"></textarea>
                                    </div>



                                </div>

                                <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
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