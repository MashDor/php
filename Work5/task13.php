<?php
$cdrom = array('Aser' => 300, 'LG' => 400, 'Nec' => 500);
$hdd = array('20GB' => 1500, '40GB' => 2000, '80GB' => 2500);
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
  if (!isset($_REQUEST['button'])) {
  ?>
  <span>Здравствуйте!</span>
  <form>
    <label for="last-name">Введите фамилию</label>
    <input type="text" id="last-name" name="last_name">
    <label for="first-name">Введите имя</label>
    <input type="text" id="first-name" name="first_name"><br>
    <span>Закажите товар</span><br>
    <label for="cdrom">CDROM</label>
    <select name="cdrom" id="cdrom">
      <?php
      foreach ($cdrom as $index => $value) {
        echo "<option value=$index>$index $value руб.</option>";
      }
      ?>
    </select>
    <label for="hdd">HDD</label>
    <select name="hdd" id="hdd">
      <?php
      foreach ($hdd as $index => $value) {
        echo "<option value=$index>$index $value руб.</option>";
      }
      ?>
    </select><br>
    <button type="submit" name="button">Заказ!</button>
  </form>
  <?php
  } else {
    $count = $cdrom[$_REQUEST['cdrom']] + $hdd[$_REQUEST['hdd']];
  ?>
  <span>
    Уважаемый, <?php echo $_REQUEST['last_name'].' '.$_REQUEST['first_name'] ?><br>
    Вы заказали товар на сумму <?php echo $count ?><br>
    <?php
    if ($count < 2400) echo 'Спасибо за покупку!';
    elseif ($count > 2400) echo 'В следующий раз Вы получите скидку 10%!';
    else echo 'В следующий раз Вы получите скидку 5%!';
    ?>
  </span>
  <?php
  }
  ?>
</body>
</html>