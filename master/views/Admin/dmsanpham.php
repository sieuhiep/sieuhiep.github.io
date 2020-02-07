<style>
        img {
            width: 200px;
            height: 200px;
        }
        .font-a a {
            text-decoration: none;
            color: white;
        }
        a::hover {
            text-decoration: none !important;
        }
        .img {
            text-align: center;
        }
        .box-right {
            float: right;
            margin-right: 15px;
        }
        .btn-lg {
            padding: 5px 10px ;
        }
        .font-a-1 a {
            text-decoration: none;
            color: white;
        }
    </style>
<div class="panel panel-default panel-table"> 
                            <div class="panel-heading"> 
                                <div class="row"> 
                                    <div class="col col-xs-6"> 
                                        <h3 class="panel-title">Danh Mục sản phẩm</h3> 
                                    </div> 
                                                <?php 
                                            if ($_SESSION['level']==2) {
                                                ?>
                                    <button type="button" class="btn btn-info btn-lg box-right" data-toggle="modal" data-target="#myModal">Thêm mới</button>
                                                    <?php } 
                                                    ?>
                                                      <!-- Modal -->
                                    <form action="index.php?mod=Admin&act=adddm" method="POST" role="form" enctype="multipart/form-data">
                                        <div class="modal fade" id="myModal" role="dialog">
                                            <div class="modal-dialog">
                                    
                                      <!-- Modal content-->

                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Thêm danh mục sản phẩm</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        
        
                                                            <div class="form-group">
                                                                <tr>
                                                                    <td>
                                                                        <label for="">Tên danh mục:</label>
                                                                        <input type="text" class="form-control" name="name" placeholder="Nhập tên danh mục">
                                                                    </td>
                                                                </tr>
                                                            </div>
                                                        
                                                            
                                                        
                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                             
                                                        <button type="submit" name="submit" class="btn btn-primary">Thêm mới</button>
                                                
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                                    </div>
                                                </div>
                                          
                                            </div>
                                        </div>
                                    </form>
                                </div> 
                            </div> 
                            <div class="panel-body"> 
                                <table class="table table-striped table-bordered table-list" id="myTable"> 
                                    <thead> 
                                        <tr> 
                                                <?php 
                                            if ($_SESSION['level']==2) {
                                                ?>
                                            <th><em class="fa fa-cog"></em>
                                            </th> 
                                        <?php } ?>
                                            <th class="hidden-xs">Id_dm</th> 
                                            <th>Tên danh mục</th> 

                                       </tr> 
                                    </thead> 
                                    <tbody>
                                        <?php 
                                          foreach ($data1 as $key => $value) {
                                        ?>
                                        <tr> 
                                               <?php 
                                            if ($_SESSION['level']==2) {
                                                ?>
                                           <td align="center">                 
                                            <a class="btn btn-default btn-lg box-right " data-toggle="modal" data-target="#updatedm<?php echo $value['id_dm'] ?>"><em class="fa fa-pencil">
                                           </em></a> 
                                        
                                                  <a class="btn btn-danger btn-lg box-right"  data-toggle="modal" data-target="#deletedm<?php echo $value['id_dm'] ?>"><em class="fa fa-trash"></em></a>
                                          
                                           <div id="deletedm<?php echo $value['id_dm'] ?>" class="modal fade" role="dialog">
                                              <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Thông báo</h4>
                                                  </div>
                                                  <div class="modal-body">
                                                    <p>Bạn có chắc chắn muốn xóa ?</p>

                                                  </div>
                                                  <div class="modal-footer">
                                                    <button class="btn btn-success font-a-1"><a href="index.php?id=<?php echo $value['id_dm'] ?>&mod=Admin&act=deletedm">Có</a></button>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                                  </div>
                                                </div>

                                              </div>
                                            </div>
                                            <form action="index.php?mod=Admin&act=updatedm" method="POST" role="form" enctype="multipart/form-data">

                                                <div id="updatedm<?php echo $value['id_dm'] ?>" class="modal fade" role="dialog">
                                                    <div class="modal-dialog">

                                                    <!-- Modal content-->                                                 
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title">Cập nhật</h4>
                                                            </div> 

                                                         
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    
                                                                    <label for="">id_dm</label>
                                                                    <input type="text" class="form-control" name="id_dm" value="<?php echo $value['id_dm'] ?>" readonly>
                                                                    
                                                                    <br>
                                                                    <label for="">Tên danh mục</label>
                                                                    <input type="text" class="form-control" name="name" value="<?php echo $value['ten_dm'] ?>">
                                                                    <br>
                                                            
                                                            
                                                                                                           
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" name="updatedm"  class="btn btn-primary font-a-1">Cập nhật</button>
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                                            </div>                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
             


                                           </td> 
                                             <?php }
                                          ?>
                                            <td><?php echo $value['id_dm'] ?></td>
                                           <td><?php echo $value['ten_dm'] ?></td> 
                                        </tr> 
                                        <?php 
                                          }
                                        ?>
                                    </tbody>
                                </table> 
                            </div> 
                       </div> 
                       <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    
    <?php if (isset($_COOKIE['adddm'])) { ?>
        <script>
            toastr.success('Thêm mới thành công !');
        </script>

    <?php } 

    ?>
    <?php if (isset($_COOKIE['updatedm'])) { ?>
        <script>
            toastr.success('Sửa thành công !');
        </script>

    <?php } 

    ?>
    <?php if (isset($_COOKIE['errr'])) { ?>
        <script>
            toastr.error('Danh mục sản phẩm đã tồn tại đã tồn tại !');
        </script>

    <?php } 

     ?>
     <?php if (isset($_COOKIE['deletedm'])) { ?>
        <script>
            toastr.success('Xóa Thành công !');
        </script>

    <?php } 

     ?>

    <script>
        $(document).ready(function(){
            $('#myTable').DataTable();
        });
    </script>