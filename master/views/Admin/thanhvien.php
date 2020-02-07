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
                                        <h3 class="panel-title">Danh sách thành viên</h3> 
                                    </div> 
                                                <?php 
                                            if ($_SESSION['level']==2) {
                                                ?>
                                    <button type="button" class="btn btn-info btn-lg box-right" data-toggle="modal" data-target="#myModal">Thêm mới</button>
                                                    <?php } 
                                                    ?>
                                                      <!-- Modal -->
                                    <form action="index.php?mod=Admin&act=addtv" method="POST" role="form" enctype="multipart/form-data">
                                        <div class="modal fade" id="myModal" role="dialog">
                                            <div class="modal-dialog">
                                    
                                      <!-- Modal content-->

                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Thêm thành viên</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        
        
                                                            <div class="form-group">
                                                                <tr>
                                                                    <td>
                                                                        <label for="">Tài khoản thành viên:</label>
                                                                        <input type="text" class="form-control" name="name" placeholder="Nhập tên tài khoản ">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <label for="">Nhập mật khẩu:</label>
                                                                        <input type="text" class="form-control" name="pass" placeholder="Nhập tên tài khoản ">
                                                                    </td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>
                                                                        <label for="">Vị trí:</label>
                                                                        <select name="chucvu" class="form-control">
                                                                        <option value="unselect" selected>Lựa chọn vị trí</option>
                                                                      
                                                                    <option value="2">Quản lý</option>
                                                                    <option value="1">Nhân viên</option>
                                                                    </select>
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

                                            <th class="hidden-xs">Id_tv</th> 
                                            <th>Tên thành viên</th> 
                                            <th>Mật khẩu</th> 

                                       </tr> 
                                    </thead> 
                                    <tbody>
                                        <?php 
                                          foreach ($data2 as $key => $value) {
                                        ?>
                                        <tr> 
                                               <?php 
                                            if ($_SESSION['level']==2) {
                                                ?>
                                           <td align="center">  
                                            <?php 
                                                        if ($value['level']!='2') {
                                                            ?>               
                                            <a class="btn btn-default btn-lg box-right " data-toggle="modal" data-target="#updatetv<?php echo $value['id'] ?>"><em class="fa fa-pencil">
                                           </em></a> 
                                                   
                                                            <a class="btn btn-danger btn-lg box-right"  data-toggle="modal" data-target="#deletetv<?php echo $value['id'] ?>"><em class="fa fa-trash"></em></a>
                                                            <?php
                                                        }
                                                        
                                                     ?>

                                                     <?php 
                                                        if ($_SESSION['login']=='admin'&&$value['level']=='2'&&$value['user']!='admin') {
                                                            ?>               
                                            <a class="btn btn-default btn-lg box-right " data-toggle="modal" data-target="#updatetv<?php echo $value['id'] ?>"><em class="fa fa-pencil">
                                           </em></a> 
                                                   
                                                            <a class="btn btn-danger btn-lg box-right"  data-toggle="modal" data-target="#deletetv<?php echo $value['id'] ?>"><em class="fa fa-trash"></em></a>
                                                            <?php
                                                        }
                                                        
                                                     ?>
                                            
                                          
                                           <div id="deletetv<?php echo $value['id'] ?>" class="modal fade" role="dialog">
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
                                                    <button class="btn btn-success font-a-1"><a href="index.php?id=<?php echo $value['id'] ?>&mod=Admin&act=deletetv">Có</a></button>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                                  </div>
                                                </div>

                                              </div>
                                            </div>
                                            <form action="index.php?mod=Admin&act=updatetv" method="POST" role="form" enctype="multipart/form-data">

                                                <div id="updatetv<?php echo $value['id'] ?>" class="modal fade" role="dialog">
                                                    <div class="modal-dialog">

                                                    <!-- Modal content-->                                                 
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title">Cập nhật</h4>
                                                            </div> 

                                                         
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    
                                                                    <label for="">id</label>
                                                                    <input type="text" class="form-control" name="id" value="<?php echo $value['id'] ?>" readonly>
                                                                    
                                                                    <br>
                                                                    <label for="">Tên tài khoản</label>
                                                                    <input type="text" class="form-control" name="name" value="<?php echo $value['user'] ?>">
                                                                    <br>
                                                            
                                                                    <br>
                                                                    <label for="">Mật khẩu</label>
                                                                    <input type="text" class="form-control" name="pass" value="<?php echo $value['password'] ?>">
                                                                    <br>
                                                                                                           
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" name="updatetv"  class="btn btn-primary font-a-1">Cập nhật</button>
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                                            </div>                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
             


                                           </td> 
                                             <?php }
                                          ?>
                                            <td><?php echo $value['id'] ?></td>
                                           <td><?php echo $value['user'] ?></td> 
                                           <td><?php echo $value['password'] ?></td> 
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

    <?php } ?>
      <?php if (isset($_COOKIE['errrr'])) { ?>
        <script>
            toastr.error('Tài khoản này đã tồn tại !');
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