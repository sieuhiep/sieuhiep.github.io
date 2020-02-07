<?php 
if($_SESSION['level']==2){
    $id=$_GET['id'];
    $sql = "select * from dmsanpham where id_dm=$id";
    $query=mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
    // kiem tra xem nhap du thong tin chua
    if (isset($_POST['submit'])) {
        $tendm=$_POST['ten_dm'];
        if (isset($tendm)) {
            $sql="update dmsanpham set ten_dm='$tendm' where id_dm=$id";
            $query=mysqli_query($conn,$sql);
            header('location: quantri.php?page_layout=danhsachdm');
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
                    <h1 class="page-header">Sửa danh mục</h1>
                </div>
            </div><!--/.row-->


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Sửa danh mục</div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <form role="form" method="post">

                                    <div class="form-group">
                                        <label>Tên danh mục</label>
                                        <input class="form-control" type="text" name="ten_dm" value="<?php echo $row['ten_dm']; ?>" required="">
                                    </div>														
                                    <button type="submit" class="btn btn-primary" name="submit">Sửa</button>
                                    <button type="reset" class="btn btn-default">Làm mới</button>

                            </div>
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
      
