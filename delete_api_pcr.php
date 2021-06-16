<?php
require "incloudes/mysql.php";
$query="DELETE FROM pcr where ID=\"$_GET[ID]\";";
$result=mysqli_query($bbdd,$query);

if(!$result){
    $error = (mysqli_error($bbdd));
    header('Location: error.php?error=' . $error);
}else{
    header('Location: list_pcr.php');
}
?>