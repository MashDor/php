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
    <label for="first-name">Имя</label>
    <input type="text" id="first-name" name="first_name">
    <br>
    <label for="last-name">Фамилия</label>
    <input type="text" id="last-name" name="last_name">
    <br>
    <label for="contact-way">Способ связи</label>
    <select name="contact_way" id="contact-way">
      <option value="phone">Телефон</option>
      <option value="email">E-mail</option>
      <option value="address">Почта</option>
    </select>
    <br>
    <button type="submit" name="button1">Ok</button>
    <button type="reset">Отмена</button>
  </form>
  <?php
  } elseif (isset($_REQUEST['button1'])) {
  ?>
  <form>
    <input name="first_name" value="<?php echo $_REQUEST['first_name'] ?>" style="display: none;">
    <input name="last_name" value="<?php echo $_REQUEST['last_name'] ?>" style="display: none;">
    <input name="contact_way" value="<?php echo $_REQUEST['contact_way'] ?>" style="display: none;">
    <label for="contact">Введите, пожалуйста, свой <?php
    if ($_REQUEST['contact_way'] == 'phone') echo 'телефон';
    elseif ($_REQUEST['contact_way'] == 'email') echo 'e-mail';
    elseif ($_REQUEST['contact_way'] == 'address') echo 'адрес';
    ?></label>
    <input type="text" id="contact" name="contact">
    <br>
    <button type="submit" name="button2">Ok</button>
    <button type="reset">Отмена</button>
  </form>
  <?php
  } elseif (isset($_REQUEST['button2'])) {
  ?>
  <span>
    Фамилия: <?php echo $_REQUEST['last_name'] ?><br>
    Имя: <?php echo $_REQUEST['first_name'] ?><br>
    <?php
    if ($_REQUEST['contact_way'] == 'phone') echo 'Телефон';
    elseif ($_REQUEST['contact_way'] == 'email') echo 'E-mail';
    elseif ($_REQUEST['contact_way'] == 'address') echo 'Адрес';
    ?>: <?php echo $_REQUEST['contact'] ?>
  </span>
  <?php
  }
  ?>
</body>
</html>