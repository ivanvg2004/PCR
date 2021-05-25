<!DOCTYPE html>
<html>
<body>
  <h1>Llista de PCR fetes</h1>
  <?php require"incloudes/header.php";?>
  <table> 
 <thead> 
  <tr>
     <th>DNI Paciente</th>
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
                  <td>$row[DNI_Pacient]</td>
                  <td>$row[Nom_Metge]</td>
                  
              </tr>";
       }
      ?>
 </tbody> 
</table>
</body>
</html>
