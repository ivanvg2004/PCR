<center>
<!DOCTYPE html>
    <html>
<?php require "incloudes/head.php";?>
<title>COVID</title>
<body>

    <h2> Llista de les sales insertades</h2>

<body>
   
   </body>
   <form action="list_sala.php" method="GET">
    <select name="Ubicació">
    <option value="">  </option>
   <?php
   //Feim el filtre
        $query="SELECT DISTINCT Ubicació FROM sala ORDER BY Ubicació;";
    $result=mysqli_query($bbdd, $query);
    while ($row= mysqli_fetch_assoc($result)) {
        echo "<option value=\"$row[Ubicació]\"> $row[Ubicació] </option>";
    }
    ?>
    </select>
    <button type="submit"> Filtrar </button>
<button><a href="list_sala.php">Reset</a></button>
    </form>
    <HR WIDTH=0% SIZE=0 />

<table>
 <thead> 
  <tr> 
   <th>ID</th>
   <th>Tamany</th>
   <th>Ubicació</th>
  </tr>
  </thead>
   <tbody>
      <?php
      // Ficam les dades a la taula
      $where= "";
      if (isset($_GET["Ubicació"])) {
          $where = " WHERE Ubicació = \"$_GET[Ubicació]\" ";
      }
      $query = "SELECT * FROM sala $where ORDER BY Ubicació";
      $result = mysqli_query($bbdd, $query);
      while ($row = mysqli_fetch_assoc($result)) {
         echo "<tr>
                  <td>$row[ID]</td>
                  <td>$row[Tamany]</td>
                  <td>$row[Ubicació]</td>
                  <td><button><a href=\"delete_api_sala.php?ID=$row[ID]\">Eliminar</a></button>
                  <button><a href=\"insert_sala.php?ID=$row[ID]\"> Editar</a></button></td>
               </tr>";
      }
      ?>
   </tbody>
</table>
</body>
    </html>
    </center>