<?php
$teachers = array('БД'=>'Попов','КГ'=>'Иванов','ОАиП'=>'Петров','МТ'=>'Коньков');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form>
    <label for="subject">Выберите дисциплину</label><br>
    <select name="subject" id="subject">
      <?php
      foreach($teachers as $subject => $teacher)
      echo "<option>$subject</option>";
      ?>
    </select><br>
    <button type="submit">OK</button>
  </form>
  <?php
  $subject = $_REQUEST['subject'];
  $teacher = $teachers[$subject];
  if (!empty($subject)) echo "Дисциплина $subject. Преподаватель $teacher";
  ?>
</body>
</html>