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
      isset($_REQUEST['button'])
      && !empty($_REQUEST['last_name'])
      && !empty($_REQUEST['first_name'])
      && !empty($_REQUEST['gender'])
      && !empty($_REQUEST['education'])
      && !empty($_REQUEST['courses'])
    ) {
  ?>
  <span>
    Уважаем<?php
      echo $_REQUEST['gender'] == 'female' ? 'ая' : 'ый';
    ?>, <?php
      echo $_REQUEST['last_name'].' '.$_REQUEST['first_name'];
    ?>! Мы рады приветствовать Вас на наших курсах по <?php
      foreach ($_REQUEST['courses'] as $index => $course) {
        echo $index == 0 ? $course : ', '.$course;
      }
    ?>
  </span>
  <?php
    } else {
  ?>
  <form>
    <label for="last-name">Фамилия</label><br>
    <input type="text" id="last-name" name="last_name"><br><br>
    <label for="first-name">Имя</label><br>
    <input type="text" id="first-name" name="first_name"><br><br>
    <label>Пол</label><br>
    <div>
      <input type="radio" id="male" value="male" name="gender"/><label for="male">м</label>
      <input type="radio" id="female" value="female" name="gender"/><label for="female">ж</label>
    </div><br>
    <label for="education">Образование</label><br>
    <select name="education" id="education">
      <option value="elementary">Начальное</option>
      <option value="secondary" selected>Среднее</option>
      <option value="higher">Высшее</option>
    </select><br><br>
    <label>Хочу записаться на курсы</label><br>
    <div>
      <input type="checkbox" id="1c" value="1c" name="courses[]"/><label for="1c">1С</label>
      <input type="checkbox" id="php" value="php" name="courses[]"/><label for="php">PHP</label>
      <input type="checkbox" id="c#" value="c#" name="courses[]"/><label for="c#">C#</label>
    </div><br>
    <button type="submit" name="button">OK</button>
    <button type="reset">Отмена</button>
  </form><br>
  <?php
    if (
      isset($_REQUEST['button'])
      && (
        empty($_REQUEST['last_name'])
        || !empty($_REQUEST['first_name'])
        || !empty($_REQUEST['gender'])
        || !empty($_REQUEST['education'])
        || !empty($_REQUEST['courses'])
      )
    ) {
  ?>
  <span style="color: red;">Не все данные введены!</span>
  <?php } ?>
  <?php } ?>
</body>
</html>