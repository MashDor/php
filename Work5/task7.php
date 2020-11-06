<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form>
    <label style='width: 300px; display:block;' for="login">Логин</label>
    <input style='width: 300px; display:block;' type="text" id="login" name="login"><br>
    <label style='width: 300px; display:block;' for="password">Пароль</label>
    <input style='width: 300px; display:block;' type="password" id="password" name="password"><br>
    <label style='width: 300px; display:block;' for="confirm">Подтверждение пароля</label>
    <input style='width: 300px; display:block;' type="password" id="confirm" name="confirm"><br>
    <button type="submit" name="button">Ok</button>
    <button type="reset">Отмена</button>
  </form>
  <?php
  if (isset($_REQUEST['button'])) {
    if ($_REQUEST['password'] !== $_REQUEST['confirm']) echo 'Пароль не подтвержден!';
    elseif (empty($_REQUEST['password']) || empty($_REQUEST['confirm']) || empty($_REQUEST['login'])) echo 'Заполните все поля!';
    else echo 'Регистрация прошла успешно';
  }
  ?>
</body>
</html>