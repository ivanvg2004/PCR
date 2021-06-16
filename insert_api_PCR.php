<?php
require "incloudes/mysql.php";
$query="INSERT INTO pcr (Positiu, DataPCR, DNI_Pacient, DNI_Metge, ID_Sala)
        VALUES(\"$_POST[Positiu]\",\"$_POST[DataPCR]\",\"$_POST[DNI_Pacient]\",\"$_POST[DNI_Metge]\",\"$_POST[ID_Sala]\");";
        echo $query;
        $result=mysqli_query($bbdd,$query);
        if(!$result){
                $error = (mysqli_error($bbdd));
                header('Location: error.php?error=' . $error);
            }else{
                header('Location: insert_pcr.php');
            }
?>
