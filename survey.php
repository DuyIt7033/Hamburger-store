<?php 
    // survey SANP HAM
    // Bắt đầu một phiên làm việc (session)
    session_start();

    // Include your database connection
    include "db_con.php";

    $loai_protein = $_POST['loai_protein'];
    $banh_ngot = $_POST['banh_ngot'];
    $range_do_chin = $_POST['range_do_chin'];

    $toppings_checked = $_POST['toppings'];

    $str_checked = implode(",", $toppings_checked);
    $add_cheese = $_POST['add_cheese'];
    $banh_bao = $_POST['banh_bao'];
    $nuoc_sot =  $_POST['nuoc_sot'];
    $ghi_chu  = $_POST['ghi_chu'];

  
    // Lấy giá trị từ biến phiên (session)
    $user = $_SESSION['user_name'];

    // Them vao bang orders cac  du lieu
     $sql = "INSERT INTO orders (loai_protein, banh_ngot, range_do_chin, topping, add_cheese, banh_bao, nuoc_sot, ghi_chu, user)
        VALUES ('$loai_protein', '$banh_ngot', '$range_do_chin', '$str_checked', '$add_cheese', '$banh_bao', '$nuoc_sot', '$ghi_chu', '$user')";

  
    

    if ($conn->query($sql) === TRUE) {
        header("Location: succes.html");
        exit; 
    } else {
        header("Location: not-succes.html");
    }
?>