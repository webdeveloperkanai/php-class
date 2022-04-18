<?php 
    session_start();  
    session_destroy(); 
    // setcookie("login", false, time()-10); 
    header("location: index.php");
?>