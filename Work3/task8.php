<html>
    <?php
    include("data.php");
    require("letter.php");
    const SIGN = "С уважением, Вася!<br>";
    for ($i = 0; $i <= 2; $i++) {
        echo "<br>";
        echo "Уважаемый (ая) ".$users[$i][0]."<br>";
        echo "Приглашаем Вас на  ".$events[$i]."<br>";
        echo $messages[$i]."<br>";
        echo SIGN;
        if ($i == 2) echo "= Все сообщения были отправлены!=";
    };
    ?>
</html>