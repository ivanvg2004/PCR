<?php
require "incloudes/mysql.php";
echo "<p> ID:". $_POST["ID"] . "</p>";
echo "<p> Tamany:" . $_POST["Tamany"] . "</p>";
echo "<p> Ubicació:" . $_POST["Ubicació"] . "</p>";

$query="INSERT INTO sala (ID, Tamany, Ubicació)
        VALUES(\"$_POST[ID]\",\"$_POST[Tamany]\",\"$_POST[Ubicació]\");";
        echo $query;
        $result=mysqli_query($bbdd,$query);
        if(!$result){
        echo "error query";
        print(mysqli_error($bbdd));
        }
?>