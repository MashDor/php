<html>
  <body>
    <?php
    $factory_products = array(
      array(1, 2, 3, 4),
      array(5, 6, 7, 8),
      array(9, 10, 11, 12),
    )
    ?>
    <table border=1 style="border-collapse: collapse;">
      <tr><td></td><td>Продукт 1</td><td>Продукт 2</td><td>Продукт 3</td><td>Продукт 4</td><td>Всего:</td></tr>
      <?php
      $products_summ = array(0, 0, 0, 0, 0);
      for ($i = 0; $i < 3; $i++) {
        echo "<tr><td>Завод $i</td>";
        $factory_summ = 0;
        for ($j = 0; $j < 4; $j++) {
          $count = $factory_products[$i][$j];
          $factory_summ += $factory_products[$i][$j];
          $products_summ[$j] += $factory_products[$i][$j];
          $products_summ[4] += $factory_products[$i][$j];
          echo "<td>$count</td>";
        }
        echo "<td>$factory_summ</td>";
        echo "</tr>";
      }
      echo "<tr><td>Всего:</td>";
      for ($i = 0; $i < 5; $i++) {
        echo "<td>$products_summ[$i]</td>";
      }
      echo "</tr>";
      ?>
    </table>
  </body>
</html>