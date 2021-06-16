<center>
<!Doctype html>
<html>
<?php require "incloudes/head.php";?>
<title>COVID</title>

<body>
    <h2>Insertar metges a la plantilla</h2>
    <?php
    #Insertam les dades a editar
    $DNI_Metge = '';
    $Nom = '';
    $Llinatges = '';
    $AnyQuanComença = '';
    $Edat = '';
    $Email = '';
    $Estudis = '';
    $Imatge = '';
    if (isset($_GET['DNI'])) {
        $query = "SELECT * FROM metge WHERE DNI = \"$_GET[DNI]\";";
        $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
        $metge = mysqli_fetch_assoc($result);

        if ($metge["DNI"]) {
            $DNI_Metge = $metge["DNI"];
            $Nom = $metge["Nom"];
            $Llinatges = $metge["Llinatges"];
            $AnyQuanComença = $metge["AnyQuanComença"];
            $Edat = $metge["Edat"];
            $Email = $metge["Email"];
            $Estudis = $metge["Estudis"];
            $Imatge = $metge["Imatge"];
        }
    }
        ?>
    <div>
         <?php
            //Feim el formulari
         if ($DNI_Metge) {
                echo '<h2> Actualitzant el meteg amb DNI: ' . $DNI_Metge . '</h2>';
          } else {
                 echo '<h3> Inserta un nou metge: </h3>';
          }
            ?>
    </div>

        <form class="box"  action="<?= ($DNI_Metge) ? "update_api_metge.php?id=$DNI_Metge" : 'insert_api_metge.php' ?>" method="post" enctype="multipart/form-data">

            <div>
            <input type="text" maxlength="9" placeholder="DNI" required minlenghth="2" name="DNI" value="<?=$DNI_Metge?>">
            </div>

            <div>
            <input type="text" max="255" placeholder="Nom" required min="1" name="Nom" value="<?=$Nom?>">
            </div>

            <div>
            <input type="text" required min="255" placeholder="Llinatges" name="Llinatges" value="<?=$Llinatges?>">
            </div>

            <div>
            <input type="text" required min="255" placeholder="AnyQuanComença" name="AnyQuanComença" value="<?=$AnyQuanComença?>">
            </div>

            <div>
            <input type="text" maxlength="255" placeholder="Edat" required min="9" name="Edat" value="<?=$Edat?>">
            </div>

            <div>
            <input type="text" maxlength="255" placeholder="Email" required minlength="2" name="Email" value="<?=$Email?>">
            </div>

            <div>
            <input type="text" maxlength="255" placeholder="Estudis" name="Estudis" requirep value="<?=$Estudis?>">
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