<sytle>


<table border="5" >
  <head>
    <tr>
      <th>perkalian</th>
      <th>Hasil</th>
    </tr>
  </head>

  <body>
    
    <?php
    
    for ($i = 2; $i <= 100; $i=$i+2) 
    {
      $perkalian = $i * $i;
      $hasil = $i * $i;
      echo "<tr>";
      echo "<td>$i x $i</td>";
      echo "<td>$hasil</td>";
      echo "</tr>";
    }
    ?>
  </body>
</table>
