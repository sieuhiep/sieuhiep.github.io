<?php
    if (isset($_SESSION['sosanh'])) {

            $data = array();
             foreach ($_SESSION['sosanh'] as $key => $val) {
                $sql = "select * from sanpham where id_sp = $key";
                $query=mysqli_query($conn,$sql);
                $data[$key] = mysqli_fetch_array($query);
                
            }
            $arrid=array();
            foreach ($data as $key => $val){
                $arrsp[]= $val['id_sp'];
            }
            $arrid=implode(',', $arrsp);
            $sql="select * from sanpham where id_sp in($arrid) order by id_sp desc";
            $query=mysqli_query($conn,$sql);
                        if ($query=="") {
                            unset($_SESSION['sosanh']);
                        }
                        else {
                          
?>


<div class="products">
<div class="row product-list">
                    <?php
                      while ($row=mysqli_fetch_array($query)) { 
                    ?>
                <div id="prd-thumb" class="col-md-3 col-sm-12 col-xs-12 text-center">
                    <img width="160px" src="images/<?php echo $row['anh_sp'] ?>">
                </div>
                <div id="prd-intro" class="col-md-3 col-sm-12 col-xs-12 text-center product-item">
                <p><span class="sl">Tên sản phẩm:</span><?php echo $row['ten_sp']; ?></p>
                    <p id="prd-price"><span class="sl">Giá sản phẩm:</span> <span class="sr"><?php echo $row['gia_sp'] ?></span></p>
                    <p><span class="sl">Bảo hành:</span><?php echo $row['bao_hanh']; ?></p>
                    <p><span class="sl">Đi kèm:</span><?php echo $row['phu_kien']; ?></p>
                    <p><span class="sl">Tình trạng:</span><?php echo $row['tinh_trang']; ?></p>
                    <p><span class="sl">Khuyến Mại:</span> <?php echo $row['khuyen_mai']; ?></p>
                    <p><span class="sl">Còn hàng:</span><?php echo $row['trang_thai']; ?></p>
                    <p>
                    <?php echo $row['chi_tiet_sp']; ?>
                    </p>
                    <?php
                        if (isset($_SESSION['email'])) { ?>
                    <a href="chucnang/giohang/themhang.php?id_sp=<?php echo $row['id_sp'];  ?>"><button type="button" class="btn btn-danger">Đặt Mua</button></a>
                    <?php        
                        } else { ?>
                    <a href="#"><button type="button" class="btn btn-danger">Vui lòng đăng nhập</button></a>
                    <?php        
                        }
                    ?>                </div>
                      <?php } ?>
            </div> 
            </div>
    <?php

                        } 
                        if (count($_SESSION['sosanh'])==2) {
                            unset($_SESSION['sosanh']);
                        }

    }
    else {
        echo '<script>alert("Không có sản phẩm nào chọn lại");</script>';
        echo '<h3 style="color:red;text-align: center;margin-top: 150px">Chọn lại sản phẩm để so sánh</h3>';
    }
?>