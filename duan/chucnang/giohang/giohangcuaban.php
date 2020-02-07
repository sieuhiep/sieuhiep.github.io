<style>
    i{
        position:relative;
    }
   #y-cart-main span{
        position:absolute;
        margin-left:15px;
        font-size:15px;
        z-index:100;
        color:#ffffff;
    }
    </style>
<div id="y-cart">
    <div id="y-cart-main">
        <a style="color:green" href="index.php?page_layout=giohang"><p data-toggle="tooltip" title="Chi tiết giỏ hàng"><span><?php if (isset($_SESSION['giohang'])) {
           echo count($_SESSION['giohang']);
        }
        else {
            echo 0;
        } ?></span><i class="fa fa-shopping-cart fa-2x"></i> </p></a>
    </div>
</div>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>