<?php
function insert_binhluan( $noi_dung, $date, $product_id, $user_id)
{
    $sql = "INSERT INTO binh_luan(noi_dung,date,product_id,user_id) VALUES('$noi_dung','$date','$product_id','$user_id')";
    pdo_execute($sql);
}
function loadall_binhluan($product_id)
{
    $sql = "SELECT * FROM binh_luan join users ON binh_luan.user_id=users.id WHERE product_id='".$product_id."' ORDER BY product_id DESC";
    return pdo_query($sql);
}
