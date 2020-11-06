<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form>
    <span>1. Как передаются данные методом GET?</span><br>
    <input type="radio" name="question1" id="q1a1" value="1">
    <label for="q1a1">Данные передаются в виде пар имя_переменной=значение</label><br>
    <input type="radio" name="question1" id="q1a2" value="2">
    <label for="q1a2">Только через форму</label><br>
    <input type="radio" name="question1" id="q1a3" value="3">
    <label for="q1a3">Через сессию</label><br>
    <span>2. Где обычно выполняются скрипты написанные на PHP?</span><br>
    <input type="radio" name="question2" id="q2a1" value="1">
    <label for="q2a1">На стороне клиента</label><br>
    <input type="radio" name="question2" id="q2a2" value="2">
    <label for="q2a2">На стороне сервера</label><br>
    <input type="radio" name="question2" id="q2a3" value="3">
    <label for="q2a3">В окне браузера</label><br>
    <span>3. Что такое CGI?</span><br>
    <input type="radio" name="question3" id="q3a1" value="1">
    <label for="q3a1">Программа которую вызвыает http-сервер</label><br>
    <input type="radio" name="question3" id="q3a2" value="2">
    <label for="q3a2">Спецификация интерфейса прикладной программы и http-сервера</label><br>
    <input type="radio" name="question3" id="q3a3" value="3">
    <label for="q3a3">Стандарт разметки докуметнта</label><br>
    <span>4. Выберите правильный ответ</span><br>
    <input type="radio" name="question4" id="q4a1" value="1">
    <label for="q4a1">неправильный ответ</label><br>
    <input type="radio" name="question4" id="q4a2" value="2">
    <label for="q4a2">неправильный ответ</label><br>
    <input type="radio" name="question4" id="q4a3" value="3">
    <label for="q4a3">правильный ответ</label><br>
    <span>5. Выберите неправильный ответ</span><br>
    <input type="radio" name="question5" id="q5a1" value="1">
    <label for="q5a1">неправильный ответ</label><br>
    <input type="radio" name="question5" id="q5a2" value="2">
    <label for="q5a2">правильный ответ</label><br>
    <input type="radio" name="question5" id="q5a3" value="3">
    <label for="q5a3">это вопрос с подвохом</label><br>
    <button type="submit" name="button">Ответить</button><br>
  </form>
  <?php
  $right_answers = array("1", "2", "2", "3", "3");
  if (isset($_REQUEST['button'])) {
    $right_answer_count = 0;
    for ($i = 0; $i < 5; $i++) {
      if ($right_answers[$i] === $_REQUEST['question'.($i+1)]) $right_answer_count++;
    }
    echo 'Ваша оценка: '.($right_answer_count <= 2 ? 2 : $right_answer_count);
  }
  ?>
</body>
</html>
