<?php
function Func_1 ($x, $y) {
  if ($x + $y == 0) echo 'Деление на ноль невозможно!';
  else return 1 / ($x + $y);
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
  <span>Результат 1 / (2 + 3): <?php echo Func_1(2, 3) ?></span><br>
  <span>Результат 1 / (2 - 3): <?php echo Func_1(2, -3) ?></span><br>
  <span>Результат 1 / (2 - 2): <?php echo Func_1(2, -2) ?></span><br>
</body>
</html>