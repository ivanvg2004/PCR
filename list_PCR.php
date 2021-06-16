<center>
<!DOCTYPE html>
    <html>
<?php require "incloudes/head.php";?>
<title>COVID</title>
<body>

    <h2> Llista de proves fetes</h2>

<body>
   
   </body>
   <form action="list_pcr.php" method="GET">
    <select name="DataPCR">
    <option value="">  </option>
   <?php
   //Feim el filtre
        $query="SELECT DISTINCT DataPCR FROM pcr ORDER BY DataPCR;";
    $result=mysqli_query($bbdd, $query);
    while ($row= mysqli_fetch_assoc($result)) {
        echo "<option value=\"$row[DataPCR]\"> $row[DataPCR] </option>";
    }
    ?>
    </select>
    <button type="submit"> Filtrar </button>
<button><a href="list_pcr.php">Reset</a></button>
    </form>
    <HR WIDTH=0% SIZE=0 />

<table>
 <thead> 
  <tr> 
   <th>Numero d'identificació</th>
   <th>Resultat</th>
   <th>Data de la realització de la prova</th>
   <th>Pacient</th>
   <th>Metge</th>
   <th>Sala</th>
  </tr>
  </thead>
   <tbody>
      <?php
      // Ficam les dades a la taula
      $where= "";
      if (isset($_GET["AnyQuanComença"])) {
          $where = " WHERE AnyQuanComença = \"$_GET[AnyQuanComença]\" ";
      }
      $query = "SELECT * FROM pcr $where ORDER BY ID";
      $result = mysqli_query($bbdd, $query);
      while ($row = mysqli_fetch_assoc($result)) {
         echo "<tr>
                  <td>$row[ID]</td>
                  <td>$row[Positiu]</td>
                  <td>$row[DataPCR]</td>
                  <td>$row[DNI_Pacient]</td>
                  <td>$row[DNI_Metge]</td>
                  <td>$row[ID_Sala]</td>
                  <td><button><a href=\"delete_api_pcr.php?ID=$row[ID]\">Eliminar</a></button>
                  <button><a href=\"insert_pcr.php?ID=$row[ID]\"> Editar</a></button></td>
               </tr>";
      }
      ?>
   </tbody>
</table>
</body>
    </html>
    </center>