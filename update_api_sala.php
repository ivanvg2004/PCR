<?php 
    require "incloudes/mysql.php";
    $query="UPDATE sala
    SET Tamany = \"$_POST[Tamany]\", Ubicació = \"$_POST[Ubicació]\"
    WHERE ID = \"$_GET[id]\";";
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        $error = (mysqli_error($bbdd));
        header('Location: error.php?error=' . $error);
    }else{
        header('Location: list_sala.php');
    }
?>