<style>
    .err {
        color: red;
    }
</style>
<h1>Thêm danh mục</h1>
<form action="" method="POST">
    <input type="text" name="name" id="" placeholder="Nhập tên danh mục">
    <span class="err">*
        <?php echo $nameErr?? ''; ?>
    </span>
    <input type="submit" class="btn" name="add_dm" value="Thêm mới">
</form>
<?php
// Validate Name
// function validateName($name)
// {
//     // Không được bỏ trống
//     if (empty($name)) {
//         return "Tên không được bỏ trống!";
//     } else {
//         // Ktra tên có ký tự đặc biệt hoặc số hay không
//         if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
//             // preg_match: ktra và lấy thông tin từ chuỗi dữ liệu
//             // =>>> để so sánh với dữ liệu nhập vào
//             // =>>> trả về true khi 2 dữ liệu khớp nhau, ngược lại là false
//             return "Tên chỉ được là chữ cái và khoảng trắng!";
//             // "/.../": biểu thị bắt đầu và kết thúc BT chính quy
//             // "^": đại diện cho vị trí bắt đầu
//             // "[a-zA-Z ]":đại diện cho tất cả các ký tự
//             // "*": đại diện cho việc ký tự đó có thể xuất hiện bao nhiêu lần
//             // "$": đại diện cho vị trí kết thúc
//         }
//     }
//     return "";
// }
// // Định nghĩa các biến thành rỗng
// $name =  "";
// $nameErr =  "";


// // $_SERVER["REQUEST_METHOD"]: để kiểm tra xem có 1 phương thức nào tồn tại hay không
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Ktra tên
//     $name = $_POST["name"];
//     $nameErr = validateName($name);

   
// }

// if (isset($_POST["submit"])) {
//         if ($nameErr == "" && $emailErr == "") {
//             echo "<h3 style='color:green'><b>Bạn đã gửi thông tin thành công</b></h3>";
//             // In các thông tin vừa nhập ra màn hình
//             echo "<h4>Thông tin của bạn vừa gửi là:</h4>";
//             echo "Tên: " . $name;
//             echo "<br>";
//             echo "Email: " . $email;
//             echo "<br>";
//             echo "SĐT: " . $phone;
//             echo "<br>";
//             echo "Ngày sinh: " . $birthday;
//             echo "<br>";
//             echo "Giới tính: " . $gender;
//             echo "<br>";
//             echo "Sở thích: ";
//             foreach ($hobbie as $value) {
//                 echo $value . ", ";
//             }
//         } else {
//             echo "<h3 style='color:red'><b>Bạn cần KT thông tin trước khi gửi</b></h3>";
//         }
//     }
?>
