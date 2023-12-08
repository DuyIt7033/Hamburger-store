<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/test1.css">
</head>

<body id="body">
    <?php
        session_start(); 
        print_r($_SESSION);
        if($_SESSION) {
            if($_SESSION['role'] == 'admin') {
                header("Location: admin.php");
            } else {
                header("Location: survey.html");
            }
        }
    ?>

    <div id="login-card" class="card">
    <img src="/assets/hamburger.png" alt="">
        <div class="card-body">
            <h2 class="text-center">Đăng Nhập</h2>
            <br>
            <form action="login.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass">
                </div>
                <button type="submit" id="button" class="btn-block ">Đăng Nhập</button>
                <br>
               <div class="form-group-1">
                <!-- không có trang dk thì bỏ  -->
                <a href="./register.html">Đăng kí</a>
               </div>
            </form>
        </div>
        <div>
        </div>
    </div>

</body>

</html>>