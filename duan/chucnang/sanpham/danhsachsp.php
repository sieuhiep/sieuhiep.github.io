<link rel="stylesheet" href="css/style.css">
<?php
    $id_dm=$_GET['id_dm'];
    $sqldm="select * from dmsanpham where id_dm=$id_dm";
    $querydm=mysqli_query($conn,$sqldm);
    $rowdm=mysqli_fetch_array($querydm);

    if (isset($_GET['page'])) {
        $page=$_GET['page'];
    }
    else {
        $page=1;
    }
    $rowsperpage=4;
    $perrow=$page*$rowsperpage-$rowsperpage;

    $sql="select * from sanpham where id_dm=$id_dm limit $perrow,$rowsperpage";
    $query=mysqli_query($conn,$sql);
    $total_recort=mysqli_num_rows(mysqli_query($conn,"select * from sanpham where id_dm=$id_dm"));
    $total_page=ceil($total_recort/$rowsperpage);
    $listpage="";
    for ($i=1; $i <=$total_page ; $i++) { 
      if ($page==$i) {
          $listpage.='<li class="active"><a href="index.php?page_layout=danhsachsp&id_dm='.$id_dm.'&page='.$i.'">'.$i.'</a></li>';
      }
      else{
          $listpage.='<li><a href="index.php?page_layout=danhsachsp&id_dm='.$id_dm.'&page='.$i.'">'.$i.'</a></li>';
      }
    }
?>
<div class="products">
<ul class="list-group" style="margin-bottom: 10px">
			<li class="list-group-item" style="background: #ff9600">
				<h3 style="float: left;"><?php echo $rowdm['ten_dm']; ?></h3>
				<span class="badge" style="float: right;background: green;color: #ff9600;font-size: 15px">
					<?php echo "$total_recort"; ?>
				</span>
			</li>
		</ul>
    <div class="row product-list">
    <?php
        while ($row=mysqli_fetch_array($query)) {
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
            <h3><a href="#" style="	text-decoration: none" ><?php echo $row['ten_sp'] ?></a></h3>
            <p>Bảo hành: <?php echo $row['bao_hanh'] ?></p>
            <p>Tình trạng:<?php echo $row['tinh_trang'] ?></p>
            <p class="price">Giá: <?php echo $row['gia_sp'] ?></p>
            <div id="mask" class="mask<?php echo $row['id_sp'] ?>">
			<a href="index.php?page_layout=chitiet&id_sp=<?php echo $row['id_sp']; ?>">Xem chi tiết</a>
			</div>
        </div>
        <?php } ?>
    </div>
</div>
<!-- Pagination -->
<style>
    #pagination{
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
