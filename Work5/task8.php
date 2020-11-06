<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Построение таблицы</h1>
  <form>
    <label for="rows-count">Количество строк</label><br>
    <input min=1 max=10 type="number" id="rows-count" name=rows_count><br>
    <label for="cols-count">Колиество столбцов</label><br>
    <input min=1 max=10 type="number" id="cols-count" name=cols_count><br>
    <button type="submit">OK</button>
    <button type="reset">Отмена</button>
  </form>
  <?php
  echo '<table border="1">';
  for ($i = 1; $i <= $_REQUEST['rows_count']; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= $_REQUEST['cols_count']; $j++) echo "<td>$i:$j</td>";
    echo '</tr>';
  }
  echo '</table>';
  ?>
</body>
</html>