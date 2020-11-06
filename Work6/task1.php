<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  define('PI', 3.14);

  function Circle_area($radius) {
    return (PI * $radius ** 2);
  }

  function Sphere_volume($radius) {
    return (4 / 3 * PI * $radius ** 3);
  }

  echo "<span>Площадь круга: ", Circle_area(2), "</span><br>";
  echo "<span>Объем сферы: ", Sphere_volume(2), "</span>";
  ?>
</body>
</html>