<center>
<!Doctype html>
<html>
<?php require "incloudes/head.php";?>
<title>COVID</title>

<body>
    <h2>Insertar pacients consultats</h2>
    <?php
    $DNI_Pacient = '';
    $Nom = '';
    $Llinatges = '';
    $HistorialMedic = '';
    $Email = '';
    $Pais = '';
    $Poblacio = '';
    $Edat = '';
    $CodiPostal = '';
    if (isset($_GET['DNI'])) {
        $query = "SELECT * FROM pacient WHERE DNI = \"$_GET[DNI]\";";
        $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
        $pacient = mysqli_fetch_assoc($result);

        if ($pacient["DNI"]) {
            $DNI_Pacient = $pacient["DNI"];
            $Nom = $pacient["Nom"];
            $Llinatges = $pacient["Llinatges"];
            $HistorialMedic = $pacient["HistorialMedic"];
            $Email = $pacient["Email"];
            $Pais = $pacient["Pais"];
            $Poblacio = $pacient["Poblacio"];
            $Edat = $pacient["Edat"];
            $CodiPostal = $pacient["CodiPostal"];
        }
    }
        ?>
    <div>
         <?php
         if ($DNI_Pacient) {
                echo '<h2> Actualitzant el pacient amb DNI: ' . $DNI_Pacient . '</h2>';
          } else {
                 echo '<h3> Inserta un nou pacient: </h3>';
          }
            ?>
    </div>

        <form class="box"  action="<?= ($DNI_Pacient) ? "update_api_pacient.php?id=$DNI_Pacient" : 'insert_api_pacient.php' ?>" method="post" enctype="multipart/form-data">

            <div>
            <input type="text" maxlength="9" placeholder="DNI" required minlenghth="2" name="DNI" value="<?=$DNI_Pacient?>">
            </div>

            <div>
            <input type="text" max="255" placeholder="Nom" required min="1" name="Nom" value="<?=$Nom?>">
            </div>

            <div>
            <input type="text" required min="255" placeholder="Llinatges" name="Llinatges" value="<?=$Llinatges?>">
            </div>

            <div>
            <input type="text" required min="255" placeholder="HistorialMedic" name="HistorialMedic" value="<?=$HistorialMedic?>">
            </div>

            <div>
            <input type="text" maxlength="255" placeholder="Email" required min="9" name="Email" value="<?=$Email?>">
            </div>

            <div>
            <input type="text" maxlength="255" placeholder="Pais" required minlength="2" name="Pais" value="<?=$Pais?>">
            </div>

            <div>
            <input type="text" maxlength="255" placeholder="Poblacio" name="Poblacio" requirep value="<?=$Poblacio?>">
            </div>

            <div>
            <input type="text" maxlength="255" placeholder="Edat" name="Edat" requirep value="<?=$Edat?>">
            </div>

            <div>
            <input type="text" maxlength="255" placeholder="CodiPostal" name="CodiPostal" requirep value="<?=$CodiPostal?>">
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