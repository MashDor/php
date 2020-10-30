<html>
  <body>
    <table border="1px;">
      <?php
      $rows = 5;
      $colors = array(magenta, yellow, lime, coral, cyan);
      for ($i = 1; $i <= $rows; $i++) {
        $current_color = $colors[$i - 1];
        echo "<tr><td>$i цвет</td><td align='center' bgcolor=$current_color>$current_color</td></tr>";
      }
      ?>
    </table>
  </body>
</html>