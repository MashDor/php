<?php
function power($base, $exp) {
  if ($exp > 0) return $base * power($base, $exp - 1);
  elseif ($exp < 0) return 1 / power($base, -$exp);
  else return 1;
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
  <span>
    Значение выражения равно: <?php
    $n = 3;
    $m = 2;
    echo (3 * power(2, -$n));
    echo (power(5, $n) - 4 * power(6, $m)) / (3 * power(2, -$n));
    ?>
  </span>
</body>
</html>