<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  if (
    !isset($_POST['with_form'])
    && !isset($_GET['without_form'])
    || empty($_REQUEST['last_name'])
    || empty($_REQUEST['first_name'])
    || empty($_REQUEST['gender'])
  ) {
  ?>
  <form method="POST">
    <label for="last-name">Фамилия</label>
    <input type="text" id="last-name" name="last_name">
    <br>
    <label for="first-name">Имя</label>
    <input type="text" id="first-name" name="first_name">
    <br>
    <span>Пол</span>
    <input type="radio" id="male" name="gender" value="male"><label for="male">Мужчина</label>
    <input type="radio" id="female" name="gender" value="female"><label for="female">Женщина</label>
    <br>
    <button type="submit" name="with_form">Ok</button>
    <button type="reset">Отмена</button>
  </form>
  <?php
  if (
    (isset($_POST['with_form']) || isset($_GET['without_form']))
    && (empty($_POST['last_name']) || empty($_POST['first_name']) || empty($_REQUEST['gender']))
  ) {
  ?>
  <span style='color: red;'>Введены не все данные</span>
  <?php
  }
  ?>
  <?php
  } elseif (isset($_POST['with_form'])) {
  ?>
  <span>
    Здравствуйте уважаем<?php echo $_REQUEST['gender'] == 'female' ? 'ая' : 'ый'?>, <?php echo $_POST['last_name'].' '.$_POST['first_name'] ?>!
  </span>
  <br>
  <a
    href="http://localhost/php/Work5/task16.php?last_name=<?php
    echo $_POST['last_name']
    ?>&first_name=<?php
    echo $_POST['first_name']
    ?>&gender=<?php
    echo $_POST['gender']
    ?>&without_form"
  >
    Передача данных без формы
  </a>
  <?php
  } elseif (isset($_GET['without_form'])) {
  ?>
  <span><?php echo $_REQUEST['last_name'].' '.$_REQUEST['first_name'] ?>, Ваши данные переданы в скрипт без использования формы</span>
  <?php
  }
  ?>
</body>
</html>