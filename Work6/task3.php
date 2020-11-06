<?php
  function Distance ($x1, $y1, $x2, $y2) {
    return sqrt(($x2 - $x1) ** 2 + ($y2 - $y1) ** 2);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  if (!isset($_REQUEST['x1']) || !isset($_REQUEST['x2']) || !isset($_REQUEST['y1']) || !isset($_REQUEST['y2'])) {
  ?>
  <form>
    <label>Точка 1: </label><input type="number" name="x1" style="width: 50px;"><input type="number" name="y1" style="width: 50px;"><br>
    <label>Точка 2: </label><input type="number" name="x2" style="width: 50px;"><input type="number" name="y2" style="width: 50px;"><br>
    <button type="submit">ОК</button>
    <button type="reset">Отмена</button>
  </form>
  <?php
  } else {
  ?>
  <span>
    <?php
    $x1 = $_REQUEST['x1'];
    $x2 = $_REQUEST['x2'];
    $y1 = $_REQUEST['y1'];
    $y2 = $_REQUEST['y2'];
    if (Distance(0, 0, $x1, $y1) < Distance(0, 0, $x2, $y2)) echo 'Точка 1 ближе к началу координат.';
    elseif (Distance(0, 0, $x1, $y1) > Distance(0, 0, $x2, $y2)) echo 'Точка 2 ближе к началу координат.';
    else echo 'Точки 1 и 2 находятся на одинаковом расстоянии от начала координат.';
    ?>
  </span>
  <?php
  }
  ?>
</body>
</html>