<?php 
    session_start(); 

    $username =  $_POST['username']; 
    $password =  $_POST['password'];
    
    if($username == "abcd" && $password=="ABCD" ) {
        // if username and password are correct
        // session declare 
        $_SESSION['login'] = true; 
        // cookie diclare

        // setcookie("login",true , time()+86400 );

        // header("location: home.php"); 
       echo "<script>location.href='home.php'</script> "; 
    } else {
        echo "<h1>Wrong username or password ! </h1> <a href='./index.php'> try again </a>";
    }


    // auto login with GET method 
    // $username =  $_GET['username']; 
    // $password =  $_GET['password'];
    
    // if($username == "abcd" && $password=="ABCD" ) {
    //     // if username and password are correct
    //     $_SESSION['login'] = true; 
    //     // header("location: home.php"); 
    //    echo "<script>location.href='home.php'</script> ";
    //    echo "<h1>You are logged in";
    // } else {
    //     echo "<h1>Wrong username or password ! </h1> <a href='./index.php'> try again </a>";
    // }
?>

<!-- <script> location.href = 'home.php';  </script> -->