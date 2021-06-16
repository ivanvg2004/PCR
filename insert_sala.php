<center>
<!Doctype html>
<html>
<?php require "incloudes/head.php";?>
<title>COVID</title>

<body>
    <h2>Insertar sales</h2>
    <?php
    $ID = '';
    $Tamany = '';
    $Ubicació = '';
    if (isset($_GET['ID'])) {
        $query = "SELECT * FROM sala WHERE ID = \"$_GET[ID]\";";
        $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
        $sala = mysqli_fetch_assoc($result);

        if ($sala["ID"]) {
            $ID = $sala["ID"];
            $Tamany = $sala["Tamany"];
            $Ubicació = $sala["Ubicació"];
            
        }
    }
        ?>
    <div>
         <?php
         if ($ID) {
                echo '<h2> Actualitzant la sala amb ID: ' . $ID . '</h2>';
          } else {
                 echo '<h3> Inserta una nova sala: </h3>';
          }
            ?>
    </div>

        <form class="box"  action="<?= ($ID) ? "update_api_sala.php?id=$ID" : 'insert_api_sala.php' ?>" method="post" enctype="multipart/form-data">



            <div>
            <input type="text" max="255" placeholder="Tamany" required min="1" name="Tamany" value="<?=$Tamany?>">
            </div>

            <div>
            <input type="text" required min="255" placeholder="Ubicació" name="Ubicació" value="<?=$Ubicació?>">
            </div>

            
    <div>
    <input type="reset">
    </div>

    <div>
    <input type="submit" value="Enviar">
    </div>

    </form>
</body>

</html>
</center>