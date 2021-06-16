<?php
require "incloudes/mysql.php";
$query="INSERT INTO pacient (DNI, Nom, Llinatges, HistorialMedic, Email, Pais, Poblacio, Edat, CodiPostal)
        VALUES(\"$_POST[DNI]\",\"$_POST[Nom]\",\"$_POST[Llinatges]\",\"$_POST[HistorialMedic]\",\"$_POST[Email]\",\"$_POST[Pais]\",\"$_POST[Poblacio]\",\"$_POST[Edat]\",\"$_POST[CodiPostal]\");";
        echo $query;
        $result=mysqli_query($bbdd,$query);
        if(!$result){
                $error = (mysqli_error($bbdd));
                header('Location: error.php?error=' . $error);
            }else{
                header('Location: insert_pacient.php');
            }
?>
