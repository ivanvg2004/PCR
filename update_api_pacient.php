<?php 
    require "incloudes/mysql.php";
    $query="UPDATE pacient
    SET DNI = \"$_POST[DNI]\", Nom = \"$_POST[Nom]\", 
    Llinatges = \"$_POST[Llinatges]\", HistorialMedic = \"$_POST[HistorialMedic]\", Email = \"$_POST[Email]\", 
    Pais = \"$_POST[Pais]\", Poblacio = \"$_POST[Poblacio]\", Edat = \"$_POST[Edat]\", CodiPostal = \"$_POST[CodiPostal]\"
    WHERE DNI = \"$_GET[id]\";";
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        $error = (mysqli_error($bbdd));
        header('Location: error.php?error=' . $error);
    }else{
        header('Location: list_pacient.php');
    }
?>