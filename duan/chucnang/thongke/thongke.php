<?php
    $fp='chucnang/thongke/thongke.txt';
    $fo=fopen($fp,'r');
    $count=fread($fo,filesize($fp));
    $count++;
    $fc=fclose($fo);
    $fo=fopen($fp,'w');
    $fw=fwrite($fo,$count);
    $fc=fclose($fo);
?>
<div id="counter">
    <style>
    span{
        color:red;
    }
    </style>
            <h2 class="h2-bar">thống kê truy cập</h2>
            <p>Hiện có <span><b><?php echo $count; ?></b></span> người đang xem</p>
</div>