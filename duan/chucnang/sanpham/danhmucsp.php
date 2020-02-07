<?php
    $sql="select * from dmsanpham";
    $query=mysqli_query($conn,$sql);
?>
<style>
    .vertycal{
        margin-top:80px;
    }
    .vertycal ul li a:hover{
        color:red;
    }
</style>
<div class="vertycal" >
						<h2 class="h2-bar">danh mục sản phẩm</h2>
						<ul>
                        <?php
                            while ($row =mysqli_fetch_array($query)) {
                        ?>
                                <li><a href="index.php?page_layout=danhsachsp&id_dm=<?php echo $row['id_dm']; ?>"><?php echo $row['ten_dm'] ?></a></li>
                            <?php }
                            ?>
                            </ul>
						</div>