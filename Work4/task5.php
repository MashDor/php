<html>
  <body>
    <table border=1 style="border-collapse: collapse;">
      <tr><th align=left width=150>Параметры</th><th align=left width=150>Значение</th></tr>
      <tr bgcolor=red><td>IP адрес сервера</td><td><?php echo $_SERVER['SERVER_ADDR']?></td></tr>
      <tr bgcolor=red><td>Имя хоста</td><td><?php echo $_SERVER['SERVER_NAME']?></td></tr>
      <tr bgcolor=red><td>Имя и версия протокола</td><td><?php echo $_SERVER['SERVER_PROTOCOL']?></td></tr>
      <tr bgcolor=green><td>Метод запроса</td><td><?php echo $_SERVER['REQUEST_METHOD']?></td></tr>
      <tr bgcolor=green><td>Тип и версия браузера и ОС пользователя</td><td><?php echo $_SERVER['HTTP_USER_AGENT']?></td></tr>
      <tr bgcolor=green><td>IP адрес пользователя</td><td><?php echo $_SERVER['REMOTE_ADDR']?></td></tr>
      <tr bgcolor=green><td>Порт на удаленной машине</td><td><?php echo $_SERVER['REMOTE_PORT']?></td></tr>
      <tr bgcolor=red><td>Абсолютный путь к скрипту</td><td><?php echo $_SERVER['SCRIPT_FILENAME']?></td></tr>
      <tr bgcolor=red><td>Порт на ПК сервера</td><td><?php echo $_SERVER['SERVER_PORT']?></td></tr>
      <tr bgcolor=red><td>Путь к текущему исполняемому скрипту</td><td><?php echo $_SERVER['SCRIPT_NAME']?></td></tr>
    </table>
  </body>
</html>