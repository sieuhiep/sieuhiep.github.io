<style>
        i {
            cursor: pointer;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <div class="section">
<h1 class="text-center">Danh sách người mua</h1>
                                <table class="table table-hover table-striped">
                                    <tbody>
                                        <?php 
                                            if (isset($data)) {
                                            foreach ($data as $key => $value) {
                                        ?>
                                        <tr>
                                            <td>
                                                <!-- <a href="index.php?mod=Admin&act=detail" data-toggle="modal" data-target="#myModal"></a> -->
                                                <i data-toggle="modal" data-target="#detail<?php echo $value['id'] ?>" class="-alt fa fa-2x fa-eye fa-fw"></i>
                                            </td>
                                            <!-- <td>
                                                <h4>
                                                    <b>Xem chi tiết</b>
                                                </h4>
                                                <p>@ramonvillaw</p>
                                            </td> -->
                                            <td >
                                                <img style="height: 25%;width: 20%" src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png" class="img-circle" >
                                            </td>
                                            <td>
                                                <h4>
                                                    <b><?php echo $value['hten'] ?></b>
                                                </h4>
                                                <a href=""><?php echo $value['email'] ?></a>
                                            </td>
                                            <td><?php echo $value['mahoadon'] ?></td>
                                            <td>
                                                <div class="btn-group">
                                           
                                                    <button class="btn btn-default" value="left" type="button" data-toggle="modal" data-target="#xoa<?php echo $value['id'] ?>">
                                                        <i class="fa fa-times"></i> Xóa</button>
                                                    
                                                        <button class="btn btn-info" data-toggle="modal" data-target="#email<?php echo $value['id'] ?>" value="left" type="button">
                                                        <i class="fa fa-envelope-o" aria-hidden="true"></i> Gửi email</button> 
                                                        <button style="background-color: red" class="btn btn-info" data-toggle="modal" data-target="#sms<?php echo $value['id'] ?>" value="left" type="button">
                                                        <i class="fa fa-envelope-o" aria-hidden="true"></i> Gửi tin nhắn</button>
                                                    <a href="index.php?mod=Admin&act=cthoadon&id=<?php echo $value['mahoadon'] ?>"><button class="btn btn-default" value="right"    type="button" style="border-bottom-left-radius: 0px;border-top-left-radius: 0px;">
                                                        <i class="fa fa-print" aria-hidden="true"></i> In hóa đơn</button></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <div id="xoa<?php echo $value['id'] ?>" class="modal fade" role="dialog">
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
                                                    <button class="btn btn-success font-a-1"><a href="index.php?mod=Admin&act=xoa&id=<?php echo $value['mahoadon'] ?>" style="text-decoration: none;color: white;">Có</a></button>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                                  </div>
                                                </div>

                                              </div>
                                            </div>
                                        <div id="detail<?php echo $value['id'] ?>" class="modal fade" role="dialog">
                                              <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Thông tin <?php echo $value['hten'] ?></h4>
                                                  </div>
                                                  <div class="modal-body">
                                                    <ol>
                                                        <li>Số tiền đã dùng : $<?php echo $value['tongtien'] ?></li>
                                                        <li>Số điện thoại : <?php echo $value['sdt'] ?></li>
                                                        <li>Email : <?php echo $value['email']; ?></li>
                                                        <li>Địa chỉ : <?php echo $value['diachi'] ?></li>
                                                    </ol>
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                                  </div>
                                                </div>

                                              </div>
                                            </div>
                                            <form action="index.php?mod=Admin&act=sms" method="POST" role="form" enctype="multipart/form-data">

                                                <div id="sms<?php echo $value['id'] ?>" class="modal fade" role="dialog">
                                                    <div class="modal-dialog">

                                                    <!-- Modal content-->                                                 
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title">Gửi SMS</h4>
                                                            </div> 

                                                         
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    
                                                                    <label for="">Số điện thoại</label>
                                                                    <input type="text" class="form-control" name="sdt" value="0<?php echo $value['sdt'] ?>" readonly>
                                                                    
                                                                    <br>
                                                            
                                                                    <label for="">Nội dung</label>
                                                                    <input type="text" class="form-control" value="Cảm ơn quý khách đã mua hàng tại TBMOBI" name="content" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" name="send"  class="btn btn-primary font-a-1">Gửi</button>
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                                            </div>                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <form action="index.php?mod=Admin&act=send_email" method="POST" role="form" enctype="multipart/form-data">

                                                <div id="email<?php echo $value['id'] ?>" class="modal fade" role="dialog">
                                                    <div class="modal-dialog">

                                                    <!-- Modal content-->                                                 
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title">Gửi email</h4>
                                                            </div> 

                                                         
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    
                                                                    <label for="">Email</label>
                                                                    <input type="text" class="form-control" name="email" value="<?php echo $value['email'] ?>" readonly>
                                                                    
                                                                    <br>
                                                            
                                                                    <label for="">Tiêu đề</label>
                                                                    <input type="text" class="form-control" name="tieude" ">
                                                                    <br>
                                                            
                                                                    <label for="">Nội dung</label>
                                                                    <input type="text" class="form-control" name="content">
                                                                    <br>                                                         
                                                                    <label for="">Ảnh</label>
                                                                    <input type="file" class="form-control" name="img">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" name="send"  class="btn btn-primary font-a-1">Gửi</button>
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                                            </div>                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        <?php   } 
                                            }
                                        ?>
                                        
                                    </tbody>
                                </table>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

  <?php 

 ?>
 <?php if (isset($_COOKIE['email'])) { ?>
        <script>
            toastr.success(' Gửi email thành công !');
        </script>

    <?php } ?>
<?php if (isset($_COOKIE['sms'])) { ?>
        <script>
            toastr.success(' Gửi tin nhắn thành công !');
        </script>

    <?php }
     ?>
     <?php if (isset($_COOKIE['xoa'])) { ?>
        <script>
            toastr.success(' Xóa thành công !');
        </script>

    <?php } 

     ?>