<!DOCTYPE html>
<html>
  <body>
  <h1>Insertar pacient</h1>
  <?php require"incloudes/header.php";?>
  <form action="insert_api_PCR.php" method="GET">
  <div>
  <label>DNI Pacient</label>
  <input type="text" maxlenght="15"required name="DNI"/>
  <button type="submit">Enviar</button>
  </div>
  <div>
  <label>Positiu</label>
  <select name="Positiu">
  <option value="Sí">Sí</option>
  <option value="No" selected>No</option>
  </select>
  </div>
  </form>
  </body>
</html>
