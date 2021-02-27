<?php 
 // php start
 $con = mysqli_connect('localhost','root','','php-class');

 if(!$con) {
     echo "Not connected !";
 } 


    $n = mysqli_query($con,"SELECT * FROM `user` ");
    
    while($name = mysqli_fetch_array($n)) {
        echo $name['email'];
        echo "<br>";
    }


 
    if(isset($_POST['submit'])) {
        
        $email = $_POST['email']; 
        
        $q = mysqli_query($con,"INSERT INTO `user` (`email`) VALUES ('$email') ");


        // echo $email;
    }




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Class</title>
</head>
<body>
    

        <form action="" method="post">

            <input type="text" name="email" placeholder="Email id">

            <input type="submit" value="Save" name="submit">

        </form>



</body>
</html>


