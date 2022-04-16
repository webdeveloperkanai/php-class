<?php 
    session_start(); 

    $username =  $_GET['username']; 
    $password =  $_GET['password'];
    
    if($username == "abcd" && $password=="ABCD" ) {
        // if username and password are correct
        $_SESSION['login'] = true; 
        header("location: home.php"); 
    } else {
        echo "<h1>Wrong username or password ! </h1> <a href='./index.php'> try again </a>";
    }
?>