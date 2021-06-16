<center>
<!DOCTYPE html>
    <html>
<?php require "incloudes/head.php";?>
<title>COVID</title>
<body>

    <h2> Llista dels pacients insertats</h2>

<body>
   
   </body>
   <form action="list_pacient.php" method="GET">
    <select name="Poblacio">
    <option value="">  </option>
   <?php
   //Feim el filtre
        $query="SELECT DISTINCT Poblacio FROM pacient ORDER BY Poblacio;";
    $result=mysqli_query($bbdd, $query);
    while ($row= mysqli_fetch_assoc($result)) {
        echo "<option value=\"$row[Poblacio]\"> $row[Poblacio] </option>";
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
      $where= "";
      if (isset($_GET["Poblacio"])) {
          $where = " WHERE Poblacio = \"$_GET[Poblacio]\" ";
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
                  <button><a href=\"insert_pacient.php?DNI=$row[DNI]\"> Editar</a></button></td>
               </tr>";
      }
      ?>
   </tbody>
</table>
</body>
    </html>
    </center>