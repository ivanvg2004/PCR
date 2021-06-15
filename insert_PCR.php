<center>
<!DOCTYPE html>
<html>
  <?php require "incloudes/head.php";?>
  <?php require "incloudes/header.php";?>
  <body>
  <h1>Insertar PCR</h1>
  <form action="insert_api_PCR.php" method="GET">
  <div>
  <label>Prueba</label>
  <select name="Prueba" required>
  <option value=""selected></option>
  <option value="1">Positivo</option>
  <option value="0">Negativo</option>
  </select>
  <label>DNI</label>
  <input name="DNI_Pacient" type="text" maxlenght="30" required> <br>
  <label>Sala i Metge</label>
  <select name="ID_Sala" required>
  <option value=""selected></option>
  <?php
  $query = "SELECT * FROM SALA ORDER BY ID" AND "SELECT * FROM METGE ORDER BY DNI";
  $result = mysqli_query($bbdd, $query);
  while($row = mysqli_fetch_assoc($result)){
    echo "<option value=\"$row[ID]\", \"$row[Nom]\">$row[ID] - $row[Nom]<option>";
  }
  ?>
  </select>
  <label>Fecha PCR</label>
  <input type="date" name="Fecha_PCR" required>
  <button type="submit">Enviar</button>
  </div>
  </form>
  </body>
</html>
<center>
