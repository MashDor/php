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
  <form>
    <label for="name">Введите имя</label>
    <input type="text" id="name" name="name"/><br>
    <span>Результаты экзаменов:</span><br>
    <label for="mathematics">математика</label>
    <select name="mathematics" id="mathematics">
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
    <label for="physics">физика</label>
    <select name="physics" id="physics">
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
    <label for="writing">сочинение</label>
    <select name="writing" id="writing">
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select><br>
    <button type="submit" name="button">Подача запроса</button>
  </form>
  <?php
  } else {
    $average_score = (
      $_REQUEST['mathematics'] + $_REQUEST['physics'] + $_REQUEST['writing']
    ) / 3;
  ?>
  <span>
    Уважаемый, <?php echo $_REQUEST['name'] ?>!<br>
    Ваш средний балл, по результатам вступительных экзаменов: <?php
    echo $average_score
    ?><br>
    <?php
    if (
      $average_score < 3.5
      || $_REQUEST['mathematics'] == 2
      || $_REQUEST['physics'] == 2
      || $_REQUEST['writing'] == 2
    ) echo 'Приходите в следующий раз.';
    elseif ($average_score < 4) echo 'Вы поступили.';
    elseif ($average_score < 5) echo 'Вы поступили и будете получать стипендию.';
    else echo 'Вы поступили и будете получать повышенную стипендию!';
    ?>
  </span>
  <?php
  }
  ?>
</body>
</html>