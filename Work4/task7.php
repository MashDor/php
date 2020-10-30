<?php
include('people.php');
$youngest_index = 0;
$oldest_index = 0;
$young_count = 0;
foreach ($people as $index => $person) {
  if ($people[$youngest_index]['birth_year'] < $person['birth_year']) $youngest_index = $index;
  if ($people[$oldest_index]['birth_year'] > $person['birth_year']) $oldest_index = $index;
  if ($person['birth_year'] < 1990) $young_count++;
}
?>
<html>
  <body>
    <table border=1px style="border-collapse: collapse; margin-bottom: 24px;">
      <tr><th width=200px>Фамилия</th><th width=200px>Имя</th><th width=200px>Отчество</th><th width=200px>Год рождения</th></tr>
      <?php
      foreach ($people as $index => $person) {
        $bgcolor = $index == $youngest_index ? green : ( $index == $oldest_index ? red : white );
        echo "<tr bgcolor=$bgcolor>";
        foreach ($person as $value) {
          echo "<td>$value</td>";
        }
        echo "</tr>";
      }
      ?>
    </table>
    <span><b>Общее число жителей, родившихся после 1990 года:</b> <?php echo $young_count ?><span>
  </body>
</html>