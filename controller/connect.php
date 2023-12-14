<?php
    $localhost ="localhost";
    $databaseName = "du_an_1";
    $user = "root";
    $password ="";

    $conn = new PDO("mysql:host=$localhost;dbname=$databaseName", $user, $password);

    if($conn){
        // echo "Kết nối thành công";
    }else{
        echo "Kết nối không thành công";
    }

?>