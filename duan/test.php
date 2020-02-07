<link href="rateit/src/rateit.css" rel="stylesheet" type="text/css">
<script src="rateit/src/jquery.rateit.js" type="text/javascript"></script> 
<div id="rateit_star"></div>
<script type="text/javascript">
    $(function () { $('#rateit_star').rateit({min: 1, max: 10, step: 2}); });
</script>
<div id="rateit_star1"  data-productid="123"></div>
<script type="text/javascript">
   $(function () {
       $('#rateit_star1').rateit({min: 1, max: 10, step: 1});
       $('#rateit_star1').bind('rated', function (e) {
         var ri = $(this);
         var value = ri.rateit('value');
         var productID = ri.data('productid');
         alert('Bạn đã đánh giá '+value +' sao cho sản phẩm có id là:'+productID );
         //không cho phép đánh giá,sau khi đã đánh giá xong
         ri.rateit('readonly', true);
     });
   });
</script>