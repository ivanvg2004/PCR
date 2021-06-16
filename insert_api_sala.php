<?php
require "incloudes/mysql.php";
$query="INSERT INTO sala (Tamany, Ubicació)
        VALUES(\"$_POST[Tamany]\",\"$_POST[Ubicació]\");";
        echo $query;
        $result=mysqli_query($bbdd,$query);
        if(!$result){
                $error = (mysqli_error($bbdd));
                header('Location: error.php?error=' . $error);
            }else{
                header('Location: insert_sala.php');
            }
?>