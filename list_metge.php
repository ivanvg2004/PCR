<center>
<!DOCTYPE html>
    <html>
<?php require "incloudes/head.php";?>
<?php require "incloudes/header.php";?>
<title>COVID</title>
<body>

    <h2> Llista dels pacients insertats</h2>

<body>
   
   </body>
   <form action="list_pacient.php" method="GET">
    <select name="AnyQuanComença">
    <option value="">  </option>
   <?php
   //Feim el filtre
        $query="SELECT DISTINCT AnyQuanComença FROM metge ORDER BY AnyQuanComença;";
    $result=mysqli_query($bbdd, $query);
    while ($row= mysqli_fetch_assoc($result)) {
        echo "<option value=\"$row[AnyQuanComença]\"> $row[AnyQuanComença] </option>";
    }
    ?>
    </select>
    <button type="submit"> Filtrar </button>
<button><a href="list_pacient.php">Reset</a></button>
    </form>
    <HR WIDTH=0% SIZE=0 />

<table>
 <thead> 
  <tr> 
   <th>DNI</th>
   <th>Nom</th>
   <th>Llinatges</th>
   <th>HistorialMedic</th>
   <th>Email</th>
   <th>Pais</th>
   <th>Poblacio</th>
   <th>Edat</th>
   <th>CodiPostal</th>
  </tr>
  </thead>
   <tbody>
      <?php
      // Ficam les dades a la taula
      $where= "";
      if (isset($_GET["AnyQuanComença"])) {
          $where = " WHERE AnyQuanComença = \"$_GET[AnyQuanComença]\" ";
      }
      $query = "SELECT * FROM pacient $where ORDER BY Nom";
      $result = mysqli_query($bbdd, $query);
      while ($row = mysqli_fetch_assoc($result)) {
         echo "<tr>
                  <td>$row[DNI]</td>
                  <td>$row[Nom]</td>
                  <td>$row[Llinatges]</td>
                  <td>$row[HistorialMedic]</td>
                  <td>$row[Email]</td>
                  <td>$row[Pais]</td>
                  <td>$row[Poblacio]</td>
                  <td>$row[Edat]</td>
                  <td>$row[CodiPostal]</td>
                  <td><button><a href=\"delete_api_pacient.php?DNI=$row[DNI]\">Eliminar</a></button>
                  <button><a href=\"insert_pacient.php?DNI_pacient=$row[DNI]\"> Editar</a></button></td>
               </tr>";
      }
      ?>
   </tbody>
</table>
</body>
    </html>
    </center>