<?php
if (isset($_SESSION['email'])) {
    # code...
?>

<div id="cart">
<?php
     if (isset($_SESSION['giohang'])) {
        if (isset($_POST['sl'])) {
            foreach ($_POST['sl'] as $id_sp=>$sl ) {
                if ($sl==0) {
                    unset($_SESSION['giohang'][$id_sp]);
                }
                else if ($sl>0) {
                    $_SESSION['giohang'][$id_sp]=$sl;
                }
            }
        }
?>
<ul class="list-group" style="margin-bottom: 10px">
			<li class="list-group-item" style="background: #ff9600">
				<h3 style="float: left;">Giỏ hàng của bạn</h3>
				<span class="badge" style="float: right;background: green;color: #ff9600;font-size: 15px">
                <?php echo count($_SESSION['giohang']); ?>
				</span>
			</li>
		</ul>
<?php
                        $arrId=array();
                        foreach ($_SESSION['giohang'] as $id_sp=>$so_luong) {
                            $arrId[]=$id_sp;
                        }
                        $strId= implode(',', $arrId);
                        // if ($strId=="") {
                        //     unset($_SESSION['giohang']);
                        // }
                        $sql="SELECT * FROM sanpham WHERE id_sp IN($strId)";
                        $query=mysqli_query($conn,$sql);
                        if ($query=="") {
                            unset($_SESSION['giohang']);
                        }
                        else {
                ?>
        <form id="giohang" method="post">
                <table id="cart" class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th class="text-center">Tổng tiền</th>
                            <th></th>
                        </tr>
                    </thead>
                    <!-- Product Item -->
                    <?php
                        $totalPriceAll=0;
                        while ($row=mysqli_fetch_array($query)) {
                            $totalPrice=$row['gia_sp']*$_SESSION['giohang'][$row['id_sp']];
                    ?>
                    <tbody>
                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-2 hidden-xs"><img src="images/<?php echo $row['anh_sp']; ?>" alt="..." class="img-responsive"/></div>
                                    <div class="col-sm-10">
                                        <h5><?php echo $row['ten_sp']; ?></h5>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price"><?php echo $row['gia_sp']; ?></td>
                            <td data-th="Quantity">
                                <input name="sl[<?php echo $row['id_sp']; ?>]" type="number" min="0" class="form-control text-center" value="<?php echo $_SESSION['giohang'][$row['id_sp']]; ?>">
                            </td>
                            <td data-th="Subtotal" class="text-center"><span><?php echo $totalPrice; ?></span></td>
                            <td class="actions" data-th="">
                            <button> <a style="color:green;text-decoration:none;background-color: #e7e7e7"  href="chucnang/giohang/xoahang.php?id_sp=<?php echo $row['id_sp']; ?>">Hủy</a> </button>                        
                            </td>
                        </tr>
                    </tbody>
                    <?php 
                     $totalPriceAll+=$totalPrice;
                    } 
                    ?>
                    <tfoot>
                        <tr class="visible-xs">
                            <td class="text-center" style="float:right"><strong>Phí vận chuyển: <span><?php if(isset($_SESSION['email'])) {echo "0";} else{ echo $ship=30000;} ?></span></strong></td>
                        </tr>
                        <tr>
                            <td colspan="2" > 
                                <a href="index.php" class="btn btn-warning">Tiếp tục mua hàng</a>
                                <a onclick="document.getElementById('giohang').submit();" href="#" class="btn btn-info">Cập nhật</a>
                            </td>
                            <td  class="hidden-xs"><a class="btn btn-success" href="chucnang/giohang/xoahang.php?id_sp=0" >Hủy đặt hàng</a></td>
                            <td class="hidden-xs text-center"><strong>Tổng tiền giỏ hàng: <span><?php if(isset($_SESSION['email'])) {echo $totalPriceAll;} else{ echo  $totalPriceAll+=$ship;} ?></span></strong></td>
                            <td><a href="index.php?page_layout=muahang" class="btn btn-success btn-block">Thanh toán</a></td>
                        </tr>
                    </tfoot>
                </table>
                </form>
                        <?php
                        } 
                    }
                    else {
                        echo '<script>alert("Không có sản phẩm nào");</script>';
                        ?>
                         <ul class="list-group" style="margin-bottom: 10px">
			            <li class="list-group-item" style="background: #ff9600">
				            <h3 style="float: left;">Giỏ hàng của bạn</h3>
				            <span class="badge" style="float: right;background: green;color: #ff9600;font-size: 15px">
                            0
				            </span>
			            </li>
		                </ul>
                    <?php } ?>
            </div>
<?php
} else { ?>
    <h1>Vui Lòng Đăng Nhập</h1>    
<?php    
}
?>