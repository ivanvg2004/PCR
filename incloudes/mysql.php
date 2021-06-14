<?php
$database="localhost";
$user="root";
$pass="";
$name="COVID";
$bbdd=mysqli_connect($database,$user,$pass,$name);
    if(!$bbdd){
        echo"No hi ha connexió a...";
        print(mysqli_connect_error());
        exit();
    }
    else {
        echo "";
    }
    ?>