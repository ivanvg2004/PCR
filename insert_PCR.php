<center>
<!Doctype html>
<html>
<?php require "incloudes/head.php";?>
<title>COVID</title>

<body>
    <h2>Insertar PCR realitzada</h2>
    <?php
    $ID = '';
    $Resultat = '';
    $DataPCR = '';
    $DNI_Pacient = '';
    $DNI_Metge = '';
    $ID_Sala = '';
    if (isset($_GET['ID'])) {
        $query = "SELECT * FROM pcr WHERE ID = \"$_GET[ID]\";";
        $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
        $pcr = mysqli_fetch_assoc($result);

        if ($pcr["ID"]) {
            $ID = $pcr["ID"];
            $Resultat = $pcr["Positiu"];
            $DataPCR = $pcr["DataPCR"];
            $DNI_Pacient = $pcr["DNI_Pacient"];
            $DNI_Metge = $pcr["DNI_Metge"];
            $ID_Sala = $pcr["ID_Sala"];
        }
    }
        ?>
    <div>
         <?php
         if ($ID) {
                echo '<h2> Actualitzant la PCR amb ID: ' . $ID . '</h2>';
          } else {
                 echo '<h3> Insertar una nova PCR: </h3>';
          }
            ?>
    </div>

        <form class="box"  action="<?= ($ID) ? "update_api_pcr.php?id=$ID" : 'insert_api_pcr.php' ?>" method="post" enctype="multipart/form-data">
            <div>
            <input type="text" max="255" placeholder="Resultat" required min="1" name="Positiu" value="<?=$Resultat?>">
            </div>
            <label>Data de la realització de la prova</label>
            <div>
            <input type="date" placeholder="Data de la realització de la prova" name="DataPCR" value="<?=$DataPCR?>">
            </div>

            <div>
            <label>DNI de el pacient</label>
            <select name="DNI_Pacient" required>
            <option value=""></option>
            <?php
            $query = "SELECT DNI, Nom from pacient;";
            $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
            while ($pacient = mysqli_fetch_assoc($result)) {
                $selected = '';
                if ($pacient['DNI'] == $DNI_Pacient) {
                    $selected = 'selected';
                }
                echo "<option $selected value=\"$pacient[DNI]\">$pacient[Nom]</option>";
            }
            ?>           
            </div>
            </select>

            <div>
            <label>DNI de el metge</label>
            <select name="DNI_Metge" required>
            <option value=""></option>
            <?php
            $query = "SELECT DNI, Nom from metge;";
            $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
            while ($metge = mysqli_fetch_assoc($result)) {
                $selected = '';
                if ($metge['DNI'] == $DNI_Metge) {
                    $selected = 'selected';
                }
                echo "<option $selected value=\"$metge[DNI]\">$metge[Nom]</option>";
            }
            ?>         
            </div>
          </select>
            <div>
            <label>ID de la Sala</label>
            <select name="ID_Sala" required>
            <option value=""></option>
            <?php
            $query = "SELECT ID from sala;";
            $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
            while ($sala = mysqli_fetch_assoc($result)) {
                $selected = '';
                if ($sala['ID'] == $ID_Sala) {
                    $selected = 'selected';
                }
                echo "<option $selected value=\"$sala[ID]\">$sala[ID]</option>";
            }
            ?>
            </div>
            </select>

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