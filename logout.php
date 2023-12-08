<?php
  session_start(); 
    session_unset();

    // destroy the session
    session_destroy();
    
  // Unset and expire the cookie
    setcookie('user_name', '', time() - 3600, '/');

    header("Location: index.php");
?>