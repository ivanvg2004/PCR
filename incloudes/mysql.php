<?php
$database="localhost";
$user="root";
$pass="";
$name="COVID";
$bbdd=mysqli_connect($database,$user,$pass,$name);
    if($bbdd==false){
        echo"No hi ha connexió a...";
        print(mysqli_connect_error());
        exit();
    }

    /*$result=mysqli_query($bbdd,$query);
    if(!$result){
    echo "error query";
    print(mysqli_error($bbdd));
    }*/
    ?>