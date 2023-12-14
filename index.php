<?php
session_start();
include "controller/pdo.php";
include "controller/danh_muc.php";
include "controller/san_pham.php";
include "controller/users.php";
include "controller/gio_hang.php";
include "controller/don_hang.php";
include "controller/binhluan.php";
include "controller/bien_the.php";
// include "header.php";
if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}
if (!empty($_SESSION['mycart'])) {
    $pro = one_in_sp();
}

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $one_email = user_email($email);
                $one_user = user_username($username);
                if ($email == $one_email['email']) {
                    $err = "Email đã tồn tại";
                    // header("location:sigup_gia_huy.php?err=" . $err);
                    header("location:signup.php?err=" . $err);
                    echo "Email đã tồn tại";
                } elseif ((filter_var($email, FILTER_VALIDATE_EMAIL) === false)) {
                    $err = "Email không đúng định dạng";
                    header("location:signup.php?err=" . $err);
                    echo "Email không đúng định dạng";
                } else if ($username == $one_user['username']) {
                    $err = "username đã tồn tại";
                    header("location:signup.php");
                    echo "Tên đăng nhập đã tồn tại";
                } else {
                    insert_user($email, $username, $password);
                    $thongbao = "Đăng kí tài khoản thành công";
                    header("location:signin.php?err=" . $thongbao);
                    die;
                }
            }
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $check_user = check_user($username, $password);
                // print_r(is_array($check_user)) ;die;
                if ($check_user['role'] == "user") {
                    if (is_array($check_user)) {
                        $_SESSION['username'] = $check_user;
                        header("location:index.php");
                        die;
                    }
                } elseif ($check_user['role'] == "admin") {
                    if (is_array($check_user)) {
                        $_SESSION['username'] = $check_user;
                        header("location:admin/index.php");
                        die;
                    }
                } else {
                    $err = "Tài khoản hoặc mật khẩu không đúng !";
                    header("location:signin.php");
                    die;
                }
            }
            break;
        case 'thoat':
            session_unset();
            header("location:index.php");
            die;

        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là: " . $checkemail['password'];
                    header("location: quenmk.php?thongbao=" . $thongbao);
                    die;
                } else {
                    $thongbao = "EMAIL không tồn tại!";
                    header("location: quenmk.php?thongbao=" . $thongbao);
                    die;
                }
            }
            include "./quenmk.php";
            break;
        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                update_cart(true);
            }
            header("location:index.php");
            include "main.php";
            break;

        case 'buynow':
            if (isset($_POST['buynow']) && ($_POST['buynow'])) {
                update_cart(true);
            }
            header("location:index.php?act=thanhtoan");
            include "view/payment.php";

            // header("location:index.php?act=thanhtoan");
            break;

        case 'deletecart':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                deletecart($id);
            } else {
                $_SESSION['mycart'] = [];
            }
            header("location:index.php");
            break;

        case 'submit':
            if (isset($_POST['update_click']) && ($_POST['update_click'])) {
                update_cart();
                header("location:index.php");
                die;
            } elseif (isset($_POST['order_click']) && ($_POST['order_click'])) {
                include "header.php";
                update_cart();
                include "view/payment.php";
                include "footer.php";
                die;
            }
            break;

        case 'thanhtoan':
            if (isset($_POST['thanhtoan']) && ($_POST['thanhtoan'])) {
                if (empty($_POST['name'])) {
                    $err = "Vui lòng nhập tên người nhận";
                } elseif (empty($_POST['phone'])) {
                    $err = "Vui lòng nhập số điện thoại";
                } elseif (empty($_POST['address'])) {
                    $err = "Vui lòng nhập địa chỉ";
                } else {
                    $pro = one_in_sp();
                    $total = 0;
                    $orderProducts = array();
                    foreach ($pro as $cart) {
                        $orderProducts[] = $cart;
                        $total += $cart['price'] * $_SESSION['mycart'][$cart['id']];
                    }
                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];
                    $desc_order = $_POST['desc_order'];
                    $date_order = date('Y-m-d');
                    $hinh_thuc = "Khi nhận hàng";
                    if (isset($_SESSION['username'])) {
                        $user_id = $_SESSION['username']['id'];
                        // $one_user = one_user($user_id);
                    } else {
                        $user_id = 0;
                    }
                    // var_dump( $_SESSION['username']); die;
                    insert_shop_order($name, $phone, $address, $desc_order, $total, $date_order, $user_id, $hinh_thuc);
                    $one_order = one_sp_order();
                    $one_order_id = $one_order['id'];
                    $array = "";
                    foreach ($orderProducts as $key => $order) {
                        $array .= "('" . $_SESSION['mycart'][$order['id']] . "','" . $order['id'] . "','" . $one_order_id . "', '" . $order['price'] . "')";
                        if ($key != count($orderProducts) - 1) {
                            $array .= ",";
                        }
                    }
                    insert_shopping_cart_item($array);
                }
                header("location:index.php?act=chitietdon&id=$one_order_id");
                die;
            } elseif (isset($_GET['partnerCode'])) {
                $pro = one_in_sp();
                $total = 0;
                $orderProducts = array();
                foreach ($pro as $cart) {
                    $orderProducts[] = $cart;
                    $total += $cart['price'] * $_SESSION['mycart'][$cart['id']];
                }
                $name = "Trần Huy Hưng";
                $phone = "0398623059";
                $address = "Hà Nội";
                $desc_order = $_POST['desc_order'];
                $date_order = date('Y-m-d');
                $hinh_thuc = "ATM Momo";
                if (isset($_SESSION['username'])) {
                    $user_id = $_SESSION['username']['id'];
                    // $one_user = one_user($user_id);
                } else {
                    $user_id = 0;
                }
                // var_dump( $_SESSION['username']); die;
                insert_shop_order($name, $phone, $address, $desc_order, $total, $date_order, $user_id, $hinh_thuc);
                $one_order = one_sp_order();
                $one_order_id = $one_order['id'];
                $array = "";
                foreach ($orderProducts as $key => $order) {
                    $array .= "('" . $_SESSION['mycart'][$order['id']] . "','" . $order['id'] . "','" . $one_order_id . "', '" . $order['price'] . "')";
                    if ($key != count($orderProducts) - 1) {
                        $array .= ",";
                    }
                }
                insert_shopping_cart_item($array);
                header("location:index.php?act=chitietdon&id=$one_order_id");
            }
            include "header.php";
            include "view/payment.php";
            include "footer.php";
            die;
            break;

        case 'updatedonhang':
            $id = $_GET['id'];
            $trang_thai = $_GET['trang_thai'];
            updatedonhang($id, $trang_thai, $now);
            header("location:index.php?act=lichsudon");
            die;
            include "view/lsdon.php";
            break;
        case '':
            break;
        case 'ctsp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $listctsp = one_sp($id);
                $nameDm = oneDM($id);
            }
            $listbt = all_bienThe();
            include "view/product_details.php";
            die;
            break;
            // case 'binhluan':
            //     if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
            //         $noidung = $_POST['noidung'];
            //         $id = $_POST['id'];
            //         $ngaybinhluan = date('h:i:sa d/m/Y');
            //         $name=$_POST['name'];
            //         insert_binhluan($noidung,$id,$ngaybinhluan,$name);
            //         header("location: ".$_SERVER['HTTP_REFERER']);
            //     }
            //     include "view/product_details.php";
            //     break;


            break;
    }
}
$list_dm = alldm();
if (isset($_POST['timkiem']) && ($_POST['timkiem'])) {
    $key = $_POST['key'];
} else {
    $key = "";
}
$category_id = 0;
$allsp = all_sp_k($key, $category_id);
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'loaisp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $loaisp = loaisp($id);
            }
            include "view/loaisp.php";
            break;
        case 'lichsudon':
            if (isset($_SESSION['username'])) {
                $user_id = $_SESSION['username']['id'];
                $listdonhang = lsdonhang($user_id);
            }
            // include "admin/donhang/chitietdon.php";
            include "view/lsdon.php";
            break;


        case 'chitietdon':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET['id'];
                $chitietdon = joindonhang($id);
            }
            include "admin/donhang/chitietdon.php";
            break;

        case 'banner':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET['id'];
                $show_banner = SQL_banner($id);
            }
            include "main.php";

            break;
        case '':

            break;
        case 'updatetk':
            if (isset($_POST['update']) && ($_POST['update'])) {
                $name = $_POST['name'];
                $id = $_POST['id'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                // $file = $_FILES['hinh'];
                // $hinh = $file['name'];
                // move_uploaded_file($file['tmp_name'], "../view/images/" . $hinh);

                update_tk($id, $name, $username, $email, $phone, $address);
                $_SESSION['username'] = check_user($username, $password);
                echo "Cập nhật tài khoản thành công";
            }
            // header("location:index.php");
            include "view/updatetk.php";
            break;
        case 'tracuudonhang':
            if (isset($_POST['tracuu']) && ($_POST['tracuu'])) {
                $id = $_POST['id'];
                $phone = $_POST['phone'];
            } else {
                $id = "";
                $phone = "";
            }
            $listdonhang = tracuu($id, $phone);
            include "view/tracuudon.php";
            break;
        case 'dmk':
            if (isset($_POST['gui']) && ($_POST['gui'])) {
                $password = $_POST['password'];
                $password_n = $_POST['password_n'];
                $r_password_n = $_POST['r_password_n'];
                if (isset($_SESSION['username']) && (is_array($_SESSION['username']))) {
                    $mat_khau = $_SESSION['username']['password'];
                    $id = $_SESSION['username']['id'];
                    // echo "<pre>";
                    // var_dump($mat_khau, $id);
                    // die;
                }
                if ($mat_khau == $password) {
                    if ($password_n == $r_password_n) {
                        updatemk($id, $password_n);
                        // session_unset();
                        session_reset();

                        echo "Đổi mật khẩu thành công";
                    } else {
                        echo "Nhập lại mật khẩu chưa chính xác";
                    }
                } else {
                    echo "Mật khẩu hiện tại không đúng";
                }
            }
            include "view/doimatkhau.php";
            break;


        default:

            break;
    }
} else {

    include "main.php";
}


include "footer.php";
