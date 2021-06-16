<?php 
    require "incloudes/mysql.php";
    $query="UPDATE pcr
    SET ID = \"$_POST[ID]\", Positiu = \"$_POST[Positiu]\", DataPCR = \"$_POST[DataPCR]\", DNI_Pacient = \"$_POST[DNI_Pacient]\", 
    DNI_Metge = \"$_POST[DNI_Metge]\", ID_Sala = \"$_POST[ID_Sala]\" 
    WHERE ID = \"$_GET[id]\";";
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        $error = (mysqli_error($bbdd));
        header('Location: error.php?error=' . $error);
    }else{
        header('Location: list_pcr.php');
    }
?>