<?php 
    session_start(); 

    if(isset($_SESSION['login']) == false || !isset($_SESSION['login']) ) {
        header("location: index.php"); 
    }
?>
<h1>
    Hello you are logged in
</h1>

<a href="logout.php"> <button> Logout </button> </a>