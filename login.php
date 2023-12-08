<?php
    session_start(); 

    include "db_con.php";
    if (isset($_POST['name']) && isset($_POST['pass'])) {
        $name = $_POST['name'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM users where username= '$name'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $hashed_pass = $row['password'];
        setcookie('user_name', $row['username'], time() + 3600, '/');


        if(password_verify($pass, $hashed_pass)){
            $_SESSION['user_name']=$row['username'];
            $_SESSION['pass_word']=$row['password'];
            $_SESSION['role']=$row['role'];
           
            print_r($_SESSION);
            if ($row['role'] == 'admin') {
                  header('Location: admin.php');
            }
            else{
                  header('Location: survey.html');
            }      
        }
        else{
          header('Location: survey.html');
        }
          
    }
        else{
          header("Location: index.php");
          exit();
        }

    
    $conn->close();
    
?>