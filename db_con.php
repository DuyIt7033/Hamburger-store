<?php
    //db_con.php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myweb";
    $conn = new mysqli($servername, $username, $password, $dbname);
  
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
?>