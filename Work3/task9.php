<?php
echo "<br>";
$grades = array("5", "2", "5");
$has_bad_grades = false;
$average_grade = 0;
for ($i = 0; $i < 3; $i++) {
    if ($grades[$i] <= 2) $has_bad_grades = true;
    $average_grade += $grades[$i];
    if ($i == 2) $average_grade /= 3;
}
echo "Уважаемый абитуриент!<br>Ваш средний балл по результатам экзаменов: $average_grade<br>";
if ($has_bad_grades == false) {
    if ($average_grade == 5) echo "Вы поступили и будете получать повышенную стипендию!";
    elseif ($average_grade > 4) echo "Вы поступили и будете получать стипендию!";
    elseif ($average_grade >= 3.5) echo "Вы поступили!";
    else echo "Слишком низкий средний балл. Приходите в другой раз!";
}
else  echo "У вас есть плохие оценки. Приходите в другой раз!";
?>