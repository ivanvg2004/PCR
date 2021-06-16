<?php 
    require "incloudes/mysql.php";
    $query="UPDATE metge
    SET Nom = \"$_POST[Nom]\", 
    Llinatges = \"$_POST[Llinatges]\", AnyQuanComença = \"$_POST[AnyQuanComença]\", Edat = \"$_POST[Edat]\", 
    Email = \"$_POST[Email]\", Estudis = \"$_POST[Estudis]\" 
    WHERE DNI = \"$_GET[id]\";";
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        $error = (mysqli_error($bbdd));
        header('Location: error.php?error=' . $error);
    }else{
        header('Location: list_metge.php');
    }
?>