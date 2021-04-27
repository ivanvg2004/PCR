<?php
require "incloudes/mysql.php";
echo "<p>DNI:" . $_GET['DNI_Pacient']."</p>";
$query="INSERT INTO PCR (Nom,DNI_Pacient) VALUES(\"$_GET[Nom]\",\"$_GET[DNI_Pacient]\");";
echo $query;
?>
