<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  if (!isset($_REQUEST['button1']) && !isset($_REQUEST['button2'])) {
  ?>
  <form>
    <label for="last-name">Фамилия</label>
    <input type="text" id="last-name" name="last_name">
    <br>
    <label for="first-name">Имя</label>
    <input type="text" id="first-name" name="first_name">
    <br>
    <label for="education">Образование</label>
    <select name="education" id="education">
      <option value="highest">Высшее</option>
      <option value="secondary">Среднее</option>
      <option value="elementary">Начальное</option>
    </select><br>
    <button type="submit" name="button1">Далее</button>
  </form>
  <?php
  } elseif (isset($_REQUEST['button1'])) {
    $last_name = $_REQUEST['last_name'];
    $first_name = $_REQUEST['first_name'];
  ?>
  <span>
    Уважаемый, <?php echo $last_name.' '.$first_name ?>!
    Введите наименованиие 
    <?php
    if ($_REQUEST['education'] == 'highest') echo 'ВУЗа';
    elseif ($_REQUEST['education'] == 'secondary') echo 'колледжа';
    elseif ($_REQUEST['education'] == 'elementary') echo 'школы';
    ?>
  </span>
  <form>
    <input type="text" id="last-name" name="last_name" value="<?php echo $_REQUEST['last_name']?>" style="display: none;">
    <input type="text" id="first-name" name="first_name" value="<?php echo $_REQUEST['first_name']?>" style="display: none;">
    <input type="text" name="institution">
    <button type="submit" name="button2">Отправить</button>
  </form>
  <?php
  } else {
    $last_name = $_REQUEST['last_name'];
    $first_name = $_REQUEST['first_name'];
  ?>
  <span>
    Уважаемый, <?php echo $last_name.' '.$first_name ?>!
    Вы учитесь в <?php echo $_REQUEST['institution'] ?>
  </span>
  <?php
  }
  ?>
</body>
</html>