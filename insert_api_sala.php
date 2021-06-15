<?php
require "incloudes/mysql.php";
echo "<p> ID:". $_POST["ID"] . "</p>";
echo "<p> Nom:" . $_POST["Nom"] . "</p>";
echo "<p> Llinatges:" . $_POST["Llinatges"] . "</p>";

$query="INSERT INTO pacient (DNI, Nom, Llinatges, HistorialMedic, Email, Pais, Poblacio, Edat, CodiPostal)
        VALUES(\"$_POST[DNI]\",\"$_POST[Nom]\",\"$_POST[Llinatges]\",\"$_POST[HistorialMedic]\",\"$_POST[Email]\",\"$_POST[Pais]\",\"$_POST[Poblacio]\",\"$_POST[Edat]\",\"$_POST[CodiPostal]\");";
        echo $query;
        $result=mysqli_query($bbdd,$query);
        if(!$result){
        echo "error query";
        print(mysqli_error($bbdd));
        }
?>