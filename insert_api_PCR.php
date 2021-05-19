<?php
require "incloudes/mysql.php";
echo "<p> Nom: ". $_POST["Nom"]. "</p>";
echo "<p>Positiu:" . $_GET['Positiu']."</p>";
$query="INSERT INTO PCR (Nom,Positiu) VALUES(\"$_GET[Nom]\",\"$_GET[Positiu]\");";
echo $query;
?>
