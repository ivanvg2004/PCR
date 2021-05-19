<!DOCTYPE html>
<html>
<body>
  <h1>Llista de PCR fetes</h1>
  <?php require"incloudes/header.php";?>
  <table> 
 <thead> 
  <tr>
     <th>Nom</th>
     <th>Positiu</th>
 </tr>
</thead>
<tbody>
<?php
    $query = "SELECT * FROM COVID;
    $result = mysqli_query($bbdd, $query);       
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                  <td>$row[Nom]</td>
                  <td>$row[Positiu]</td>
              </tr>";
       }
      ?>
 </tbody> 
</table>
</body>
</html>
