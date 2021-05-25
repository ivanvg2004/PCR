<!DOCTYPE html>
<html>
  <body>
  <h1>Insertar pacient</h1>
  <?php require "incloudes/header.php";?>
  <?php require "incloudes/mysql.php";?>
  <form action="insert_api_PCR.php" method="GET">
  <div>
  <label>Prueba</label>
  <select name="Prueba" required>
  <option value="" selected></option>
  <option value="1">Positivo</option>
  <option value="0">Negativo</option>
  </select>
  <label>DNI</label>
  <select name="DNI_Pacient" required> 
  <input name="DNI_Pacient" type="text" maxlenght="30" required> <br>
  </select>
  <label>Sala</label>
  <select name="ID_Sala"required>
  <?php
  $query = "SELECT * FROM SALA ORDER BY ID";
  $result = mysqli_query($bbdd, $query);
  while($row = mysqli_fetch_assoc($result)){
    echo "<option value=\"$row[DNI]\">$row[DNI] - $row[Nom]<option>";
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
