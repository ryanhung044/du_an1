<?php
function SQL_banner(){
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY image";
    $banner = pdo_query($sql);
    return $banner;
}


?>