<style>
    h3{
        color:red;
    }
    p{
        font-size:35px;
    }
</style>
<?php
if($_SESSION['level']==2){
$id=$_GET['id'];
$sqlll= "select * from chitiet_hd where id_ct_hd=$id";
$query= mysqli_query($conn,$sqlll);
$row = mysqli_fetch_array($query);
?>
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Chi tiết hóa đơn</h1>
                </div>
            </div><!--/.row-->
<div id="product" class="row" onload="window.print();">
                <div id="prd-intro" class="col-md-6 col-sm-12 col-xs-12">
                    <h3><?php echo $row['ten_sp'] ?></h3>
                    <p id="prd-price"><span class="sl">Giá sản phẩm:</span> <span class="sr"><?php echo $row['gia_sp']; ?></span></p>
                    <p><span class="sl">Số lượng:</span><?php echo $row['sl']; ?></p>
                    <p><span class="sl">Tổng tiền:</span><?php echo $row['thanh_tien']; ?></p>
                    <p><span class="sl">Tên khách hàng:</span><?php echo $row['ten_khach_hang']; ?></p>
                    <p><span class="sl">Email:</span> <?php echo $row['email']; ?></p>
                    <p><span class="sl">Số điện thoại:</span><?php echo $row['sdt']; ?></p>
                    <p><span class="sl">Địa chỉ:</span><?php echo $row['dia_chi']; ?></p>
                    <p><span class="sl">Ngày giờ:</span><?php echo $row['ngay_gio']; ?></p>
                    <a href="indhd.php?id_hd=<?php echo $row['id_ct_hd'];  ?>"><button type="button" class="btn btn-danger">Xác nhận</button></a>
                </div>
            </div> 

            <?php 
    }
    else{
        header('location:../index.php');
        // khi không tồn tại phiên làm việc thì có thể quay lại
    }
?>   