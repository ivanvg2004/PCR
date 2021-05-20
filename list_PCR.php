<!DOCTYPE html>
<html>
<body>
  <h1>Llista de PCR fetes</h1>
  <?php require"incloudes/header.php";?>
  <table> 
 <thead> 
  <tr>
     <th>Nombre del paciente</th>
     <th>DNI</th>
     <th>Médico</th>
     <th>Fecha de la PCR</th>
     <th>Sala</th>
     <th>Resultado</th>
 </tr>
</thead>
<tbody>
<?php
    $query = "SELECT * FROM COVID";
    $result = mysqli_query($bbdd, $query);       
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                  <td>$row[Nom]</td>
                  <td>$row[DNI_Pacient]</td>
              </tr>";
       }
      ?>
 </tbody> 
</table>
</body>
</html>
