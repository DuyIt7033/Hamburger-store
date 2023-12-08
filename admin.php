<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <!-- admin.php -->
</head>
<body>
    <h1>admin</h1>
   <?php
   session_start(); 
    print_r($_SESSION);
   ?>
   <a href="./logout.php">logout</a>
</body>
</html>

