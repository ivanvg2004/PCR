<!DOCTYPE html>
<html>
  <body>
  <h1>Insertar pacient</h1>
  <?php require"incloudes/header.php";?>
  <form action="insert_api_PCR.php" method="GET">
  <div>
  <label>PCR</label>
  <select name="PCR">
  <option value=""selected></option>
  <option value="Positivo">Positivo</option>
  <option value="Negativo">Negativo</option>
  </select>
  </div>
  <div>
  <button type="submit">Enviar</button>
  </div>
  </form>
  </body>
</html>
