<?php
require "incloudes/mysql.php";
$query="DELETE FROM pacient where DNI=\"$_GET[DNI]\";";
$result=mysqli_query($bbdd,$query);

if(!$result){
    $error = (mysqli_error($bbdd));
    header('Location: error.php?error=' . $error);
}else{
    header('Location: list_pacient.php');
}
?>