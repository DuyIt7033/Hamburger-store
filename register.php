<!-- register dang ki.php -->
<?php 
    include "db_con.php";
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $pass_hashed = password_hash($pass, PASSWORD_DEFAULT);
    $email = $_POST['email'];

    $sql = "INSERT INTO `users`(`username`, `password`, `email`) 
    VALUES ('$name', '$pass', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Đăng ký thành công !";

         // Set cookie for user_name
        setcookie('user_name', $name, time() + 3600, '/');

        header("Location: login.php");
        exit; 
    } else {
        echo "Thêm dữ liệu thất bại: " . $conn->error;
    }
?>
