<!DOCTYPE html>
<html>
  <body>
  <h1>Insertar pacient</h1>
  <?php require"incloudes/header.php";?>
  <form action="insert_api_PCR.php" method="GET">
  <div>
  <label>Prueba</label>
  <select name="Positiu">
  <option value=""selected></option>
  <option value="Positiva">Positivo</option>
  <option value="Negativa">Negativo</option>
  </select>
  <label>DNI</label> 
  <input name="DNI_Pacient" type="text" maxlenght="10" requirep>
  </div>
  <div>
  <button type="submit">Enviar</button>
  </div>
  </form>
  </body>
</html>
