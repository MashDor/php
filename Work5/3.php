<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
if (!empty($first_name) && !empty($last_name)) {
  $lecture_times = array('php' => '10:00', 'lisp' => '11:00', 'perl' => '12:00', 'unix' => '13:00');
  $lecturers = array('php' => 'Андрей Дмитриевич', 'lisp' => 'Петр Петрович', 'perl' => 'Иван Иванович', 'unix' => 'Арсений Арсеньевич');
  define('MEETING_TIME', '14:00');
  define('SIGN', 'С уважением, администрация');
  $hasCourses = (bool)count($_POST['courses']) > 0;
?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  Здравствуйте, уважаемый(ая) <?php echo $_POST['first_name'].' '.$_POST['last_name'] ?>!<br><br>

  Сообщаем вам, что <?php echo $hasCourses ? 'выбранные Вами лекции состоятся 12 мая' : 'следующее собрание студентов состоится 12 мая в 18:00';?><br><br>
  
  <?php
  if ($hasCourses) {
    echo '<ul>';
    foreach ($_POST['courses'] as $course) echo "<li>лекция по $course в $lecture_times[$course] (Ваш лектор, $lecturers[$course])</li>";
    echo '</ul><br><br>';
  }
  ?>

  <?php echo SIGN;?>
</body>
</html>
<?php
}
else {
  $html = include('./form3.html');
  echo "<span style='position: absolute; top: 0; left: calc(50% - 641.44px / 2); color: red;'>Вы не ввели имя или фамилию, заполните форму повторно!!!<span>".$html; 
}
?>
