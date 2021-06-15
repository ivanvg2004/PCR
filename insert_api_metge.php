<?php
require "incloudes/mysql.php";
echo "<p> DNI:". $_POST["DNI"] . "</p>";
echo "<p> Nom:" . $_POST["Nom"] . "</p>";
echo "<p> Llinatges:" . $_POST["Llinatges"] . "</p>";
echo "<p> HistorialMedic:" . $_POST["HistorialMedic"] . "</p>";
echo "<p> Email:" . $_POST["Email"] . "</p>";
echo "<p> Pais:" . $_POST["Pais"] . "</p>";
echo "<p> Poblacio:" . $_POST["Poblacio"] . "</p>";
echo "<p> Edat:" . $_POST["Edat"] . "</p>";
echo "<p> CodiPostal:" . $_POST["CodiPostal"] . "</p>";
$query="INSERT INTO pacient (DNI, Nom, Llinatges, HistorialMedic, Email, Pais, Poblacio, Edat, CodiPostal)
        VALUES(\"$_POST[DNI]\",\"$_POST[Nom]\",\"$_POST[Llinatges]\",\"$_POST[HistorialMedic]\",\"$_POST[Email]\",\"$_POST[Pais]\",\"$_POST[Poblacio]\",\"$_POST[Edat]\",\"$_POST[CodiPostal]\");";
        echo $query;
        $result=mysqli_query($bbdd,$query);
        if(!$result){
        echo "error query";
        print(mysqli_error($bbdd));
        }
?>