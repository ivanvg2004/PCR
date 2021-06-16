<?php
require "incloudes/mysql.php";
$query="INSERT INTO metge (DNI, Nom, Llinatges, AnyQuanComença, Edat, Email, Estudis)
        VALUES(\"$_POST[DNI]\",\"$_POST[Nom]\",\"$_POST[Llinatges]\",\"$_POST[AnyQuanComença]\",\"$_POST[Edat]\",\"$_POST[Email]\",\"$_POST[Estudis]\");";
        echo $query;
        $result=mysqli_query($bbdd,$query);
        if(!$result){
                $error = (mysqli_error($bbdd));
                header('Location: error.php?error=' . $error);
            }else{
                header('Location: insert_metge.php');
            }
?>