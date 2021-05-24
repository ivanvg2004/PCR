<?php
require "incloudes/mysql.php";
echo "<p> DNI_Pacient: ". $_GET["DNI_Pacient"] . "</p>";
echo "<p> Prueba:" . $_GET["Prueba"] . "</p>";
echo "<p> ID_Sala:" . $_GET["ID_Sala"] . "</p>";
echo "<p> Fecha_PCR:" . $_GET["Fecha_PCR"] . "</p>";
echo "<p> Nom_Metge:" . $_GET["Nom_Metge"] . "</p>";
$query="INSERT INTO PCR (Positiu, DataPCR, DNI_Pacient, Nom_Metge, ID_Sala)
        VALUES(\"$_GET[Prueba]\",\"$_GET[Fecha_PCR]\",\"$_GET[DNI_Pacient]\",\"$_GET[Nom_Metge]\",\"$_GET[ID_Sala]\");";
        echo $query;
        $result=mysqli_query($bbdd,$query);
        if(!$result){
        echo "error query";
        print(mysqli_error($bbdd));
        }
?>
