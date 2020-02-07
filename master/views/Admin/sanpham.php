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
                                        <h3 class="panel-title">Danh sách sản phẩm</h3> 
                                    </div> 
                                       <?php 
                                            if ($_SESSION['level']==2) {
                                                ?>
                                    <button type="button" class="btn btn-info btn-lg box-right" data-toggle="modal" data-target="#myModal">Thêm mới</button>
                                    <?php }
                                          ?>
                                                      <!-- Modal -->
                                    <form action="index.php?mod=Admin&act=add" method="POST" role="form" enctype="multipart/form-data">
                                        <div class="modal fade" id="myModal" role="dialog">
                                            <div class="modal-dialog">
                                    
                                      <!-- Modal content-->

                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Thêm sản phẩm</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        
        
                                                            <div class="form-group">
                                                                <tr>
                                                                    <td>
                                                                        <label for="">Mã sản phẩm</label>
                                                                        <input type="text" class="form-control" name="masp" placeholder="Nhập mã sản phẩm">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <label for="">Tên sản phẩm</label>
                                                                    <input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm">
                                                                </tr>
                                                                <tr>
                                                                    <label for="">Màu sắc</label>
                                                                    <input type="text" class="form-control" name="color" placeholder="Nhập màu">
                                                                </tr>
                                                                <tr>
                                                                    <label for="">Giá tiền</label>
                                                                    <input type="text" class="form-control" name="price" placeholder="Nhập giá tiền">
                                                                </tr>
                                                                <tr>
                                                                    <label for="">Số lượng</label>
                                                                    <input type="text" class="form-control" name="slg" placeholder="Nhập số lượng sản phẩm">
                                                                </tr>
                                                                <tr>
                                                                    <div class="form-group">
                                                                    <label>Nhà cung cấp:</label>
                                                                    <select name="id_dm" class="form-control">
                                                                        <option value="unselect" selected>Lựa chọn nhà cung cấp</option>
                                                                       <?php 
                                                                    foreach ($data1 as $key => $value) {
                                                                    ?>
                                                                    <option value="<?php echo $value['id_dm']?>"><?php echo $value['ten_dm']; ?></option>
                                                                    <?php } ?>
                                                                    </select>
                                                                    </div>
                                                                </tr>
                                                                <tr>
                                                                    <label for="">Ảnh minh họa</label>
                                                                    <input type="file" name="img">
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
                                            <th class="hidden-xs">Mã sản phẩm</th> 
                                            <th>Tên sản phẩm</th> 
                                            <th>Số lượng</th>
                                            <th>Giá</th> 
                                            <th>Ảnh</th>

                                       </tr> 
                                    </thead> 
                                    <tbody>
                                        <?php 
                                          foreach ($data as $key => $value) {
                                        ?>
                                        <tr> 
                                                <?php 
                                            if ($_SESSION['level']==2) {
                                                ?>
                                           <td align="center">
                                                
                                                           
                                            <a class="btn btn-default btn-lg box-right " data-toggle="modal" data-target="#update<?php echo $value['mahang'] ?>"><em class="fa fa-pencil">
                                           </em></a> 
                                    
                                            
                                                  <a class="btn btn-danger btn-lg box-right"  data-toggle="modal" data-target="#delete<?php echo $value['mahang'] ?>"><em class="fa fa-trash"></em></a>
                                         
                                           <div id="delete<?php echo $value['mahang'] ?>" class="modal fade" role="dialog">
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
                                                    <button class="btn btn-success font-a-1"><a href="index.php?id=<?php echo $value['mahang'] ?>&mod=Admin&act=delete">Có</a></button>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                                  </div>
                                                </div>

                                              </div>
                                            </div>
                                            <form action="index.php?mod=Admin&act=update" method="POST" role="form" enctype="multipart/form-data">

                                                <div id="update<?php echo $value['mahang'] ?>" class="modal fade" role="dialog">
                                                    <div class="modal-dialog">

                                                    <!-- Modal content-->                                                 
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title">Cập nhật</h4>
                                                            </div> 

                                                         
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    
                                                                    <label for="">Mã sản phẩm</label>
                                                                    <input type="text" class="form-control" name="masp" value="<?php echo $value['mahang'] ?>" readonly>
                                                                    
                                                                    <br>
                                                            
                                                                    <label for="">Tên sản phẩm</label>
                                                                    <input type="text" class="form-control" name="name" value="<?php echo $value['tenhang'] ?>">
                                                                    <br>
                                                            
                                                                    <label for="">Màu</label>
                                                                    <input type="text" class="form-control" name="color" value="<?php echo $value['mausac'] ?>">
                                                                    <br>
                                                            
                                                                    <label for="">Giá tiền </label>
                                                                    <input type="text" class="form-control" name="price" value="<?php echo $value['price'] ?>">
                                                                    <br>                                        
                                                                    <label for="">Số lượng</label>
                                                                    <input type="text" class="form-control" name="slg" value="<?php echo $value['soluong'] ?>">
                                                                    <br>  
                                                                      <div class="form-group">
                                                                    <label>Nhà cung cấp</label>
                                                                        <select class="form-control" name="id_dm">
                                                                   <?php 
                                                                    foreach ($data1 as $key => $value1) {
                                                                    ?>
                                                                        <option
                                                                        <?php
                                                                            if ($value['id_dm']==$value1['id_dm']) {
                                                                                echo 'selected="selected"';
                                                                            }
                                                                        ?>
                                                                         value="<?php echo $value1['id_dm']; ?>"><?php echo $value1['ten_dm']; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                                    <br>                 
                                                                    <label for="">Ảnh</label>
                                                                    <input type="file" name="img"><input type="hidden" name="img" value="<?php echo $value['img']; ?>">
                                                                    <span class="thumb"><img width="300px" height="300px" src="img/<?php echo $value['img'] ?>" /></span>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" name="update"  class="btn btn-primary font-a-1">Cập nhật</button>
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                                            </div>                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
             


                                           </td> 
                                              <?php }
                                          ?>
                                           <td><?php echo $value['mahang'] ?></td> 
                                           <td><?php echo $value['tenhang'] ?></td> 
                                           <td><?php echo $value['soluong'] ?></td>
                                           <td><?php echo $value['price'] ?></td> 
                                           <td class="img"><img src="img/<?php echo $value['img'] ?>" alt=""></td> 
                                        </tr> 
                                        <?php 
                                          }
                                        ?>
                                    </tbody>
                                </table> 
                            </div> 
                       </div> 
                       <script src="vendor/jquery/jquery.min.js"></script>
                       <script>
        $(document).ready(function(){
            $('#myTable').DataTable();
        });
    </script>
    