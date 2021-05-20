<?php
require "incloudes/mysql.php";
echo "<p> DNI_Pacient: ". $_GET["DNI_Pacient"] . "</p>";
echo "<p>Resultat:" . $_GET["Resultado"] . "</p>";
echo "<p>ID_Sala:" . $_GET["ID_Sala"] . "</p>";
$query="INSERT INTO COVID (DNI_Pacient,Resultado) ç
        VALUES(\"$_GET[DNI_Pacient]\",\"$_GET[Resultado]\");";
        echo $query;
        $result=mysqli_query($bbdd,$query);
        if(!$result){
        echo "error query";
        print(mysqli_error($bbdd));
        }
?>
