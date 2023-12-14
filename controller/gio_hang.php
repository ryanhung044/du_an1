<?php
function update_cart($add = false)
{
    foreach ($_POST['quantity'] as $id => $quantity) {
        if ($quantity == 0) {
            deletecart($id);
        } else {
            if ($add) {
                $_SESSION['mycart'][$id] += $quantity;
            } else {
                $_SESSION['mycart'][$id] = $quantity;
            }
        }
    }
}

function deletecart($id)
{
    unset($_SESSION['mycart'][$id]);
}

function insert_shop_order($name, $phone, $address, $desc_order, $total_price, $date_order,$user_id,$hinh_thuc)
{
    $sql = "INSERT INTO shop_order(name,phone,address,desc_order,total_price,date_order,user_id,hinh_thuc) VALUES ('$name','$phone','$address','$desc_order','$total_price','$date_order','$user_id','$hinh_thuc')";
    pdo_execute($sql);
}

function one_sp_order()
{
    $sql = "SELECT * FROM shop_order order by id desc";
    return pdo_query_one($sql);
}

// function insert_shopping_cart_item($id,$quantity,$price,$product_id,$shopping_cart_id){
//     $sql = "INSERT INTO shopping_cart_item(quantity,price,product_id,shopping_cart_id) VALUES ('$quantity','$price','$product_id','$shopping_cart_id' WHERE product_id=$id)";
//     pdo_execute($sql);
// }

function insert_shopping_cart_item($array)
{
    $sql = " INSERT INTO `shopping_cart_item` ( `quantity`,`product_id`, `order_id`, `price`) VALUES " . $array . "";
    pdo_execute($sql);
}

// INSERT INTO `shopping_cart_item` (`id`, `quantity`, `product_id`, `shopping_cart_id`, `price`) VALUES (NULL, '2', '1', '1', '12999'), (NULL, '3', '1', '1', '213123');


