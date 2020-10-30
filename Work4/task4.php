<html>
  <body>
    <table border="1px;">
      <?php
      for ($i = 1; $i <= 9; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 9; $j++) {
            if ($i == 1 || $j == 1) $bgcolor = lightblue;
            else $bgcolor = white;
            if ($i == 1 && $j == 1) $text = "";
            else $text = $i * $j;
            echo "<td bgcolor=$bgcolor width='30px' align='center'>$text</td>";
        }
        echo "</tr>";
      };
      ?>
    </table>
  </body>
</html>