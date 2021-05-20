<!DOCTYPE html>
<html>
  <body>
  <h1>Insertar pacient</h1>
  <?php require"incloudes/header.php";?>
  <form action="insert_api_PCR.php" method="GET">
  <div>
  <label>Prueba</label>
  <select name="Resultado">
  <option value=""selected></option>
  <option value="Positivo">Positivo</option>
  <option value="Negativo">Negativo</option>
  </select>
  <label>DNI</label>
  <input name="DNI_Pacient" type="text" maxlenght="10" requirep> <br>
  <label>Sala</label>
  <select name="ID_Sala">
  <option value=""selected></option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <label>Fecha de la PCR</label>
  <input type="date" name="fecha" requirep>
  </select>
  <button type="submit">Enviar formulario</button>
  </div>
  </form>
  </body>
</html>
