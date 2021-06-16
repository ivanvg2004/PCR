<?php 
    require "incloudes/mysql.php";
    $query="UPDATE sala
    SET ID = \"$_POST[ID]\", 
    Tamany = \"$_POST[Tamany]\", CP = \"$_POST[Ubicació]\";";
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        $error = (mysqli_error($bbdd));
        header('Location: error.php?error=' . $error);
    }else{
        header('Location: list_sala.php');
    }
?>