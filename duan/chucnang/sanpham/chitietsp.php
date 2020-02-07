<?php
$id=$_GET['id_sp'];
$sql= "select * from sanpham where id_sp=$id";
$query= mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);
?>
<div id="product" class="row">
                <div id="prd-thumb" class="col-md-6 col-sm-12 col-xs-12 text-center">
                    <img width="160px" src="images/<?php echo $row['anh_sp'] ?>">
                </div>
                <div id="prd-intro" class="col-md-6 col-sm-12 col-xs-12">
                    <h3><?php echo $row['ten_sp'] ?></h3>
                    <p id="prd-price"><span class="sl">Giá sản phẩm:</span> <span class="sr"><?php echo $row['gia_sp'] ?></span></p>
                    <p><span class="sl">Bảo hành:</span><?php echo $row['bao_hanh']; ?></p>
                    <p><span class="sl">Đi kèm:</span><?php echo $row['phu_kien']; ?></p>
                    <p><span class="sl">Tình trạng:</span><?php echo $row['tinh_trang']; ?></p>
                    <p><span class="sl">Khuyến Mại:</span> <?php echo $row['khuyen_mai']; ?></p>
                    <p><span class="sl">Còn hàng:</span><?php echo $row['trang_thai']; ?></p>
                    <?php
                        if (isset($_SESSION['email'])) { ?>
                    <a href="chucnang/giohang/themhang.php?id_sp=<?php echo $row['id_sp'];  ?>"><button type="button" class="btn btn-danger">Đặt Mua</button></a>
                    <?php        
                        } else { ?>
                    <a href="#"><button type="button" class="btn btn-danger">Vui lòng đăng nhập</button></a>
                    <?php        
                        }
                    ?>
                    <a href="chucnang/sosanh/ss.php?id_sp=<?php echo $row['id_sp'];  ?>"><button type="button" class="btn btn-danger">So Sánh</button></a>
                </div>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                <div id="prd-details" class="col-md-12 col-sm-12 col-xs-12 text-justify">
                    <p>
                    <?php echo $row['chi_tiet_sp']; ?>
                    </p>
                </div>
            </div> 
    
            <?php
            if (isset($_POST['bl'])) {
                $ten=$_POST['ten'];
                $dienthoai=$_POST['dienthoai'];
                $binhluan=$_POST['binhluan'];

                $ngay_gio=date("Y-m-d H:i:s");
                if (isset($ten)&&isset($dienthoai)&&isset($binhluan)) {
                    $sql="insert into blsanpham(ten,dien_thoai,binh_luan,ngay_gio,id_sp) values ('$ten','$dienthoai','$binhluan','$ngay_gio','$id')";
                    $query=mysqli_query($conn,$sql);
                    header('location:index.php?page_layout=chitiet&id_sp='.$id);
                }
            }
            ?>

            <div id="comment" class="col-md-8 col-sm-9 col-xs-12">
                <h3>Bình luận sản phẩm</h3>
                <form method="post" action="index.php?page_layout=chitiet&id_sp=<?php echo $id; ?>">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="ten" required="" class="form-control" placeholder="TDH">
                  </div>
                  <div class="form-group">
                    <label>Điện thoại</label>
                    <input type="text" name="dienthoai" required="" class="form-control" placeholder="012345678">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nội dung</label>
                    <textarea class="form-control" name="binhluan" required="" placeholder="TDH"></textarea>
                  </div>
                  <button type="submit" name="bl" class="btn btn-default">Bình luận</button>
                </form>
            </div>
            <?php
                if (isset($_GET['page'])) {
                    $page=$_GET['page'];
                }
                else {
                    $page=1;
                }
                $rowperpage=4;
                $perrow=$page*$rowperpage-$rowperpage;

                $sqlbl="select * from blsanpham where id_sp=$id and ht=1 order by id_bl ASC limit $perrow,$rowperpage";
                $querybl=mysqli_query($conn,$sqlbl);
                $total_row=mysqli_num_rows(mysqli_query($conn,"select * from blsanpham where id_sp=$id and ht=1"));
                $totalpage=ceil($total_row/$rowperpage);
                $listpage="";
                for ($i=1; $i <=$totalpage ; $i++) { 
                    if ($page==$i) {
                        $listpage.='<li class="active"><a href="index.php?page_layout=chitiet&id_sp='.$id.'&page='.$i.'">'.$i.'</a></li>';
                    }
                    else{
                        $listpage.='<li><a href="index.php?page_layout=chitiet&id_sp='.$id.'&page='.$i.'">'.$i.'</a></li>';
                    }
                  }
                $total_bl=mysqli_num_rows($querybl);
                if ($total_bl>0) {
            ?>
            <div id="comments" class="col-md-12 col-sm-12 col-xs-12">
            <?php
                while ($row=mysqli_fetch_array($querybl)) {
            ?>
                <ul>
                    <li class="comm-name"><?php echo $row['ten']; ?></li>
                    <li class="comm-time"><?php echo $row['ngay_gio']; ?> </li>
                    <li class="comm-details">
                        <p>
                        <?php echo $row['binh_luan']; ?>
                        </p>
                    </li>
                </ul>
                <?php } ?>
            </div>
                <?php } ?>
            <!-- Pagination -->
            <style>
    .pagination{
        float:right;
    }
    .pagination a {
		display: inline-block;
    	padding: 8px 16px;
		}

		.pagination	a:hover {
    	background-color: #ddd;
        color: black;
        border-radius:50%;
        }
        .pagination li{
            display:inline-block;
        }
        .pagination li{
            background: powderblue;
            color:#ffffff;
            border-radius:50%;
        }
</style>
 <div id="pagination" class="pagination">
                <nav aria-label="Page navigation">
                  <ul >
            <?php
                echo $listpage;
            ?>
        </ul>
    </nav>
</div>             
            <!-- End Pagination -->   
            