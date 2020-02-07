<?php
// echo "<pre>";
// print_r($_SESSION['giohang']);
// echo "</pre>";
// $data = array();
// foreach ($_SESSION['giohang'] as $key => $val) {
//     $sql = "select * from sanpham where id_sp = $key";
//     $query=mysqli_query($conn,$sql);
//     $data[$key] = mysqli_fetch_array($query);
    
// }

// foreach ($data as $key => $val){
//     $ten_sp= $val['ten_sp'];
//     $gia_sp= $val['gia_sp'];
// }

    if (isset($_SESSION['giohang'])) {
        // if (isset($_POST['ok'])) {
            $data = array();
             foreach ($_SESSION['giohang'] as $key => $val) {
                $sql = "select * from sanpham where id_sp = $key";
                $query=mysqli_query($conn,$sql);
                $data[$key] = mysqli_fetch_array($query);
                
            }
            $arrspp=array();
            $arrgiaa=array();
            foreach ($data as $key => $val){
                $arrsp[]= $val['ten_sp'];
                $arrgia[]= $val['gia_sp'];
            }
            $arrspp=implode($arrsp,' ; ');
            $arrgiaa=implode($arrgia,' ; ');
            
        //    }
        $arrId=array();
        $arrsl=array();
        foreach ($_SESSION['giohang'] as $id_sp=>$sl ) {
            $arrId[]=$id_sp;
            $sll[]=$sl;
        }
        $arrsl=implode($sll,' ; ');
    $strId=implode(',', $arrId);
    $sql="select * from sanpham where id_sp in($strId) order by id_sp desc";
    $query=mysqli_query($conn,$sql);
}
?>

<div id="checkout">
<ul class="list-group" style="margin-bottom: 10px">
			<li class="list-group-item" style="background: #ff9600">
				<h3 style="float: left;color:#ffffff">Xác nhận hóa đơn thanh toán</h3>
				<span class="badge" style="float: right;background: green;color: #ff9600;font-size: 15px">
                <?php echo count($_SESSION['giohang']); ?>
				</span>
			</li>
		</ul>
                            <table class="table table-bordered">
                                <tr>
                                <thead>
                                <th>tên sản phẩm</th>
                                <th>giá</th>
                                <th>số lượng</th>
                                <th>thành tiền</th>
                                </thead>
                                </tr>
                                <?php
                                    $totalPriceall=0;
                                    while ($row=mysqli_fetch_array($query)) {
                                        $totalPrice=$row['gia_sp']*$_SESSION['giohang'][$row['id_sp']];
                                ?>
                                <tr>
                                    <td><?php echo $row['ten_sp']; ?></td>
                                    <td><span><?php echo $row['gia_sp']; ?></span></td>
                                    <td><?php echo $_SESSION['giohang'][$row['id_sp']]; ?></td>
                                    <td><span><?php echo $totalPrice; ?></span></td>
                                </tr>
                                <?php
                                $totalPriceall+=$totalPrice;
                            } ?>
                            <tr>
                                    <td>Tổng giá trị hóa đơn:</td>
                                    <td colspan="2"><strong>Phí vận chuyển: <span><?php if(isset($_SESSION['email'])) {echo "0";} else{ echo $ship=30000;} ?></span></strong></td>
                                    <td><b><span><?php if(isset($_SESSION['email'])) {echo $totalPriceall;} else{ echo  $totalPriceall=$totalPriceall+$ship;} ?></span></b></td>
                                </tr>
                            </table>
                        </div>
                    <?php
                        
                        if (isset($_POST['ok'])) {
        header('location: index.php?page_layout=hoanthanh');                              
                        }
                    ?>
                        <div id="custom-form" class="col-md-6 col-sm-8 col-xs-12">
                            <form method="post">
                                <div class="form-group">
                                    <label>Tên khách hàng</label>
                                    <input required type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ Email</label>
                                    <input required type="text" class="form-control" name="emaill">
                                </div>
                                <div class="form-group">
                                    <label>Số Điện thoại</label>
                                    <input required type="text" class="form-control" name="mobi">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ nhận hàng</label>
                                    <input required type="text" class="form-control" name="add">
                                </div>
                                <button class="btn btn-info" name="ok">Mua hàng</button>
                            </form>
                        </div>