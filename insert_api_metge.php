<?php
require "incloudes/mysql.php";
echo "<p> DNI:". $_POST["DNI"] . "</p>";
echo "<p> Nom:" . $_POST["Nom"] . "</p>";
echo "<p> Llinatges:" . $_POST["Llinatges"] . "</p>";
echo "<p> AnyQuanComença:" . $_POST["AnyQuanComença"] . "</p>";
echo "<p> Edat:" . $_POST["Edat"] . "</p>";
echo "<p> Email:" . $_POST["Email"] . "</p>";
echo "<p> Estudis:" . $_POST["Estudis"] . "</p>";
$query="INSERT INTO metge (DNI, Nom, Llinatges, AnyQuanComença, Edat, Email, Estudis)
        VALUES(\"$_POST[DNI]\",\"$_POST[Nom]\",\"$_POST[Llinatges]\",\"$_POST[AnyQuanComença]\",\"$_POST[Edat]\",\"$_POST[Email]\",\"$_POST[Estudis]\");";
        echo $query;
        $result=mysqli_query($bbdd,$query);
        if(!$result){
        echo "error query";
        print(mysqli_error($bbdd));
        }
?>