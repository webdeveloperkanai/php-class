
<!-- using cookie  -->
<?php /*
    session_start(); 

    if(isset($_COOKIE['login']) == false || !isset($_COOKIE['login']) ) {
        header("location: index.php"); 
    }
?>
<h1>
    Hello you are logged in with cookie
</h1>

<a href="logout.php"> <button> Logout </button> </a>

<?php */ 
    session_start(); 

    if(isset($_SESSION['login']) == false || !isset($_SESSION['login']) ) {
        header("location: index.php"); 
    }
?>
<h1>
    Hello you are logged in with cookie
</h1>

<a href="logout.php"> <button> Logout </button> </a>


