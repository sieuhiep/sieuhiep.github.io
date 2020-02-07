<link rel="stylesheet" href="css/style.css">
<div class="products">
<ul class="list-group" style="margin-bottom: 10px">
            <?php
            $sql="select * from sanpham where dac_biet=1 limit 8";
            $query=mysqli_query($conn,$sql);
        $total_recort=mysqli_num_rows(mysqli_query($conn,"select * from sanpham where dac_biet=1 "));
		?>
			<li class="list-group-item" style="background: #ff9600">
				<h3 style="float: left;">Sản Phẩm Nổi Bật</h3>
				<span class="badge" style="float: right;background: green;color: #ff9600;font-size: 15px">
					<?php echo "$total_recort"; ?>
				</span>
			</li>
		</ul>
        <div class="row product-list">
        <?php
				while ($row= mysqli_fetch_array($query)) {
			?>
			<script>
				$(document).ready(function() {
					$('.product-item<?php echo $row['id_sp'] ?>').hover(function(){
						$('.mask<?php echo $row['id_sp'] ?>').slideDown();
					},function(){
						$('.mask<?php echo $row['id_sp'] ?>').slideUp();
					});
				});
			</script>
        <div class="col-md-3 col-sm-6 text-center product-item<?php echo $row['id_sp'] ?>" id="product-item">
            <a href="#"><img width="80" height="144" src="images/<?php echo $row['anh_sp'] ?>"></a>
            <h3><a href="#" style="	text-decoration: none"><?php echo $row['ten_sp'] ?></a></h3>
            <p>Bảo Hành:<?php echo $row['bao_hanh'] ?></p>
            <p>Tình Trạng:<?php echo $row['tinh_trang'] ?></p>
            <p class="price">Giá:<?php echo $row['gia_sp'] ?></p>
            <div id="mask" class="mask<?php echo $row['id_sp'] ?>">
				<a href="index.php?page_layout=chitiet&id_sp=<?php echo $row['id_sp']; ?>">Xem chi tiết</a>
			</div>
        </div>
        <?php } ?>
    </div>
</div>

<div class="products">
<ul class="list-group" style="margin-bottom: 10px">
            <?php
            $sql="select * from sanpham where dac_biet=0 limit 8";
            $query=mysqli_query($conn,$sql);
        $total_recort=mysqli_num_rows(mysqli_query($conn,"select * from sanpham where dac_biet=0"));
		?>
			<li class="list-group-item" style="background: #ff9600">
				<h3 style="float: left;">Sản Phẩm Mới</h3>
				<span class="badge" style="float: right;background: green;color: #ff9600;font-size: 15px">
					<?php echo "$total_recort"; ?>
				</span>
			</li>
		</ul>
        <div class="row product-list">
        <?php
				while ($row= mysqli_fetch_array($query)) {
			?>
			<script>
				$(document).ready(function() {
					$('.product-item<?php echo $row['id_sp'] ?>').hover(function(){
						$('.mask<?php echo $row['id_sp'] ?>').slideDown();
					},function(){
						$('.mask<?php echo $row['id_sp'] ?>').slideUp();
					});
				});
			</script>
        <div class="col-md-3 col-sm-6 text-center product-item<?php echo $row['id_sp'] ?>" id="product-item">
            <a href="#"><img width="80" height="144" src="images/<?php echo $row['anh_sp'] ?>"></a>
            <h3><a href="#" style="	text-decoration: none"><?php echo $row['ten_sp'] ?></a></h3>
            <p>Bảo Hành:<?php echo $row['bao_hanh'] ?></p>
            <p>Tình Trạng:<?php echo $row['tinh_trang'] ?></p>
            <p class="price">Giá:<?php echo $row['gia_sp'] ?></p>
            <div id="mask" class="mask<?php echo $row['id_sp'] ?>">
			<a href="index.php?page_layout=chitiet&id_sp=<?php echo $row['id_sp']; ?>">Xem chi tiết</a>
			</div>
        </div>
        <?php } ?>
    </div>
</div>