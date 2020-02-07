<script>
    function xoadanhmuc() {
        var conf=confirm("Bạn có chắc chắn muốn xóa không");
        return conf;
        // kiểm tra chắc chắn muốn xóa không
    }
</script>
<?php 
if($_SESSION['level']==2){
    if (isset($_GET['page'])) {
    $page=$_GET['page'];
    }
    else {
    $page=1;
    }
    $rowsperpage=5;
    $perRow=$page*$rowsperpage-$rowsperpage; // phân trang
     $sql="select * from dmsanpham order by id_dm DESC limit $perRow,$rowsperpage"; // sap xep theo tang dan
    $query=mysqli_query($conn,$sql);
    $totalrows=mysqli_num_rows(mysqli_query($conn,"select * from dmsanpham"));// dem so luong
    $totalpage=ceil($totalrows/$rowsperpage); // ceil hamf lamf tronf; lấy số lượng sp chia cho số limit hiển thị ra số phân trang
    $listpage=""; // khai báo một hàm rỗng để hiển thị
    for ($i=1; $i <= $totalpage; $i++) { 
        if ($page==$i) {
            $listpage.='<li><a href="quantri.php?page_layout=danhsachdm&page='.$i.'">'.$i.'</a></li>';
        }
        else {
            $listpage.='<li><a href="quantri.php?page_layout=danhsachdm&page='.$i.'">'.$i.'</a></li>';
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
                    <h1 class="page-header">Quản lý danh mục</h1>
                </div>
            </div><!--/.row-->


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

                        <div class="panel-body" style="position: relative;">
                            <a href="quantri.php?page_layout=themdm" class="btn btn-primary" style="margin: 10px 0 20px 0; position: absolute;">Thêm danh mục mới</a>
                            <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                                <thead>
                                    <tr>						        
                                        <th data-sortable="true">ID</th>
                                        <th data-sortable="true">Tên danh mục</th>
                                        <th data-sortable="true">Sửa</th>
                                        <th data-sortable="true">Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    while ($row= mysqli_fetch_array($query)) {                                   
                                ?>
                                    <tr>
                                        <td data-checkbox="true"><?php echo $row['id_dm']; ?></td>
                                        <td data-checkbox="true"><a href="quantri.php?page_layout=suadm&id=<?php echo $row['id_dm']; ?>"><?php echo $row['ten_dm']; ?></a></td>						        
                                        <td>
   <!-- truyền id danh mục để sửa !-->    <a href="quantri.php?page_layout=suadm&id=<?php echo $row['id_dm']; ?>"><span><svg class="glyph stroked brush" style="width: 20px;height: 20px;"><use xlink:href="#stroked-brush"/></svg></span></a>
                                        </td>

                                        <td>
                                            <a onclick="return xoadanhmuc();" href="xoadm.php?id=<?php echo $row['id_dm']; ?>"><span><svg class="glyph stroked cancel" style="width: 20px;height: 20px;"><use xlink:href="#stroked-cancel"/></svg></span></a>
                                        </td>
                                    </tr>
                                    <?php 
                                }
                                ?>
                                </tbody>
                            </table>
                            <ul class="pagination" style="float: right;">
                                <?php
                                echo $listpage; 
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!--/.row-->	



        </div><!--/.main-->
        <?php 
    }
    else{
        header('location:../index.php');
        // khi không tồn tại phiên làm việc thì có thể quay lại
    }
?>