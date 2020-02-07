<?php 
                                            if ($_SESSION['level']=="2") {
                                                ?>
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
                                                      <!-- Modal -->
                                </div> 
                            </div> 
                            <div class="panel-body"> 
                                <table class="table table-striped table-bordered table-list" id="myTable"> 
                                    <thead> 
                                        <tr> 
                                            <th><em class="fa fa-cog"></em>
                                            </th> 
                                            <th class="hidden-xs">Id</th> 
                                            <th>Name</th> 
                                            <th>Price</th> 
                                            <th>Image</th>

                                       </tr> 
                                    </thead> 
                                    <tbody>
                                        <?php
                                        if (isset($data)) {
                                            if ($data !='') {
                                          foreach ($data as $key => $value) {
                                        ?>
                                        <tr> 
                                           <td align="center">                 
                                            <a class="btn btn-default btn-lg box-right " data-toggle="modal" data-target="#refresh<?php echo $value['mahang'] ?>"><em class="fa fa-refresh">
                                           </em></a> 
                                            <?php  if ($_SESSION['level']=="2") {
                                                ?>
                                           <a class="btn btn-danger btn-lg box-right"  data-toggle="modal" data-target="#delete<?php echo $value['mahang'] ?>"><em class="fa fa-trash"></em></a>
                                       <?php } ?>
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
                                                    <button class="btn btn-success font-a-1"><a href="index.php?id=<?php echo $value['mahang'] ?>&mod=Admin&act=deleteRecyclebin">Có</a></button>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                                  </div>
                                                </div>

                                              </div>
                                            </div>

                                            <div id="refresh<?php echo $value['mahang'] ?>" class="modal fade" role="dialog">
                                                <div class="modal-dialog">

                                                <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Thông báo</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Bạn có muốn khôi phục lại sản phẩm ?</p>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-success font-a-1"><a href="index.php?id=<?php echo $value['mahang'] ?>&mod=Admin&act=refresh">Có</a></button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                           </td> 
                                           <td><?php echo $value['mahang'] ?></td> 
                                           <td><?php echo $value['tenhang'] ?></td> 
                                           <td><?php echo $value['price'] ?></td> 
                                           <td class="img"><img src="img/<?php echo $value['img'] ?>" alt=""></td> 
                                        </tr> 
                                        <?php 
                                                }
                                            }
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
    
    <?php if (isset($_COOKIE['add'])) { ?>
        <script>
            toastr.success('Thêm mới thành công !');
        </script>

    <?php } 

    ?>
    <?php if (isset($_COOKIE['update'])) { ?>
        <script>
            toastr.success('Sửa thành công !');
        </script>

    <?php } 

    ?>
    <?php if (isset($_COOKIE['err'])) { ?>
        <script>
            toastr.error('Sản phẩm đã tồn tại !');
        </script>

    <?php } 

     ?>
     <?php if (isset($_COOKIE['deleteRecyclebin'])) { ?>
        <script>
            toastr.success(' Xóa thành công !');
        </script>

    <?php } 

     ?>
    <?php if (isset($_COOKIE['thongbao'])) { ?>

        <script>
            toastr.success('Đã có người mua hàng !');
        </script>

    <?php } ?>
     <?php if (isset($_COOKIE['refresh'])) { ?>

        <script>
            toastr.success('Đã khôi phục lại sản phẩm!');
        </script>

    <?php } }
    else{
        include_once('views/admin/index.php');}
        ?>